<header id="header" class="header fixed-top">
  <div class="container-fluid container-md d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo pb-1 d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
      <span>Perpustakaan</span>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto {{ ($title === 'Perpustakaan Sekolah XX') ? 'active' : '' }}" href="/">Home</a></li>
        <li><a class="nav-link scrollto {{ ($title === 'Buku') ? 'active' : '' }}" href="/buku">Buku</a></li>
        @auth('peserta')
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="getstarted scrollto">
            Logout
          </button>
        </form>
        @elseif(Auth::check())
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="getstarted scrollto">
            Logout
          </button>
        </form>
        @else
        <li><a class="getstarted scrollto" href="/login">Login</a></li>
        @endauth
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->