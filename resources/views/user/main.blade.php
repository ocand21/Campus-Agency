@include('user.partials._head')
  @include('user.partials._navbar')
  <div id="wrapper">
  @include('user.partials._sidebar')
    <div id="content-wrapper">
      <div class="container-fluid">
        @include('user.partials._message')
        @yield('content')
      </div>
      @include('user.partials._footer')
    </div>

  </div>
@include('user.partials._js')
