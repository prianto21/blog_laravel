@extends('tamplate_backend.home')
@section('sub-judul','Post')
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role='alert'>
			{{Session('success')}}
		</div>
	@endif
 <a href="{{route('post.create')}}" class="btn btn-success btn-sm">Tambah Post</a>
 <br><br>
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
 		<tr>
 			<th>NO</th>
 			<th>Nama Post</th>
 			<th>Category</th>
 			<th>Daftar Tags</th>
 			<th>Creator</th>
 			<th>Thumbnails</th>
 			<th>action</th>
 		</tr>
 		<tbody>
 			@foreach($post as $result=> $hasil)
 			<tr>
 				<td>{{$result + $post->firstitem() }}</td>
 				<td>{{$hasil->judul}}</td>
 				<td>{{$hasil->category->nama}}</td>
 				<td>
 					@foreach($hasil->tags as $tag)

 							<h6><span class="badge badge-info">{{$tag->nama_tags}}</span></h6>

 					@endforeach
 				</td>
 				<td>{{$hasil->user_id}}</td>
 				<td><img src="{{asset($hasil->gambar)}}" class="img-fluid" style="width: 100px"></td>
 				<td>
 					<form action="{{route('post.destroy',$hasil->id)}}" method="post">
 						@csrf
 						@method('delete')
 					<a href="{{route('post.edit',$hasil->id)}}" class="btn btn-primary btn-sm">Edit</a>
 					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
 					</form>
 				</td>
 			</tr>
 			@endforeach
 		</tbody>
 	</thead>
 </table>
 {{$post->links()}}
@stop
