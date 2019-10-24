@extends('layouts.admin')
@section('content')
@section('title')
Edit Category

@endsection
      <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                              {{$category->name}}
                        
                        </div>
                        <div class="panel-body">
                         <form method="post" action="{{ '/admin/category/' . $category->id}}" enctype="multipart/form-data">
				{{ csrf_field() }} 
            @method('PUT')

	
  <div class="form-group">
	  
	  
    <label >Section name</label>
	  
        <input type="text" name="name"  value="{{$category->name}}" class="form-control"  placeholder="">
        <input type="text" name="description" value="{{$category->description}}" class="form-control"  placeholder="">
        <input type="file" name="image" value="{{$category->image}}"  class="form-control"  placeholder="">

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