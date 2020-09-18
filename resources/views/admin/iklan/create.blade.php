@extends('tamplate_backend.home')
@section('sub-judul','Tambah iklan')
@section('content')

	@if(count($errors) > 0)
		@foreach($errors->all() as $error)
			<div class="alert alert-danger" role='alert'>
				{{$error}}
			</div>
		@endforeach
	@endif

	
	<form action="{{ route('iklan.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Nama Costumer</label>
			<input type="text" name="nama_costumer" class="form-control">
		</div>
		<div class="form-group">
			<label>Jenis Iklan</label>
			<select class="form-control" name="jenis_iklan">
				<option value="" holder>Pilih category iklan</option>
				<option value="game">Game</option>
                <option value="fashion">Fashion</option>
                <option value="makanan">Makanan</option>
                <option value="furniture">Furniture</option>
			</select>
		</div>
		
		<div class="form-group">
			<label>Biaya</label>
			<input type="text" name="biaya" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-block">Simpan Data Iklan</button>
		</div>
	</form>
@stop 
