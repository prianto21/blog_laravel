@extends('tamplate_backend.home')
@section('sub-judul','Iklan')
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role='alert'>
			{{Session('success')}}
		</div>
	@endif
 <a href="{{route('iklan.create')}}" class="btn btn-info btn-sm">Tambah User</a>
 <br><br>
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
 		<tr>
 			<th>NO</th>
 			<th>Nama custumer</th>
 			<th>Jenis Iklan</th>
 			<th>Biaya</th>
 			<th>action</th>
 		</tr>
 		<tbody>
 			@foreach($iklan as $result=> $hasil)
 			<tr>
 				<td>{{$result + $iklan->firstitem() }}</td>
 				<td>{{$hasil->nama_custumer}}</td>
 				<td>{{$hasil->jenis_iklan}}</td>
 				<td>{{$hasil->biaya}}</td>
 				<td>
 					<form action="{{route('iklan.destroy',$hasil->id)}}" method="post">
 						@csrf
 						@method('delete')
 					<a href="{{route('iklan.edit',$hasil->id)}}" class="btn btn-primary btn-sm">Edit</a>
 					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
 					</form>
 				</td>
 			</tr>
 			@endforeach
 		</tbody>
 	</thead>
 </table>
 {{$iklan->links()}}
@stop
