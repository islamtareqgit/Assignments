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

					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<div class="card">
					
									<div class="card-body">
										
								<h1>Name</h1>
								<h2>Tareq Islam Profile</h2>
								   <table class="table">

									   
										   
									   
									<tr>
										<td>Name</td>
										<td>Tareq Islam</td>
									</tr>
									<tr>
										<td>Email</td>
										<td>tareqislam06@gmail.com</td>
									</tr>
					
									<tr>
										<td>Cell</td>
										<td>01778276163</td>
									</tr>
									<tr>
										<td>Location</td>
										<td>Khilgaon</td>
									</tr>
									
									<tr>
										<td>Gender</td>
										<td>Male</td>
									</tr>
									<tr>
										<td>Status</td>
										<td>Active</td>
									</tr>
									<tr>
										<td>Photo</td>
										<td><img src="{{URL::to('public/media/staff/cb1b996f523a231ed6d8e9cfb8bfae41.jpg')}}" alt=""></td>
									</tr>
								
					
					
								   </table>
									
					
									</div>
								</div>
							</div>
						</div>
					</div>

					
					
				</div>



@endsection()