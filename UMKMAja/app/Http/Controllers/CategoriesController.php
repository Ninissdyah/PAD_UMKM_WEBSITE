<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Dashboard;
use App\Models\Product;
use Auth;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "category",
            'category' => Category::all()
        );
        return view('category.categories')->with($data);
    }

    public function food()
    {
        $dashboard = Dashboard::where('category', 'Food And Drink')->paginate(12);
        return view('category.food and drink', compact('dashboard'));
    }

    public function art()
    {
        $dashboard = Dashboard::where('category', 'Art')->paginate(12);
        return view('category.art', compact('dashboard'));
    }

    public function clothes()
    {
        $dashboard = Dashboard::where('category', 'Clothes')->paginate(12);
        return view('category.clothes', compact('dashboard'));
    }

    public function furniture()
    {
        $dashboard = Dashboard::where('category', 'Furniture')->paginate(12);
        return view('category.furniture', compact('dashboard'));
    }

    public function electronic()
    {
        $dashboard = Dashboard::where('category', 'Electronic')->paginate(12);
        return view('category.electronic', compact('dashboard'));
    }

    public function beauty()
    {
        $dashboard = Dashboard::where('category', 'Beauty And Health')->paginate(12);
        return view('category.beauty', compact('dashboard'));
    }

    public function showStore($id)
    {
        $data = array(
            'id' => "dashboard",
            'dashboard' => Dashboard::find($id)
        );
        return view('category.store.store')->with($data);
    }

    public function index2($id)
    {
        $dashboard = Dashboard::find($id)->toArray();
        $vendorId = $dashboard['vendorId'];
        $product = Product::where('vendorId', $vendorId)->paginate(6);
        return view('category.store.productDetail', compact('product'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
