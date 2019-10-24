 @extends('layouts.admin')
@section('content')

@section('title')
Show Category
@endsection
<div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                     {{$category->name}}
							
							
						 
						
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<a href="/admin/section/add" class="btn btn-info" style="margin:10px;">Add Section</a>
						


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
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
										   <td><img src="/images/{{$category->image}}" style="width:100px;height:100px;"  ></td>
	
											<td>
											
											<a href="{{route('category.edit', $category->id)}}" class="btn btn-warning">Update</a>
                                                <br>
                                                <br>
									  <form action="{{ route('category.destroy', $category->id)}}" method="post">
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