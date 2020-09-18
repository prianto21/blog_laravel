@extends('tamplate_backend.home')
@section('sub-judul','Tambah post')
@section('content')

	@if(count($errors) > 0)
		@foreach($errors->all() as $error)
			<div class="alert alert-danger" role='alert'>
				{{$error}}
			</div>
		@endforeach
	@endif

	
	<form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Judul</label>
			<input type="text" name="judul" class="form-control">
		</div>
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category_id">
				<option value="" holder>Pilih Category</option>
				@foreach($category as $result)
					<option value="{{$result->id}}">{{$result->nama}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Pilih Tags</label>
			<select class="form-control select2" multiple="" name="tags[]">
				@foreach($tags as $tag)
				<option value="{{$tag->id}}">{{$tag->nama_tags}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label>Content</label>
			<textarea class="form-control" name="content">
				
			</textarea>
		</div>
		<div class="form-group">
			<label>Thumbnail</label>
			<input type="file" name="gambar" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-block">Simpan Kategori</button>
		</div>
	</form>
@stop 
