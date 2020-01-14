@extends('layout.layouts')
	@section('content')
<!-- register -->
	<div class="pages section">
	<div class="container">
		<div class="pages-head">
			<h3>注册</h3>
		</div>
		<div class="register">
			<div class="row">
				<form class="col s12" METHOD="post" action="{{ url('/register') }}">
					<div class="input-field">
						<input type="text" class="validate" placeholder="NAME" name="name" required>
					</div>
					<div class="input-field">
						<input type="text" class="validate" placeholder="MOBILE" name="mobile" required>
					</div>
					<div class="input-field">
						<input type="email" placeholder="EMAIL" class="validate" name="email" required>
					</div>
					<div class="input-field">
						<input type="password" placeholder="PASSWORD" class="validate" name="password" required>
					</div>
					<div class="input-field">
						<input type="password" placeholder="PASSWORD" class="validate" name="password2" required>
					</div>
					<input type="submit" value="REGISTER" class="btn button-default">
					{{--<div class="btn button-default">REGISTER</div>--}}
				</form>
			</div>
		</div>
	</div>
</div>
<!-- end register -->
	@endsection

