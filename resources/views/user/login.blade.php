<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/user/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="/user/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">{{__('Login')}}</div>
        <div class="card-body">
          <form method="POST" action="{{route('login')}}" aria-label="{{ __('Login')}}">
            @csrf
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email')}}" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="email">{{ __('Email') }}</label>

                @if($errors->has('email'))
                  <span class="invlid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required="required">
                <label for="password">{{ __('Password') }}</label>

                @if($errors->has('password'))
                  <span class="invlid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}> {{ __('Ingat Akun') }}

                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">{{__('Login')}}</button>
          </form>
          <div class="text-center">
            <a class="d-block small" href="{{route('password.request')}}">{{__('Lupa Password?')}}</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/user/vendor/jquery/jquery.min.js"></script>
    <script src="/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/user/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
