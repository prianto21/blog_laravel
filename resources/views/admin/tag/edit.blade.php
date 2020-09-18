@extends('tamplate_backend.home')
@section('sub-judul','Edit Tag')
@section('content')

	@if(count($errors) > 0)
		@foreach($errors->all() as $error)
			<div class="alert alert-danger" role='alert'>
				{{$error}}
			</div>
		@endforeach
	@endif

	
	<form action="{{ route('tag.update',$tags->id)}}" method="post">
		@csrf
		@method('patch')
		<div class="form-group">
			<label>Tag</label>
			<input type="text" name="nama_tags" class="form-control" value="{{$tags->nama_tags}}">
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-block">Edit Tag</button>
		</div>
	</form>
@stop 
