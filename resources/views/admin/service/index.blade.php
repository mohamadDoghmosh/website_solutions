 @extends('layouts.admin')
@section('content')

@section('title')
All Services
@endsection
<div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                     All Services
							
							
						 
						
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<div class="col-md-1">
						<a href="{{route('service.create')}}" class="btn btn-info" style="margin:10px;">Add Service</a>
						
					</div>

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name </th>
                                        <th>Description</th>
										 <th>Image</th>

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
	                                        <td> <img src="/images/{{$service->image}}" style="width:100px;height:100px;"></td>
											<div class="col-md-2">

											<td>
											<a href="{{ route('service.edit', $service->id)}}" class="btn btn-warning">Update</a>
                                          <br>
                                                <br>
												  <form action="{{ route('service.destroy', $service->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>

                                                </td>
											</div>
											</tr>
                                       @endforeach
                                    
								</tbody>
							</table>
						</div>
					</div>
	 </div>
</div>
@endsection