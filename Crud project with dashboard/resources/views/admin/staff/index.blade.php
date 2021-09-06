@extends('admin.layouts.app')

@section('main')
<div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- /Page Header -->

					<div class="row">
						<a class="btn btn-primary" href="{{ route('staff.create')}}">Add new Staff</a>
						<div class="col-lg-12"><br>

							@if(Session::has('success'))
							<p class="alert alert-success">{{ Session::get('success')}}
								<button class="close" data-dismiss="alert">&times;</button>
							</p>
							
								
							@endif
							<br>
							<br>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Staff information-Published</h4>
									<a class="badge badge-info" href="{{ route('staff.index')}}">Published</a>
									<a class="badge badge-danger" href="{{ route('staff.trash.all')}}">Trash</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Email</th>
													<th>Cell</th>
													<th>Location</th>
													<th>Gender</th>
													<th>Status</th>
													<th>Photo</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
                                              @foreach($all_data as $data)
												  
											 
												
													
												
												<tr>
													<td>{{ $loop->index +1}}</td>
													<td>{{ $data-> name }}</td>
													<td>{{ $data-> email }}</td>
													<td>{{ $data-> cell }}</td>
													<td>{{ $data-> location }}</td>
													<td>{{ $data-> gender }}</td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked="">
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>

													<td><img style="width:50px; height=50px; display=block;" src="{{ URL::to('media/staff/')}}/{{$data-> photo}}" alt=""></td>
													<td>
														<a class="btn btn-success" href="{{ route('staff.show',$data -> id)}}"><i class="fe fe-eye">
														</i></a>

													<a class="btn btn-info" href="#"><i class="fe fe-pencil">
													</i></a>
													
													<a class="btn btn-danger" href="{{ route('staff.trash', $data -> id)}}">
														<i class="fe fe-trash">
															</i></a>
													</td>

												</tr>
												@endforeach

												
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						
					</div>

					
					
				</div>

				

@endsection()
