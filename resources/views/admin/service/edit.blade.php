@extends('layouts.admin')
@section('content')
@section('title')
Create Service

@endsection
      <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Primary Panel
                        </div>
                        <div class="panel-body">
                         <form method="post" action="{{ '/admin/service/' . $service->id}}" enctype="multipart/form-data">
				{{ csrf_field() }} 
            @method('PUT')

	
  <div class="form-group">
	  
	  
    <label >Section name</label>
	  
        <input type="text" name="name"  value="{{$service->name}}" class="form-control"  placeholder="">
        <input type="text" name="description" value="{{$service->description}}" class="form-control"  placeholder="">
        <input type="file" name="image" value="{{$service->image}}"  class="form-control"  placeholder="">

  </div>

	
	<br>
	<br>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>                  


@endsection