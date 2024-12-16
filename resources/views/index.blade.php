@extends('layouts.main')

@section('container')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Selamat Datang, {{  auth()->user()->nama ?? auth()->user()->name ?? '' }}</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Temukan Dunia Pengetahuan di Perpustakaan Daerah Kami</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="/buku" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Pinjam Buku</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/sekolah.jpg" class="img-fluid" alt="Perpustakaan">
      </div>
    </div>
  </div>
</section><!-- End Hero -->

<!-- ======= Library Statistics Section ======= -->
<section id="stats" class="counts">
  <div class="container" data-aos="fade-up">
    <div class="row gy-4">
      <div class="container-fluid container-md d-flex align-items-center justify-content-between">
        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-book" style="color: #0d6efd;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Koleksi Buku</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #0d6efd;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Anggota Aktif</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-bookmark" style="color: #0d6efd;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Buku Dipinjam Hari Ini</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Library Statistics Section -->

@endsection