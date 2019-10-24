 @extends('layouts.admin')

@section('title')
 All Users

@endsection
@section('content')

<div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                     All Users
							
							
						 
						
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<div class="col-md-1">
						<a href="{{route('user.create')}}" class="btn btn-info" style="margin:10px;">Add User</a>
						
					</div>

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name </th>
                                        <th>Email</th>
                                        <th>Role</th>

										 <th>Password</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
										@foreach($user as $user)
										<tr class="odd gradeX">
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
										 <td>{{$user->email}}</td>
                                         <td>{{$user->role}}</td>
  
                                          <td>{{$user->password}}</td>
 
											<div class="col-md-2">

											<td>
											<a href="{{ route('user.edit', $user->id)}}" class="btn btn-warning">Update</a>
                                                <br>
                                                <br>

												  <form action="{{ route('user.destroy', $user->id)}}" method="post">
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