@extends('dashboard.layouts.main')

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard Perpustakaan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

            <!-- Total Members Card -->
            <div class="col-xxl-15 col-xl-15">
              <div class="card info-card customers-card">   
                <div class="card-body">
                  <h5 class="card-title">Total Anggota Perpustakaan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1093</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Total Members Card -->

            <!-- Active Borrowers Card -->
            <div class="col-xxl-15 col-xl-15">
              <div class="card info-card customers-card">   
                <div class="card-body">
                  <h5 class="card-title">Anggota Aktif Meminjam</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6>59</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Active Borrowers Card -->

            <!-- Total Books Card -->
            <div class="col-xxl-15 col-xl-15">
              <div class="card info-card customers-card">   
                <div class="card-body">
                  <h5 class="card-title">Total Koleksi Buku</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-bookmark"></i>
                    </div>
                    <div class="ps-3">
                      <h6>199</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Total Books Card -->

      </div>
    </section>

  </main>
  <!-- End #main -->

@endsection