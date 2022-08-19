<div class="d-flex" id="wrapper">
<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading"><a href="{{ route('admin') }}" class="text-decoration-none">Dashboard</a></div>
  <div class="list-group list-group-flush">
    <a href="{{ route('admin/slider') }}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-desktop"></i> Slider</a>
    <a href="{{ route('admin/artikel') }}" class="list-group-item list-group-item-action bg-light"><i class="far fa-newspaper"></i> Artikel</a>
    <a href="{{ route('admin/gallery') }}" class="list-group-item list-group-item-action bg-light"><i class="far fa-images"></i> Gallery</a>
    <a href="{{ route('admin/tarif') }}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-tasks"></i> Tarif</a>
    <a href="{{ route('admin/profile') }}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-info-circle"></i> Profile</a>
    <a href="{{ route('admin/komentar') }}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-comment-alt"></i> Komentar</a>
  </div>
  <div class="p-3">
    <a href="{{ url('/register') }}" class="btn btn-info">Admin Register</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-layer-group"></i></button>
    <a href="{{ route('home') }}" class="btn btn-link ml-2 text-decoration-none">mitrakargo.co.id</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
        
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
      </ul>
    </div>
  </nav>
  <div class="container-fluid py-4 konten-admin">