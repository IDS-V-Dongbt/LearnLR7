<?php

namespace App\Http\Controllers;

use App\models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $productcategory=ProductCategory::all();
        return view('website.backend.product_category.index', compact('productcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('website.backend.product_category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {   
        $slug=Str::slug($request->brand_name,'-');
        // $request->merge(['brand_name',$slug]);
        ProductCategory::create([
            'brand_name'=>$request->brand_name,
            'slug'=>$slug
        ]);



        return redirect()->route('productcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('website.backend.product_category.update', compact('productcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
       
    


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
