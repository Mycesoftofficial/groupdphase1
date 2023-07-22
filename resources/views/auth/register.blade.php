<!DOCTYPE html>
<html lang="en">
  @include('layouts.auth_includes.links')
<body class="account-page">

<div class="main-wrapper">
<div class="account-content">
<div class="login-wrapper">
<div class="login-content">
<div class="login-userset">
<div class="login-logo">
<img src="{{asset('auth_assets/assets/img/logo.png')}}" alt="img">
</div>
<div class="login-userheading">
<h3>Create an Account</h3>
<h4>Continue where you left off</h4>
</div>
<form method="POST" action="{{ route('register') }}">@csrf
	<div class="form-login">
		<label>Full Name</label>
		<div class="form-addons">
		<input type="text" name="name" placeholder="Enter your full name">
		<img src="{{asset('auth_assets/assets/img/icons/users1.svg')}}" alt="img">
		</div>
	</div>
	<div class="form-login">
		<label>Assembly Name</label>
		<div class="form-addons">
		<input type="text" name="assembly_name" placeholder="Enter your full name">
		<img src="{{asset('auth_assets/assets/img/icons/users1.svg')}}" alt="img">
		</div>
	</div>
	<div class="form-login">
		<label>Assembly ID</label>
		<div class="form-addons">
		<input type="text" name="assembly_id" placeholder="Enter your full name">
		<img src="{{asset('auth_assets/assets/img/icons/users1.svg')}}" alt="img">
		</div>
	</div>
	<div class="form-login">
		<label>District</label>
		<div class="form-addons">
		<input type="text" name="district" placeholder="Enter your full name">
		<img src="{{asset('auth_assets/assets/img/icons/users1.svg')}}" alt="img">
		</div>
	</div>
	<div class="form-login">
		<label>Area</label>
		<div class="form-addons">
		<input type="text" name="area" placeholder="Enter your full name">
		<img src="{{asset('auth_assets/assets/img/icons/users1.svg')}}" alt="img">
		</div>
	</div>
	<div class="form-login">
		<label>Password</label>
		<div class="pass-group">
		<input type="password" class="pass-input" placeholder="Enter your password" name="password">
		<span class="fas toggle-password fa-eye-slash"></span>
		</div>
	</div>
	<div class="form-login">
		<label>Confirm Password</label>
		<div class="pass-group">
		<input type="password" class="pass-input" placeholder="Confirm your password" name="password_confirmation">
		<span class="fas toggle-password fa-eye-slash"></span>
		</div>
	</div>
		<div class="form-login">
		  <a class="btn btn-login">Sign Up</a>
		</div>
</form>
<div class="signinform text-center">
<h4>Already a user? <a href="signin.html" class="hover-a">Sign In</a></h4>
</div>
</div>
</div>
<div class="login-img">
<img src="{{asset('auth_assets/assets/img/login.jpg')}}" alt="img">
</div>
</div>
</div>
</div>
@include('layouts.auth_includes.scripts')
</body>
</html>