@extends('user.main')

@section('title', 'Edit Profil')

@section('content')

<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Edit Profil</li>
  </ol>

  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-pencil"></i>
      Edit Profil
    </div>
    <div class="card-body">
      <div class="text-right" style="margin-bottom: 10px">
      </div>

      <form action="{{url('/myprofile/edit')}}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <div class="text-center">
          <img src="/user/img/avatar.png" alt="" width="200px" height="200px">
          <br>
          <a href="" class="btn btn-info"><i class="fa fa-pencil"></i>Ubah Foto</a>
        </div>
        <input type="hidden" value="{{Auth::user()->id}}">
        <div class="form-group">
          <label for="name">Nama Lengkap</label>
          <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}">
        </div>
        <div class="form-group">
          <label for="phone">Telepon</label>
          <input type="text" name="phone" class="form-control" value="{{Auth::user()->phone}}">
        </div>
        <div class="form-group">
          <label for="address">Alamat</label>
          <input type="text" name="address" class="form-control" value="{{Auth::user()->address}}">
        </div>
        <div class="text-right">
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Simpan</button>
          <a href="{{route('myprofile')}}" class="btn btn-danger"><i class="fa fa-close" aria-hidden="true"></i>Batal</a>

        </div>
      </form>



    </div>
  </div>




@endsection
