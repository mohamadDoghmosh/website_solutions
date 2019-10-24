<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$service=Service::all();
		$arr['service']=$service;
		return view('admin.service.index',$arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		    return view('admin.service.create');

		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Service $service )
    {
       
					

		
		$photo=$request->file('image');
				$path=$photo->storeAs('img',$photo->getClientOriginalName(),'images');
		
		Service::Create([
			
		'name'=>request('name'),	
		'description'=>request('description'),	
			'user_id'=>Auth::user()->id,	
	'image'=>$path

			
		]);
return redirect()->back();     

		
		
	
		
		
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
		$service=Service::find($service);
		$arr['service']=$service;
		 return view('admin.service.show',$arr);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
		
		
        $service->name = $request->name;
        $service->description = $request->description;
        $service->image = $request->image;

        $service->save();

        return redirect('/admin/service');
		
		
		
		
		
		
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		        $service = Service::find($id);
$service->delete();
		
	        return redirect('/service');
	
		
    }
}
