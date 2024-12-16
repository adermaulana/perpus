@extends('layouts.main')

@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                @foreach ($buku as $data)
                    <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 shadow-sm">
                            <img src="/{{ $data->gambar }}" class="card-img-top img-fluid" alt="Buku 1">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->judul }}</h5>
                                <p class="card-text text-muted">{{ $data->penulis }}</p>
                                <p class="card-text">{{ $data->deskripsi }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary">{{ $data->kategori->nama }}</span>
                                    <a href="/detail/{{ $data->judul }}" class="btn btn-sm btn-outline-secondary">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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
                                <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Total Koleksi Buku</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #0d6efd;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Anggota Aktif</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-bookmark" style="color: #0d6efd;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Buku Dipinjam Hari Ini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Library Statistics Section -->
@endsection
