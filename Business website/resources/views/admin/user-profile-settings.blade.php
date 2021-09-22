@extends('admin.layouts.app')
@section('page-name', 'User Profile Settings')
@section('main')
<div class="content container-fluid">
					
					@include('page-header')


					
					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
											@if($user_data-> photo == Null)
												
											
											<img class="rounded-circle" alt="User Image" src="admin/assets/img/avatar-male.jpg">
											@else
											<img class="rounded-circle" alt="User Image" src="{{ URL::to('media/users/'.$user_data-> photo)}}">
											@endif
										</a>
									</div>
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0">{{ $user_data-> name}}</h4>
										<h6 class="text-muted">{{ $user_data-> email}}</h6>
										<div class="user-Address"><i class="fe fe-location"></i> {{ $user_data-> address}}</div>

										<div class="user-Biography"><i class="fe fe-book"></i> {{ $user_data-> biography}}</div>
										<div class="social">

                                          <ul style="list-style;none; width: 400px; font-size:30px;" class="d-flex flex-row justify-content-between">
                                             
											@if(isset($social->fb))
												
											
											<li><a href="#"><i class="fe fe-facebook" aria-hidden="true"></i></a>
												@endif	
												@if(isset($social->tw))	
											<li><a href="#"><i class="fe fe-twitter" aria-hidden="true"></i></a></li>
											@endif
											@if(isset($social->insta))	
											<li><a href="#"><i class="fe fe-instagram" aria-hidden="true"></i></a></li>
											@endif
											@if(isset($social->linkd))
											<li><a href="#"><i class="fe fe-pinterest" aria-hidden="true"></i></a></li>
											@endif
										  </ul>
										</div>

										<style>

											.social ul {

												list-style-type: none;
											}
										</style>
									</div>
									<!-- Profile  short -->
									<div class="col-auto profile-btn">
										
										<a href="#edit_personal_info" data-toggle="modal" class="btn btn-primary">
											Edit
										</a>
									</div>
									<!-- Edit Details Modal -->
									<div class="modal fade" id="edit_personal_info" role="dialog" aria-hidden="true" style="display: none;">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Personal Details</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="{{ route('user.profile.update.quick')}}" method="POST" enctype="multipart/form-data">
														<div class="row form-row">
															<div class="col-12 col-sm-6">
																<div class="form-group">
																	<label>Name</label>
																	<input name="name"type="text" class="form-control" value="{{ $user_data-> name}}">
																</div>
															</div>
															
															<div class="col-12 col-sm-6">
																<div class="form-group">
																	<label>Email ID</label>
																	<input name="email" type="text" class="form-control" value="{{$user_data-> email }}">
																</div>
															</div>
															
															<div class="col-12 col-sm-6">
																<div class="form-group">
																	<label>Biography</label>
																	<textarea class="form-control" name="biography" id="">{{$user_data-> biography}}</textarea>
																</div>
															</div>
															
															
															
															
															
															
															
				
															<div class="col-12">
																<div class="form-group">
																<label>Photo</label>
																	<input type="file" class="">
																</div>
															</div>
															
													
														</div>
														<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
									</li>
								</ul>
							</div>	
							<div class="tab-content profile-tab-cont">
								
								<!-- Personal Details Tab -->
								<div class="tab-pane fade active show" id="per_details_tab">
								
									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Personal Details{{ $user_data-> name}}</span> 
														<a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fe fe-edit mr-1"></i>Edit</a>
													</h5>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
														<p class="col-sm-10">{{ $user_data-> name}}</p>
													</div>
													
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
														<p class="col-sm-10">{{ $user_data-> email}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
														<p class="col-sm-10">{{ $user_data-> cell}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
														<p class="col-sm-10 mb-0">{{ $user_data-> address}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0">Biography</p>
														<p class="col-sm-10 mb-0">{{ $user_data-> biography}}</p>
													</div>
												</div>
											</div>
											
											<!-- Edit Details Modal -->
											<div class="modal fade" id="edit_personal_details" role="dialog" aria-hidden="true" style="display: none;">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Personal Details</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
														</div>
														<div class="modal-body">
															<form action="{{ route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
																@csrf
																<div class="row form-row">
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Name</label>
																			<input name="name"type="text" class="form-control" value="{{ $user_data-> name}}">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Username</label>
																			<input name="username"type="text" class="form-control" value="{{ $user_data-> username}}">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Email ID</label>
																			<input name="email" type="text" class="form-control" value="{{$user_data-> email }}">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Mobile</label>
																			<input name="cell" type="number" value="{{$user_data-> cell }}" class="form-control">
																		</div>
																	</div>
																	<div class="col-12">
																		<h5 class="form-title"><span>Address</span></h5>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																		<label>Address</label>
																			<input name="address" type="text" class="form-control" value="{{$user_data-> address }}">
																		</div>
																	</div>
																	
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Biography</label>
																			<textarea class="form-control" name="biography" id="">{{$user_data-> biography}}</textarea>
																		</div>
																	</div>
																	<div class="col-12">
																		
																		<div class="form-group">
							
																		<label>Facebook</label>
																			<input name="fb" type="text" value="{{$social-> fb}}" class="form-control">
																		</div>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																		<label>Twitter</label>
																			<input name="tw" type="text" value="{{$social-> tw}}" class="form-control">
																		</div>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																		<label>Pinterest</label>
																			<input name="linkd" type="text" value="{{$social-> linkd}}" class="form-control">
																		</div>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																		<label>Instagram</label>
																			<input name="insta" type="text" value="{{$social-> insta}}" class="form-control">
																		</div>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																		<label>Photo</label>
																			<input name="photo" type="file" class="">
																		</div>
																	</div>
																	
															
																</div>
																<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
															</form>
														</div>
													</div>
												</div>
											</div>
											<!-- /Edit Details Modal -->
											
										</div>

									
									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->
								
								<!-- Change Password Tab -->
								<div id="password_tab" class="tab-pane fade">
								
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													@include('validate')
													<form action="{{ route('change.user.pass')}}" method="POST">
														@csrf
														<div class="form-group">
															<label>Old Password</label>
															<input name="old_pass" type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>New Password</label>
															<input name="password" type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>Confirm Password</label>
															<input name="password_confirmation" type="password" class="form-control">
														</div>
														<button class="btn btn-primary" type="submit">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Change Password Tab -->
								
							</div>
						</div>
					</div>



					</div>

					
@endsection()