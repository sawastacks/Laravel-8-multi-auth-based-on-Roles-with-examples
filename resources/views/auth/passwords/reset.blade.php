<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Reset Password</title>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/my-login.css') }}">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
				
					<div class="cardx fat">
						<div class="card-body">
							<h4 class="card-title">Reset Password</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">
								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" placeholder="Email address" value="{{ $email ?? old('email') }}">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
								</div>
								<div class="form-group">
									<label for="password">New Password</label>
									<input id="password" type="password" class="form-control" name="password" placeholder="Enter new password">
                                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
								</div>
								<div class="form-group">
									<label for="password-confirm">Confirm Password</label>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter confirm password">
                                    <span class="text-danger">@error('password_confirmation'){{$message}} @enderror</span>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Reset Password
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; Your Company
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
