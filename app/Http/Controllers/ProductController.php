<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        //$customerengagements = Product::where()->category_id(2);

       $categories = ProductCategory::all();

        return view('admin.products.index', compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = ProductCategory::all();

         if($categories->count() == 0 )
         {

             return redirect()->back()->withMessage('You must some categories before attempting to create a post');
         }
        $category = ProductCategory::pluck('name', 'id')->all();
        return view('admin.products.create', compact('category', 'categories'));
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
        //dd($request);
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);

        $product = $request->all();

        Product::create($product);

        return redirect()->route('admin.products.index')->withMessage('Product has been created.');
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
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);

        $category = ProductCategory::pluck('name', 'id')->all();
        return view('admin.products.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'name' => 'required',
            'description' => 'required',
            'price'=>'required',
            // 'thread'=>'required|min:20'
        ]);
        $product = Product::findOrFail($id);

        $input = $request->all();

        //auth()->user()->post()->update($input);

        $product->update($input);

        //Session::flash('success-msg', 'Post has been updated.');


        return redirect()->route('admin.products.index')->withMessage('Product has been updated.');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->withMessage('Product has been deleted.');
    }

    public function products()
    {
        $products = Product::all();
        //$customerengagements = Product::where()->category_id(2);

        // $users = DB::table('users')
        //              ->select(DB::raw('count(*) as user_count, status'))
        //              ->where('status', '<>', 1)
        //              ->groupBy('status')
        //              ->get();

        $customerengagements = DB::table('products')->select('*')->where('category_id','=',2)->get();//Product::all()->where('category_id', '==', 2);


        return view('products', compact('customerengagements'));
    }
    
}
