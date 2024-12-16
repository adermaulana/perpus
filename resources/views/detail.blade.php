@extends('layouts.main')

@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="/{{ $buku->gambar }}" class="card-img-top img-fluid" alt="{{ $buku->judul }}">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h1 class="card-title mb-4">{{ $buku->judul }}</h1>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h5>Detail Buku</h5>
                                    <table class="table table-borderless">
                                        <tr>
                                            <th class="ps-0">Penulis</th>
                                            <td>{{ $buku->penulis }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0">Kategori</th>
                                            <td>{{ $buku->kategori->nama }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0">Penerbit</th>
                                            <td>{{ $buku->penerbit }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0">Tahun Terbit</th>
                                            <td>{{ $buku->tahun_terbit }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0">ISBN</th>
                                            <td>{{ $buku->isbn }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0">Stok</th>
                                            <td>
                                                <span class="badge {{ $buku->stok > 0 ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $buku->stok }} tersedia
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0">Status</th>
                                            <td>
                                                <span
                                                    class="badge {{ $buku->status == 'tersedia' ? 'bg-success' : 'bg-warning' }}">
                                                    {{ $buku->status }}
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <h5 class="mt-4">Deskripsi</h5>
                            <p class="text-muted">{{ $buku->deskripsi }}</p>

                            <div class="alert alert-primary mt-4" role="alert">
                                <i class="bi bi-info-circle me-2"></i>
                                Untuk melakukan peminjaman, silakan hubungi admin perpustakaan kami.
                                <div class="mt-2">
                                    <strong>Kontak Admin:</strong>
                                    <br>
                                    Telepon: +62 812-4822-6360
                                    <br>
                                    Email: admin@perpustakaanxx.id
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="/buku" class="btn btn-secondary me-2">
                                    <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar Buku
                                </a>
                            </div>
                        </div>
                    </div>
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
