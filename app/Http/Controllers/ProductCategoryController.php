<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd('enter');
        $productcategories = ProductCategory::all();

        return view('admin.productcategory.index', compact('productcategories'));
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
        $this->validate($request,[

            'name' => 'required'
        ]);
        $productcategory = $request->all();

        ProductCategory::create($productcategory);

        // Session::flash('success', 'Category has been created.');

        return redirect('/admin/productcategory')->withMessage('Category created sucessfully.');
    }

    public function show(ProductCategory $productcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productcategory = ProductCategory::findOrFail($id);
        return view('admin.productcategory.edit', compact('productcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'name'=>'required'
        ]);

        $productcategory = ProductCategory::findOrFail($id);

        $productcategory->update($request->all());

        return redirect()->route('productcategory.index')->withMessage('Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $productcategory = ProductCategory::findOrFail($id);

        $productcategory->delete();

        return redirect()->route('admin.productcategory.index')->withMessage('Category has been deleted');
    }
}
