<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Kos SJB</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* ===== Dasar ===== */
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 14px;
            background-color: #f1f1f1;
            color: #001233;
        }

        /* ===== Sidebar (kotak biru di kiri) ===== */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 240px;
            background-color: #001233;
        }

        .logo {
            display: flex;
            gap: 6px;
            padding: 55px 50px 90px 50px;
            color: white;
            font-size: 34px;
            font-weight: 700;
            line-height: 1;
        }

        .logo .huruf {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .logo svg {
            width: 30px;
            height: 30px;
            fill: white;
        }

        .sidebar a {
            display: block;
            padding: 22px 50px;
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .sidebar a.aktif {
            background-color: white;
            color: #001233;
            font-weight: 700;
        }

        /* ===== Bagian kanan ===== */
        .isi {
            margin-left: 240px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            background-color: white;
            padding: 20px 28px;
            font-size: 11px;
            border-bottom: 1px solid #dddddd;
        }

        .keluar {
            background: none;
            border: none;
            padding: 0;
            margin-left: 10px;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 11px;
            color: #001233;
            text-decoration: underline;
            cursor: pointer;
        }

        .topbar form { display: inline; }

        .konten {
            padding: 50px 28px;
            min-height: 640px;
        }

        h1 {
            margin: 0;
            font-size: 34px;
            font-weight: 700;
        }

        .subjudul {
            margin: 4px 0 40px 0;
            font-size: 13px;
            color: #555555;
        }

        .sukses {
            background-color: #d9f2de;
            padding: 12px 16px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        /* ===== Baris cari, filter, tombol tambah ===== */
        .baris-atas {
            display: flex;
            gap: 14px;
            margin-bottom: 18px;
        }

        .cari {
            flex: 1;
            height: 46px;
            padding: 0 20px;
            border: 1px solid #999999;
            border-radius: 8px;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 13px;
        }

        .filter {
            width: 110px;
            height: 46px;
            padding: 0 12px;
            border: 1px solid #999999;
            border-radius: 8px;
            background-color: white;
            color: #777777;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .tombol-tambah {
            display: flex;
            align-items: center;
            padding: 0 22px;
            background-color: #001233;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
        }

        /* ===== Tabel ===== */
        .kartu-tabel {
            border: 1px solid #d5d5d5;
            border-radius: 10px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        th {
            background-color: #d0d3da;
            text-align: left;
            padding: 18px 10px;
            font-size: 12px;
        }

        td {
            padding: 16px 10px;
            border-bottom: 1px solid #dddddd;
            font-size: 12px;
        }

        .kolom-no { width: 60px; text-align: center; }
        .kolom-aksi { width: 150px; }

        /* No KTP yang panjang dipotong jadi "..." */
        .ktp {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .aksi a {
            color: #001233;
            text-decoration: none;
            margin-right: 6px;
        }

        .aksi form { display: inline; }

        .hapus {
            background: none;
            border: none;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 12px;
            color: #001233;
            cursor: pointer;
        }

        /* ===== Form ===== */
        .kotak-form {
            max-width: 780px;
            background-color: white;
            padding: 30px;
            border: 1px solid #dddddd;
            border-radius: 10px;
        }

        /* dua kolom */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px 36px;
        }

        .kolom-penuh {
            grid-column: 1 / 3;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
            font-size: 13px;
        }

        label span {
            font-weight: 400;
            font-size: 10px;
            color: #777777;
        }

        input, select, textarea {
            width: 100%;
            height: 44px;
            padding: 0 16px;
            border: 1px solid #999999;
            border-radius: 8px;
            background-color: white;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 12px;
        }

        textarea {
            height: 100px;
            padding: 14px 16px;
        }

        .error {
            color: red;
            font-size: 11px;
            margin-top: 4px;
        }

        hr {
            grid-column: 1 / 3;
            width: 100%;
            border: none;
            border-top: 1px solid #dddddd;
            margin: 0;
        }

        .tombol {
            grid-column: 1 / 3;
        }

        .tombol-batal {
            display: inline-block;
            border: 1px solid #999999;
            color: #777777;
            padding: 11px 22px;
            border-radius: 8px;
            text-decoration: none;
            margin-right: 10px;
        }

        .tombol-simpan {
            width: auto;
            height: auto;
            background-color: #001233;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-family: 'Poppins', Arial, sans-serif;
            font-weight: 500;
            cursor: pointer;
        }

        /* ===== Halaman Lihat (show) ===== */
        .detail-table {
            max-width: 780px;
            background-color: white;
        }

        .detail-table th { width: 30%; }

        .btn-wrapper { margin-top: 20px; }

        .btn-kembali {
            display: inline-block;
            border: 1px solid #999999;
            color: #777777;
            padding: 11px 22px;
            border-radius: 8px;
            text-decoration: none;
            margin-right: 10px;
        }

        .btn-edit {
            display: inline-block;
            background-color: #001233;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
        }

        /* ===== Footer ===== */
        .footer {
            background-color: #001233;
            color: white;
            padding: 40px 28px;
            font-size: 12px;
        }

        .footer p { margin: 0 0 10px 0; }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <div class="huruf"><span>S</span><span>J</span></div>
            <div class="huruf">
                <svg viewBox="0 0 24 24"><path d="M12 2 L2 10 H5 V22 H19 V10 H22 Z"/></svg>
                <span>B</span>
            </div>
        </div>
        <a href="#">Beranda</a>
        <a href="#">Tipe Kamar</a>
        <a href="{{ route('penghuni.index') }}" class="aktif">Penghuni</a>
        <a href="#">Staff</a>
        <a href="#">Properti</a>
    </div>

    <!-- Bagian kanan -->
    <div class="isi">

        <div class="topbar">
            <span>Dashboard Manajemen Kos &amp; Properti SJB</span>
            <span>
                Halo, <b>Admin</b>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="keluar">Keluar</button>
                </form>
            </span>
        </div>

        <div class="konten">
            <h1>@yield('judul')</h1>
            <p class="subjudul">@yield('subjudul')</p>

            @if (session('success'))
                <div class="sukses">{{ session('success') }}</div>
            @endif

            @yield('content')
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Nadiya Fathiya Alifah &nbsp;|&nbsp; 102022530043 &nbsp;|&nbsp; SI-49-07</p>
            <p>Kelompok SJB &nbsp;|&nbsp; Studi Kasus Sistem Manajemen Kos &amp; Properti - Modul Data Penghuni</p>
        </div>

    </div>

</body>
</html>
