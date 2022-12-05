<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Dashboard;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        $idx = auth()->guard('admin')->user()->vendorId;
        $dashboard = Dashboard::where('vendorId', $idx)->get()->toArray();
        $id = $dashboard[0]['id'];
        $dashboardx = Dashboard::find($id)->toArray();
        $vendorId = $dashboardx['vendorId'];
        $product = Product::where('vendorId', $vendorId)->paginate(12);
        $no = 1;
        return view('product.product', compact('product'), compact('no'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        return view('product.postProduk', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'titleProduct.required'    => 'Title Product is required!',
            'imagePath.image'    => 'Files must be in the form of images!',
            'imagePath.required'    => 'Product Image is required!',
            'caprions.required'    => 'Caption is required!',
            'price.required'    => 'Price is required!',
            'titleProduct.max'     => 'The Product Title must contain a maximum of :max characters!',
            'imagePath.max'     => 'Image file size is too big! The maximum image size is :max!',
            'imagePath.mimes'     => 'Image files must be :mimes!'
        ];
        $this -> validate($request,[
            'imagePath' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            'titleProduct' => 'required|unique:products|min:5|max:20',
            'captions' => 'required',
            'price' => 'required'
        ],$messages);

        $product = new Product;
        $product->titleProduct = $request->input('titleProduct');
        $product->price = $request->input('price');
        $product->captions = $request->input('captions');
        $product->vendorId = Auth::guard('admin')->user()->vendorId;
        
        $image = request()->file('imagePath'); 
        if($image) { 
            $filenameFirst = $image->getClientOriginalName();
            $filenameUnik = pathinfo($filenameFirst, PATHINFO_FILENAME);
            $extension = $request->file('imagePath')->getClientOriginalExtension();
            $imageName = $filenameUnik . '_' . time() . '.' . $extension; 
            Image::make($request->file('imagePath'))->resize(500, 700, function ($constraint) {
                $constraint->aspectRatio();
            })->save('storage/product'.'/'.$imageName);
            $product->imagePath = $imageName;
        } 

        $product->save();
        return redirect('/product')->with(['success' => 'Product uploaded successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'id' => "product",
            'product' => Product::find($id)
        );
        return view('product.product')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $image = Product::findOrFail($id);
        $destination = 'storage/product/'.$product->imagePath;
        File::delete($destination);
        $product->delete();
        return redirect('/product')->with(['berhasil' => 'Product removed successfully!']);
    }
}
