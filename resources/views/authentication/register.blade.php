<!DOCTYPE html>
<html>
@include('layouts.auth_includes.links')

	<body class="login-page">
		@include('authentication.header')
		<div
			class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="{{asset('images/logo.jpg')}}" alt="" style="max-width: 700px"/>
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="register-box bg-white box-shadow border-radius-10">
							<div class="wizard-content">
								<form class="tab-wizard2 wizard-circle wizard">
									@include('authentication.register_step.step1')
									<!-- Step 3 -->
									@include('authentication.register_step.step3')
									<!-- Step 4 -->
									@include('authentication.register_step.step4')
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- success Popup html Start -->
        @include('authentication.register_step.success_pop')
		@include('layouts.auth_includes.scripts')
	</body>
</html>
<script src="{{asset('customjs/register.js')}}"></script>
