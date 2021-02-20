<?php?>

<?php?>
@extends('layouts.index')
@section('content')
<form style="margin:10% 30%;" autocomplete="off" method="post" action="submitRegister" onsubmit="return validation()">
	@csrf
	<div class="mb-3">
		<label for="username" class="form-label">Username</label>
		<input type="text" name="username" class="form-control" id="username">
	</div>
	<div class="mb-3">
		<label for="email" class="form-label">Email address</label>
		<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
		<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
	</div>
	<div class="mb-3">
		<label for="password" class="form-label">Password</label>
		<input type="password" class="form-control password" id="password" name="password">
	</div>
	<button type="submit" class="btn btn-primary">Register</button>
</form>
<script>
	function validation() {
		if (document.getElementById("username").value.length === 0) {
			alert('username tidak boleh kosong');
			return false
		} else if (document.getElementById("email").value.length === 0) {
			alert('email tidak boleh kosong');
			return false
		} else if (document.getElementById("password").value.length === 0) {
			alert('password tidak boleh kosong');
			return false
		}
		else if (document.getElementById("password").value.length < 6) {
			alert('password minimal 6 huruf');
			return false
		}
		 else {
			return true
		}


	}
</script>
@endsection