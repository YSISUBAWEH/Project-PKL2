<!DOCTYPE html>
<html>
<head>
	<title>Register Admin</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/admin/form.css')}}">
</head>
<body>
	<section style="background: url('{{asset('images/sea-164989.jpg')}}');background-position: center;background-size: cover;">
		<div class="form-box">
			@error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
			<div class="form-value">
				@isset($route)
                        <form method="POST" action="{{ $route }}">
                    @else
                        <form method="POST" action="{{ route('register') }}">
                    @endisset
                    
                        @csrf
					<h2>Sign up</h2>
					<div class="input-box">
						<ion-icon name="mail-outline"></ion-icon>
						<input type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						<label for="">Name</label>
					</div>
					<div class="input-box">
						<ion-icon name="mail-outline"></ion-icon>
						<input type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<label for="">Email</label>
					</div>
					<div class="input-box">
						<ion-icon name="lock-closed-outline"></ion-icon>
						<input type="password" name="password" required autocomplete="new-password">
						<label for="">{{ __('Password') }}</label>
					</div>
					<div class="input-box">
						<ion-icon name="lock-closed-outline"></ion-icon>
						<input type="password" name="password_confirmation" required autocomplete="new-password">
						<label for="">{{ __('Confirm Password') }}</label>
					</div>
					<button>Sign up</button>
					<div class="register">
						<p>Have a account <a href="#">Login</a></p>
					</div>
				</form>
			</div>
		</div>
	</section>
	
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script></body>
</html>