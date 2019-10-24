<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Support\Facades\Auth;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                $product=Product::all();
                $arr['product']=$product;
        $category=Category::all();

                return view ('admin.product.index',$arr);

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category=Category::all();
       
        $arr['category']=$category;
        return view ('admin.product.create',$arr);

        
        
        
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
$input=$request->only('name','description','category_id');
$input['user_id']=Auth::user()->id;
$photo=$request->file('image');
$path=$photo->storeAs('img',$photo->getClientOriginalName(),'images');
 $input['image']=$path;
  $product=Product::Create($input); 
			return redirect('/admin/product');     
        
        
        
        
        
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $product=Product::find($id);
        $arr['product']=$product;
        return view('admin.product.show',$arr);
        
        
        
        
        
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
        
        
        
     $category=Category::all();

        
  $product=Product::find($id);
$arr['product']=$product;
 $arr['category']=$category;

   return view ('admin.product.edit',$arr);
        
        
        
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
        
          $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;

        $product->save();

        return redirect('/admin/product');
        
        
        
        
        
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
                $product=Product::find($id);
$product->delete();
        
        
        
        
    }
}
