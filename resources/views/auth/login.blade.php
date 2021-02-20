<?php
?>
@extends('layouts.index')
@section('content')
	<form style="margin:10% 30%;" autocomplete="off" method="post" action="submitLogin">
		@csrf
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1">
		</div>
		<a href="register">register</a>
		<button type="submit" class="btn btn-primary">Login</button>
	</form>
@endsection
