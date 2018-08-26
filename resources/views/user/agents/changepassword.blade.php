@extends('user.main')

@section('title', 'Ubah Password')

@section('content')

<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Ubah Password</li>
  </ol>

  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-gear"></i>
      Ubah Password
    </div>
    <div class="card-body">
      <div class="text-right" style="margin-bottom: 10px">
      </div>

      <form action="{{url('/myprofile/changepassword')}}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{Auth::user()->id}}">
        <div class="form-group">
          <label for="current_password">Password Lama</label>
          <input type="password" name="current_password" class="form-control">
        </div>
        <div class="form-group">
          <label for="new_password">Password Baru</label>
          <input type="password" name="new_password" class="form-control">
        </div>
        <div class="form-group">
          <label for="new_password_confirmation">Konfirmasi Password Baru</label>
          <input type="password" name="new_password_confirmation" class="form-control">
        </div>
        <div class="text-right">
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Simpan</button>
          <a href="{{route('myprofile')}}" class="btn btn-danger"><i class="fa fa-close" aria-hidden="true"></i>Batal</a>
        </div>
      </form>

    </div>
  </div>




@endsection
