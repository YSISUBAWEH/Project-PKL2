<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/admin/form.css')}}">
</head>
<body>
	<section style="background: url('{{asset('images/sea-164989.jpg')}}');background-position: center;background-size: cover;">
		<div class="form-box">
			<div class="form-value">
				@isset($route)
                        <form method="POST" action="{{ $route }}">
                    @else
                        <form method="POST" action="{{ route('admin.Login') }}">
                    @endisset
                    
                        @csrf
					<h2>Login</h2>
					<div class="input-box">
						<ion-icon name="mail-outline"></ion-icon>
						<input type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<label for="">Email</label>
					</div>
					<div class="input-box">
						<ion-icon name="lock-closed-outline"></ion-icon>
						<input type="password" name="password" required autocomplete="current-password">
						<label for="">Password</label>
					</div>

					<div class="forget">
						<div class="a"><a href="#">Forgot Password</a></div>
						<div class="checkbox-wrapper-4">
 							 <input class="inp-cbx" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />
								  <label class="cbx" for="remember"><span>
								  <svg width="12px" height="10px">
								    <use xlink:href="#check-4"></use>
								  </svg></span><span>Remember Me</span></label>
								  <svg class="inline-svg">
								    <symbol id="check-4" viewbox="0 0 12 10">
								      <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
								    </symbol>
								  </svg>
						</div>
						
					</div>
					<button>Log in</button>
					<div class="register">
						<p>Don't have a account <a href="admin/register">Register</a></p>
					</div>
				</form>
			</div>
		</div>
	</section>
	
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script></body>
</html>