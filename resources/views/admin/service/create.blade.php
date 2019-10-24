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
                         <form method="post" action="{{route('service.store')}}" enctype="multipart/form-data">
				{{ csrf_field() }} 

	
  <div class="form-group">
	  
	  
    <label >Service name</label>
	  
        <input type="text" name="name" class="form-control"  placeholder="">
          <label >Service description</label>

        <input type="text" name="description" class="form-control"  placeholder="">
        <input type="file" name="image" class="form-control" value="upload" placeholder="">

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