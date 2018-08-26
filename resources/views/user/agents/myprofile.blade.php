@extends('user.main')

@section('title', 'Profil')

@section('content')

<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Profil Saya</li>
  </ol>

  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-user"></i>
      Profil Saya
    </div>
    <div class="card-body">
      <div class="text-right" style="margin-bottom: 10px">
        <a href="{{route('editProfile')}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
        <a href="{{route('changePassword')}}" class="btn btn-danger"><i class="fa fa-cog" aria-hidden="true"></i>Ganti Password</a>

      </div>


      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <tbody>
            <tr>
              <th>Foto</th>
              <td><img src="/user/img/avatar.png" width="200px" height="200px" alt=""></td>
            </tr>
            <tr>
              <th>Nama</th>
              <td>{{Auth::user()->name}}</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>{{Auth::user()->email}}</td>
            </tr>
            <tr>
              <th>Telepon</th>
              <td>{{Auth::user()->phone}}</td>
            </tr>
            <tr>
              <th>Alamat</th>
              <td>{{Auth::user()->address}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>




@endsection
