 @extends('layouts.admin')

@section('title')
Show User
@endsection
@section('content')

<div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                     {{$product->name}}
							
							
						 
						
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<a href="{{route('product.create')}}" class="btn btn-info" style="margin:10px;">Add User</a>
						


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name </th>
                                        <th>Description</th>
										  <th>image</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
										<tr class="odd gradeX">
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
										   <td><img src="/images/{{$product->image}}" style="width:100px;height:100px;"></td>
	
											<td>
											
											<a href="{{route('product.edit', $product->id)}}" class="btn btn-warning">Update</a>
                                                <br>
                                                <br>
									  <form action="{{ route('product.destroy', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>

											</td>
											</tr>
                                    
								</tbody>
							</table>
						</div>
					</div>
	 </div>
</div>
@endsection