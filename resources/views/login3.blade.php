@extends('layout.layouts')
@section('content')
	<!-- login -->
	<div class="pages section">
		<div class="container">
			<div class="pages-head">
				<h3>MOBILE LOGIN</h3>
			</div>
			<div class="login">
				<div class="row">
					<a href="{{ url('/login2') }}" class="btn">EMAIL LOGIN</a>
					<a href="{{ url('/login') }}" class="btn">NAME LOGIN</a>
					<form class="col s12" action="{{ url('login') }}" method="post">
						<div class="input-field">
							<input type="text" class="validate" placeholder="MOBILE" name="mobile" required>
						</div>
						<div class="input-field">
							<input type="password" class="validate" placeholder="PASSWORD" name="password" required>
						</div>
						<a href=""><h6>Forgot Password ?</h6></a>
						<input type="submit" value="LOGIN" class="btn button-default">
						{{--<a href="" class="btn button-default" >LOGIN</a>--}}
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end login -->
@endsection