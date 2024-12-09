<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#anggota-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Data Anggota</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="anggota-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dashboard/anggota/create">
              <i class="bi bi-circle"></i><span>Tambah Anggota</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/anggota">
              <i class="bi bi-circle"></i><span>Lihat Data Anggota</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Members Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#buku-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Data Buku</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="buku-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dashboard/buku/create">
              <i class="bi bi-circle"></i><span>Tambah Buku</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/buku">
              <i class="bi bi-circle"></i><span>Lihat Data Buku</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Books Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#peminjaman-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-bookmark"></i><span>Peminjaman</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="peminjaman-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dashboard/peminjaman/create">
              <i class="bi bi-circle"></i><span>Tambah Peminjaman</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/peminjaman">
              <i class="bi bi-circle"></i><span>Lihat Data Peminjaman</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Borrowing Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pengembalian-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-arrow-return-right"></i><span>Pengembalian</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pengembalian-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dashboard/pengembalian">
              <i class="bi bi-circle"></i><span>Lihat Data Pengembalian</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Return Books Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="laporan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dashboard/laporan/anggota">
              <i class="bi bi-circle"></i><span>Laporan Anggota</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/laporan/buku">
              <i class="bi bi-circle"></i><span>Laporan Buku</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/laporan/peminjaman">
              <i class="bi bi-circle"></i><span>Laporan Peminjaman</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Reports Nav -->

    </ul>

  </aside><!-- End Sidebar-->