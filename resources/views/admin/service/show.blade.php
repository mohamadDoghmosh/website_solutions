 @extends('layouts.admin')
@section('content')

@section('title')
Show Service
@endsection
<div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                     All Section
							
							
						 
						
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
										@foreach($service as $service)
										<tr class="odd gradeX">
                                        <td>{{$service->id}}</td>
                                        <td>{{$service->name}}</td>
                                        <td>{{$service->description}}</td>
										   <td><img src="/images/{{$service->image}}"></td>
	
											<td>
											
											<a href="{{route('service.edit', $service->id)}}" class="btn btn-warning">Update</a>
                                               <br>
                                                <br>
									  <form action="{{ route('service.destroy', $service->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>

											</td>
											</tr>
                                       @endforeach
                                    
								</tbody>
							</table>
						</div>
					</div>
	 </div>
</div>
@endsection