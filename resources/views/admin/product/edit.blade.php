@extends('layouts.admin')
@section('title')
Edit Product

@endsection
@section('content')

      <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
Edit {{$product->name}}
						</div>
                        <div class="panel-body">
                         <form method="post" action="{{ '/admin/product/' . $product->id}}" enctype="multipart/form-data" >
				{{ csrf_field() }} 
            @method('PUT')

	
  <div class="form-group">
	  
	  
    <label >name Product</label>
	  
        <input type="text" name="name" value="{{$product->name}}" class="form-control"  placeholder="title">

  </div>
           <div class="form-group">
	  
	  
    <label >description Product</label>
	  
        <input type="text" name="description" value="{{$product->description}}" class="form-control"  placeholder="title">

  </div>
               <div class="form-group">
	  
	  
    <label >image Product</label>
	  
        <input type="file" name="image" value="{{$product->image}}" class="form-control"  placeholder="title">

  </div>              
							 
<select class="form-control" name="category_id">
	@foreach($category as $category)
	<option value="{{$category->id}}"  >{{$category->name}}</option>
	@endforeach
</select>
		

	
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