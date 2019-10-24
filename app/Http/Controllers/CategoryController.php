<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $category=Category::all();
        $arr['category']=$category;
        return view ('admin.category.index',$arr);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view ('admin.category.create');
        
        
        
        
        
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
        
        
		$photo=$request->file('image');
				$path=$photo->storeAs('img',$photo->getClientOriginalName(),'images');
		
		Category::Create([
			
		'name'=>request('name'),	
		'description'=>request('description'),	
			'user_id'=>Auth::user()->id,	
	'image'=>$path

			
		]);
return redirect('/admin/category');     

        
        
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category=Category::find($id);
        $arr['category']=$category;
        return view ('admin.category.show',$arr);
        
        
        
        
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
                $category=Category::find($id);
$arr['category']=$category;
        return view ('admin.category.edit',$arr);
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $request->image;

        $category->save();

        return redirect('/admin/category');
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $category=Category::find($id);
        $category->delete();
        return redirect()->back(); 
    }
}
