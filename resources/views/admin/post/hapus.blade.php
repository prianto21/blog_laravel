@extends('tamplate_backend.home')
@section('sub-judul','Post yang sudah dihapus')
@section('content')
	
	@if(Session::has('success'))
		<div class="alert alert-success" role='alert'>
			{{Session('success')}}
		</div>
	@endif
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
 		<tr>
 			<th>NO</th>
 			<th>Nama Post</th>
 			<th>Category</th>
 			<th>Tags</th>
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
 						<ul>
 							<li>{{$tag->nama_tags}}</li>
 						</ul>
 					@endforeach
 				</td>
 				<td><img src="{{asset($hasil->gambar)}}" class="img-fluid" style="width: 100px"></td>
 				<td>
 					<form action="{{route('post.kill',$hasil->id)}}" method="post">
 						@csrf
 						@method('delete')
 					<a href="{{route('post.restore',$hasil->id)}}" class="btn btn-info btn-sm">Restore</a>
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