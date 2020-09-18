@extends('tamplate_backend.home')
@section('sub-judul','Edit Kategori')
@section('content')
	@if(count($errors) > 0)
		@foreach($errors->all() as $error)
			<div class="alert alert-danger" role='alert'>
				{{$error}}
			</div>
		@endforeach
	@endif
<form action="{{ route('category.update',$category->id)}}" method="post">
		@csrf
		@method('PATCH')
		<div class="form-group">
			<label>Kategori</label>
			<input type="text" name="nama_kategory" class="form-control" value="{{$category->nama}}">
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-block">Update Kategori</button>
		</div>
	</form>
@stop