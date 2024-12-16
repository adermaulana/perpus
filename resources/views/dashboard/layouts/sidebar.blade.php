<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar bg-dark text-light">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed bg-dark {{ Request::is('dashboard') ? 'text-primary' : 'text-light' }}" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed bg-dark {{ Request::is('dashboard/buku*') ? 'text-primary' : 'text-light' }}" data-bs-target="#buku-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-book"></i><span>Manajemen Buku</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            @if(Request::is('dashboard/buku*'))
            <ul id="buku-nav" class="nav-content">
            @else
            <ul id="buku-nav" class="nav-content collapse">
            @endif
                <li>
                    <a href="/dashboard/buku/tambah" class="text-light">
                    @if(Request::is('dashboard/buku/tambah'))
                        <i class="bi bi-circle"></i><span class="text-primary">Tambah Buku</span>
                    @else
                        <i class="bi bi-circle"></i><span>Tambah Buku</span>
                    @endif
                    </a>
                </li>
                <li>
                    <a href="/dashboard/buku" class="text-light">
                    @if(Request::is('dashboard/buku'))
                        <i class="bi bi-circle"></i><span class="text-primary">Daftar Buku</span>
                    @else
                        <i class="bi bi-circle"></i><span>Daftar Buku</span>
                    @endif
                    </a>
                </li>
                <li>
                    <a href="/dashboard/buku/kategori" class="text-light">
                    @if(Request::is('dashboard/buku/kategori'))
                        <i class="bi bi-circle"></i><span class="text-primary">Kategori Buku</span>
                    @else
                        <i class="bi bi-circle"></i><span>Kategori Buku</span>
                    @endif
                    </a>
                </li>
            </ul>
        </li><!-- End Buku Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed bg-dark {{ Request::is('dashboard/peminjaman*') ? 'text-primary' : 'text-light' }}" data-bs-target="#peminjaman-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Peminjaman</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            @if(Request::is('dashboard/peminjaman*'))
            <ul id="peminjaman-nav" class="nav-content">
            @else
            <ul id="peminjaman-nav" class="nav-content collapse">
            @endif
                <li>
                    <a href="/dashboard/peminjaman/tambah" class="text-light">
                    @if(Request::is('dashboard/peminjaman/tambah'))
                        <i class="bi bi-circle"></i><span class="text-primary">Tambah Peminjaman</span>
                    @else
                        <i class="bi bi-circle"></i><span>Tambah Peminjaman</span>
                    @endif
                    </a>
                </li>
                <li>
                    <a href="/dashboard/peminjaman" class="text-light">
                    @if(Request::is('dashboard/peminjaman'))
                        <i class="bi bi-circle"></i><span class="text-primary">Daftar Peminjaman</span>
                    @else
                        <i class="bi bi-circle"></i><span>Daftar Peminjaman</span>
                    @endif
                    </a>
                </li>
            </ul>
        </li><!-- End Peminjaman Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed bg-dark {{ Request::is('dashboard/anggota*') ? 'text-primary' : 'text-light' }}" data-bs-target="#anggota-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Anggota Perpustakaan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            @if(Request::is('dashboard/anggota*'))
            <ul id="anggota-nav" class="nav-content">
            @else
            <ul id="anggota-nav" class="nav-content collapse">
            @endif
                <li>
                    <a href="/dashboard/anggota/tambah" class="text-light">
                    @if(Request::is('dashboard/anggota/tambah'))
                        <i class="bi bi-circle"></i><span class="text-primary">Tambah Anggota</span>
                    @else
                        <i class="bi bi-circle"></i><span>Tambah Anggota</span>
                    @endif
                    </a>
                </li>
                <li>
                    <a href="/dashboard/anggota" class="text-light">
                    @if(Request::is('dashboard/anggota'))
                        <i class="bi bi-circle"></i><span class="text-primary">Daftar Anggota</span>
                    @else
                        <i class="bi bi-circle"></i><span>Daftar Anggota</span>
                    @endif
                    </a>
                </li>
            </ul>
        </li><!-- End Anggota Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed bg-dark {{ Request::is('dashboard/pengembalian*') ? 'text-primary' : 'text-light' }}" href="/dashboard/pengembalian">
                <i class="bi bi-journal-bookmark-fill"></i>
                <span>Pengembalian Buku</span>
            </a>
        </li><!-- End Pengembalian Nav -->
    </ul>
</aside><!-- End Sidebar-->