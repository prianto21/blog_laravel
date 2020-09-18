@extends('tamplate_backend.home')
@section('sub-judul','Tambah Tag')
@section('content')

	@if(count($errors) > 0)
		@foreach($errors->all() as $error)
			<div class="alert alert-danger" role='alert'>
				{{$error}}
			</div>
		@endforeach
	@endif

	
	<form action="{{ route('tag.store')}}" method="post">
		@csrf
		<div class="form-group">
			<label>Tag</label>
			<input type="text" name="nama_tags" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-block">Simpan Tag</button>
		</div>
	</form>
@stop 
