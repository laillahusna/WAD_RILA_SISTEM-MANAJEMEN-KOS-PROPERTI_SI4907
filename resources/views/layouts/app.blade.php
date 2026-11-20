<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') - Kos SJB</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="layout">
  <aside class="sidebar">
    <a href="{{ route('staff.index') }}" class="logo"><img src="{{ asset('img/logo.png') }}" alt="SJB"></a>
    <nav>
      <a href="#">Beranda</a>
      <a href="#">Tipe Kamar</a>
      <a href="{{ route('staff.index') }}" class="aktif">Staff</a>
      <a href="#">Fasilitas</a>
      <a href="#">Penghuni</a>
    </nav>
  </aside>
  <main class="konten">
    <div class="topbar">
      <span class="topbar-user">{{ auth()->user()->name }} ({{ ucfirst(auth()->user()->role) }})</span>
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn-kecil">Logout</button>
      </form>
    </div>
    @yield('content')
  </main>
</div>

<footer class="footer">
  <div class="footer-isi">
    <div class="footer-menu">
      <div><h4>Beranda</h4><a href="#">Tentang Kami</a><a href="#">Dokumentasi</a></div>
      <div><h4>Tipe Kamar</h4><a href="#">Reguler</a><a href="#">Premium</a><a href="#">Platinum</a></div>
      <div><h4>Staff</h4><a href="{{ route('staff.index') }}">Tabel Staff</a><a href="{{ route('jadwal') }}">Jadwal Staff</a></div>
      <div><h4>Fasilitas</h4><a href="#">Fasilitas Lantai 1</a><a href="#">Fasilitas Lantai 2</a><a href="#">Fasilitas Lantai 3</a></div>
      <div><h4>Booking</h4><a href="#">Daftar</a><a href="#">Biodata Penghuni</a></div>
    </div>
  </div>
  <p class="footer-copy">Greenaura Natharina Sunardi | 102022530043 | Kelompok SJB | Modul House keeper/Staff</p>
</footer>
</body>
</html>