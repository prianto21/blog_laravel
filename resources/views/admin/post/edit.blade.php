@extends('tamplate_backend.home')
@section('sub-judul','Edit post')
@section('content')

	@if(count($errors) > 0)
		@foreach($errors->all() as $error)
			<div class="alert alert-danger" role='alert'>
				{{$error}}
			</div>
		@endforeach
	@endif

	
	<form action="{{ route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		@method('patch')
		<div class="form-group">
			<label>Judul</label>
			<input type="text" name="judul" class="form-control" value="{{$post->judul}}">
		</div>
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category_id">
				<option value="" holder>Pilih Category</option>
				@foreach($category as $result)
					<option value="{{$result->id}}" 
						@if($result->id == $post->category_id)
							selected
						@endif
						>{{$result->nama}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Pilih Tags</label>
			<select class="form-control select2" multiple="" name="tags[]">
				@foreach($tags as $tag)
				<option value="{{$tag->id}}"
					@foreach($post->tags as $value)
						@if($tag->id == $value->id)
							selected
						@endif
					@endforeach
					>{{$tag->nama_tags}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label>Content</label>
			<textarea class="form-control" name="content">
				{{$post->content}}
			</textarea>
		</div>
		<div class="form-group">
			<label>Thumbnail</label>
			<input type="file" name="gambar" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-block">Edit Post</button>
		</div>
	</form>
@stop 
