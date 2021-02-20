<?php?>
@extends('layouts.index')
@section('content')

<div style="margin:0 15%">
	<!-- Button trigger modal -->
	<div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			Add Vehicle
		</button>
		<a href="">input penjualan</a>
	</div>

	<!-- Modal create -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Vehicle</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form autocomplete="off" method="post" action="addVehicle">
					@csrf
					<div class="modal-body">
						<div class="mb-3">
							<label for="name" class="form-label">Name </label>
							<input type="text" name="name" class="form-control" id="name">
						</div>
						<div class="mb-3">
							<label for="price" class="form-label">Price</label>
							<input type="number" name="price" class="form-control" id="price" >
						</div>
						<div class="mb-3">
							<label for="stock" class="form-label">Stock</label>
							<input type="number" class="form-control" id="stock" name="stock">
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- Modal edit -->
	<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Vehicle</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form autocomplete="off" method="post" action="UpdateVehicle">
					@csrf
					<div class="modal-body">
						<div class="mb-3">
							<input type="hidden" name="id" id="ids">
							<label for="names" class="form-label">Name </label>
							<input type="text" name="name" class="form-control" id="names">
						</div>
						<div class="mb-3">
							<label for="prices" class="form-label">Price</label>
							<input type="number" name="price" class="form-control" id="prices" >
						</div>
						<div class="mb-3">
							<label for="stocks" class="form-label">Stock</label>
							<input type="number" class="form-control" id="stocks" name="stock">
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Stock</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($vehicle as $data)
			<tr>
				<td>{{ $data->name }}</td>
				<td>{{ $data->price }}</td>
				<td>{{ $data->stock }}</td>
				<td>
					<button class="edit-data" type="button"  data-bs-toggle="modal" data-bs-target="#edit" data-id="{{ $data->id }}" data-name="{{ $data->name }}" data-price="{{ $data->price }}" data-stock="{{ $data->stock }}">edit</button>
					<form method="POST" action="destroyVehicle/{{$data->id}}">
						@csrf
						<button type="submit">Delete</button>
					</form>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection