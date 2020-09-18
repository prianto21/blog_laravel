@extends('tamplate_backend.home')
@section('sub-judul','Tambah User')
@section('content')

	@if(count($errors) > 0)
		@foreach($errors->all() as $error)
			<div class="alert alert-danger" role='alert'>
				{{$error}}
			</div>
		@endforeach
	@endif


	<form action="{{ route('user.update',$user->id)}}" method="post">
		@csrf
    @method('PATCH')
		<div class="form-group">
			<label>Nama User</label>
			<input type="text" name="name" class="form-control" value="{{$user->name}}">
		</div>
    <div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" value="{{$user->email}}" readonly>
		</div>
    <div class="form-group">
      <label for="">Hak Akses</label>
      <select class="form-control" name="tipe">
        <option value="" holder >Pilih Hak Akses</option>
        <option value="1" holder @if($user->tipe==1) selected @endif >Administrator</option>
        <option value="0" holder @if($user->tipe==0) selected @endif >Penulis</option>
      </select>
    </div>
    <div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-block">Update User</button>
		</div>
	</form>
@stop
