@extends('tamplate_backend.home')
@section('sub-judul','Edit Iklan')
@section('content')
	@if(count($errors) > 0)
		@foreach($errors->all() as $error)
			<div class="alert alert-danger" role='alert'>
				{{$error}}
			</div>
		@endforeach
	@endif
<form action="{{ route('iklan.update',$iklan->id)}}" method="post">
		@csrf
		@method('PATCH')
		<div class="form-group">
			<label>Nama Costumer</label>
			<input type="text" name="nama_custumer" class="form-control" value="{{$iklan->nama_custumer}}">
		</div>
        <div class="form-group">
			<label>Jenis Iklan</label>
			<input type="text" name="jenis_iklan" class="form-control" value="{{$iklan->jenis_iklan}}">
		</div>
        <div class="form-group">
			<label>Biaya</label>
			<input type="text" name="biaya" class="form-control" value="{{$iklan->biaya}}">
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-block">Update iklan</button>
		</div>
	</form>
@stop