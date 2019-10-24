@extends('layouts.admin')
@section('title')
Add Product

@endsection
@section('content')

      <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
Post Info
						</div>
                        <div class="panel-body">
                         <form method="post" action="{{route('product.store')}}"enctype="multipart/form-data" >
				{{ csrf_field() }} 

	
  <div class="form-group">
	  
	  
    <label >name Product</label>
	  
        <input type="text" name="name" class="form-control"  placeholder="title">

  </div>
           <div class="form-group">
	  
	  
    <label >description Product</label>
	  
        <input type="text" name="description" class="form-control"  placeholder="title">

  </div>
               <div class="form-group">
	  
	  
    <label >image Product</label>
	  
        <input type="file" name="image" class="form-control"  placeholder="title">

  </div>              
							 
<select class="form-control" name="category_id">
	@foreach($category as $category)
	<option value="{{$category->id}}"  >{{$category->name}}</option>
	@endforeach
</select>
		

	
	<br>
	<br>
  <button type="submit" class="btn btn-primary">ADD</button>
</form>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>   




 

@endsection