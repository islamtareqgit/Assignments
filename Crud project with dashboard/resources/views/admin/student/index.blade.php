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
						<a class="btn btn-primary" href="{{ route('student.create')}}">Add new Student</a>
						<div class="col-lg-12"><br>
							<div class="card">
								
								
							</div>
						</div>
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Students Table</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped mb-0">
											<thead>
												<tr>
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
													<td>{{ $data-> name}}</td>
													<td>{{ $data-> email}}</td>
													<td>{{ $data-> cell}}</td>
													<td>{{ $data-> location}}</td>
													<td>{{ $data-> gender}}</td>
													<td>

														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked="">
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td><img src="public/media/student/66a30f96facb74407ae801765002f2df.jpg" alt="">
													</td>
													<td>
														<a class="btn btn-sm bg-primary" data-toggle="modal" href="#">
															<i class="fe fe-eye"></i> View 

													<a class="btn btn-sm bg-warning" data-toggle="modal" href="#">
														<i class="fe fe-pencil"></i> Edit
													</a>
													<a data-toggle="modal" href="#delete_modal" class="btn btn-sm bg-danger">
														<i class="fe fe-trash"></i> Delete
													</a>
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


@endsection()