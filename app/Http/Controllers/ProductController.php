<?php

namespace App\Http\Controllers;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $products = Product::latest()->paginate(5);
//        return view('products.index',compact('products'))
//            ->with('i', (request()->input('page', 1) - 1) * 5);
//    }
    public function index()
    {
//        $data['products'] = product::orderBy('id','desc')->paginate(10);,$data

        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $insert = [
            'slug' => SlugService::createSlug(Product::class, 'slug', $request->name),
            'name' => $request->name,
            'detail' => $request->detail,
        ];

        Product::insertGetId($insert);

        return Redirect::to('products')
            ->with('success','Greate! posts created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
