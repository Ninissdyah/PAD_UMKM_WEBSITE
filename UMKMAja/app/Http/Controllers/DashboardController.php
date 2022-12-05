<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\Admins;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;
use Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->guard('admin')->user()->vendorId;
        $dashboard = Dashboard::where('vendorId', $id)->get();
        return view('dashboard.dashboard', compact('dashboard'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dashboard = Dashboard::all();
        return view('dashboard.create', ['dashboard' => $dashboard]);
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
            'desc.required'    => 'Description Store is required!',
            'address.required'    => 'Address Store is required!',
            'category.required'    => 'Category Store is required!',
            'noWa.required'    => 'WhatsApp number is required!',
            'storeName.required'    => 'Store Name is required!',
            'storeName.uniqe' => 'The store name already exists!',
            'imagePath.image'    => 'Files must be in the form of images!',
            'imagePath.required'    => 'Store Image is required!',
            'titleProduct.max'     => 'The Store Name must contain a maximum of :max characters!',
            'imagePath.max'     => 'Image file size is too big! The maximum image size is :max!',
            'imagePath.mimes'     => 'Image files must be :mimes!'
        ];
        $this -> validate($request,[
            'imagePath' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            'storeName' => 'required|unique:dashboards|min:5|max:20',
            'desc' => 'required',
            'address' => 'required',
            'category' => 'required',
            'noWa' => 'required',
        ],$messages);

        $dashboard = new Dashboard;
        $dashboard->storeName = $request->input('storeName');
        $dashboard->category = $request->input('category');
        $dashboard->vendorId = Auth::guard('admin')->user()->vendorId;
        $dashboard->desc = $request->input('desc');
        $dashboard->address = $request->input('address');
        $dashboard->noWa = $request->input('noWa');
        $dashboard->ig = $request->input('ig');
        $dashboard->shopee = $request->input('shopee');
        $dashboard->others = $request->input('others');

        $image = request()->file('imagePath'); 
        if($image) { 
            $filenameFirst = $image->getClientOriginalName();
            $filenameUnik = pathinfo($filenameFirst, PATHINFO_FILENAME);
            $extension = $request->file('imagePath')->getClientOriginalExtension();
            $imageName = $filenameUnik . '_' . time() . '.' . $extension; 
            Image::make($request->file('imagePath'))->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save('storage/dashboard/'.'/'.$imageName);
            $dashboard->imagePath = $imageName;
        } 

        $dashboard->save();
        return redirect('/dashboard')->with(['success' => 'Dashboard created successfully!']);
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
            'id' => "dashboard",
            'dashboard' => Dashboard::find($id)
        );
        return view('dashboard.akun')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "dashboard",
            'dashboard' => Dashboard::find($id)
        );
        return view('dashboard.edit')->with($data);
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
        $messages = [
            'storeName.required'    => 'Store Name is required!',
            'imagePath.image'    => 'Files must be in the form of images!',
            'imagePath.required'    => 'Store Image is required!',
            'titleProduct.max'     => 'The Store Name must contain a maximum of :max characters!',
            'imagePath.max'     => 'Image file size is too big! The maximum image size is :max!',
            'imagePath.mimes'     => 'Image files must be :mimes!'
        ];
        $this -> validate($request,[
            'imagePath' => 'image|mimes:jpg,png,jpeg|max:5000',
            'storeName' => 'min:5|max:20',
            
        ],$messages);

        $dashboard = Dashboard::find($id);
        $dashboard->storeName = $request->input('storeName');
        $dashboard->category = $request->input('category');
        $dashboard->desc = $request->input('desc');
        $dashboard->vendorId = Auth::guard('admin')->user()->vendorId;
        $dashboard->address = $request->input('address');
        $dashboard->noWa = $request->input('noWa');
        $dashboard->ig = $request->input('ig');
        $dashboard->shopee = $request->input('shopee');
        $dashboard->others = $request->input('others');

        $image = request()->file('imagePath'); 
        if($request->hasfile('imagePath'))
        {   
            $destination = 'storage/dashboard/'.$dashboard->imagePath;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            if($image) { 
                $filenameFirst = $image->getClientOriginalName();
                $filenameUnik = pathinfo($filenameFirst, PATHINFO_FILENAME);
                $extension = $request->file('imagePath')->getClientOriginalExtension();
                $imageName = $filenameUnik . '_' . time() . '.' . $extension; 
                Image::make($request->file('imagePath'))->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('storage/dashboard/'.'/'.$imageName);
                $dashboard->imagePath = $imageName;
            } 
        }
        $dashboard->update();
        return redirect('/dashboard')->with(['berhasil' => 'Dashboard updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
