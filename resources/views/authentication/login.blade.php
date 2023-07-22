<!DOCTYPE html>
<html>
@include('layouts.auth_includes.links')
	<body class="login-page">
		@include('authentication.login_header')
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="{{asset('images/logo.jpg')}}" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Login To COP ASSISTANT</h2>
							</div>
															@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif

							<form class="tab-wizard2 wizard-circle wizard"  method="POST" action="{{ route('login') }}">@csrf

								<div class="form-group">
									<label>
										Church Name:
									</label>
								<div class="col-sm-12">
									<input type="text" class="form-control" name="church_name"/>
								</div>
								</div>
								 
								<div class="form-group">
									<label>Church Code:</label>
									<div class="col-sm-12">
										<input type="text" class="form-control"  name="church_code"/>
									</div>
									</div>


								<div class="row pb-30">
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck1"
											/>
											<label class="custom-control-label" for="customCheck1"
												>Remember</label
											>
										</div>
									</div>
									<div class="col-6">
										<div class="forgot-password">
											<a href="forgot-password.html">Forgot Password</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											
											<button class="btn btn-primary btn-lg btn-block" type="submit">SIGN IN</button>
										
										</div>
										<div
											class="font-16 weight-600 pt-10 pb-10 text-center"
											data-color="#707373"
										>
											OR
										</div>
										<div class="input-group mb-0">
											<a
												class="btn btn-outline-primary btn-lg btn-block"
												href="{{ route('register') }}"
												>Register To Create Account</a
											>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
@include('layouts.auth_includes.login_scripts')
