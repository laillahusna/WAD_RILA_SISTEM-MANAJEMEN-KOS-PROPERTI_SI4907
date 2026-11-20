<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Master Kamar - Kos SJB</title>
    <style>
        *{box-sizing:border-box}
        body{
            margin:0;
            font-family:Arial,sans-serif;
            color:#263238;
            background:#f7f5f2;
        }
        .layout{
            display:flex;
            min-height:100vh;
        }
        .sidebar{
            width:232px;
            min-width:232px;
            min-height:100vh;
            background:#001631;
            color:#ffffff;
            font-size:14px;
            flex-shrink:0;
            display:flex;
            
            flex-direction:column;
        }
        .logo{
            line-height:0;
            font-size:35px;
            font-weight:bold;
            letter-spacing:5px;
            text-align:center;
            padding:28px 16px  0px;
            margin:8px 0 26px;
        }
        .sub{
            margin-bottom:22px;
            padding:12px 63px;
        }
        .sidebar a{
            display:flex;
            align-items:center;
            width:100%;
            height:45px;
            min-height:45px;
            padding:0 34px;
            margin-bottom:8px;
            border-radius:0;
            color:#ffffff;
            background:transparent;
            text-decoration:none;
            font-size:14px;
            font-weight:400;
            white-space:nowrap;
            transition:background .2s ease,color .2s ease;
        }
        .sidebar a.active{
            background:#ffffff;
            color:#001432;
            font-weight:bold;
        }
        .content{
            flex:1;
            min-width:0;
            display: flex;
            flex-direction: column;
        }
        .topbar{
            background:white;
            padding:18px 30px;
            display:flex;
            justify-content:space-between;
            border-bottom:1px solid #e5e0da;
        }
        main{
            padding:26px 30px;
            flex: 1;
            min-height:0;
        }
        .crumb{
            font-size:13px;
            color:#001432;
            margin-bottom:12px;
        }
        h1{
            font-size:28px;
            margin:0 0 8px;
        }
        .muted{
            color:#6d7378;
        }
        .toolbar{
            display:flex;
            gap:12px;
            margin:24px 0 16px;
        }
        .toolbar input{
            flex:1;
        }
        .input,select,textarea{
            font:inherit;
            padding:11px 12px;
            border:1px solid #ddd5cc;
            border-radius:6px;
            background:#fff;
            min-width:0;
        }
        .btn{
            display:inline-block;
            padding:10px 13px;
            border-radius:6px;
            text-decoration:none;
            border:1px solid #001432;
            color:#001432;
            background:#fff;
            cursor:pointer;
            font:inherit;
            font-size:14px;
        }
        .primary{
            background:#001432;
            color:white;
            border-color:#001432;
        }
        .danger{
            color:#c0392b;
            border-color:#c0392b;
        }
        .green{
            color:#001432;
            border-color:#001432;
        }
        .panel{
            background:white;
            border:1px solid #e3ddd6;
            border-radius:8px;
            overflow:hidden;
        }
        .table-wrap{
            overflow-x:auto;
        }
        table{
            width:100%;
            border-collapse:collapse;
            white-space:nowrap;
        }
        th,td{
            text-align:left;
            padding:13px 12px;
            border-bottom:1px solid #e6e0d9;
            font-size:14px;
        }
        th{
            background:#e7eaf0;
            font-weight:bold;
        }
        .badge{
            display:inline-block;
            background:#e7eaf0;
            color:#001432;
            padding:4px 7px;
            border-radius:4px;
            margin:1px;
            font-size:12px;
        }
        .status{
            padding:5px 9px;
            border-radius:14px;
            font-size:12px;
            background:#e7eaf0;
        }
        .status.terisi{
            background:#e7eaf0;
            color:#001432;
        }
        .alert{
            background:#e8f2dc;
            padding:12px 15px;
            margin:16px 0;
            border-radius:6px;
            color:#334719;
        }
        .empty{
            padding:24px;
            text-align:center;
            color:#6d7378;
        }
        footer{
            background:#001432;
            color:white;
            padding:18px 30px;
            font-size:13px;
        }
        @media(max-width:850px){
            .sidebar{
                width:170px
            }
            .toolbar{
                flex-wrap:wrap
            }
            .toolbar input{
                flex-basis:100%
            }
            main{
                padding:20px 14px
            }
            .topbar{
                padding:15px
            }
        }
    </style>
</head>

<body>
<div class="layout">
    <aside class="sidebar">
        <div class="logo">@include('partials.logo', ['width' => 72])</div>
        <div class="sub">Kelola Kos SJB</div>
        <a class="active" href="{{ route('kamar.index') }}">Master Kamar</a>
        <a href="#">Data Penghuni</a>
        <a href="#">Staff</a>
        <a href="#">Inventaris Aset</a>
    </aside>
    <div class="content">
        <header class="topbar"><span>Sistem Manajemen Kos &amp; Properti</span>@include('partials.user-info')</header>
        <main>
            <div class="crumb">Beranda / Master Kamar</div>
            <h1>Master Kamar</h1>
            <p class="muted">Kelola tipe kamar, ukuran, harga sewa dasar, dan fasilitas kamar.</p>
            @if(session('success'))<div class="alert">{{ session('success') }}</div>@endif
            @if($errors->any())<div class="alert" style="background:#f8dce7;color:#8b173f">Periksa kembali data yang dimasukkan. {{ $errors->first() }}</div>@endif
            <form class="toolbar" method="GET" action="{{ route('kamar.index') }}">
                <input class="input" type="text" name="cari" value="{{ request('cari') }}" placeholder="Cari kode atau tipe kamar...">
                <select name="tipe">
                    <option>Semua tipe</option>
                    @foreach(['Standard','Deluxe','Premium'] as $tipe)
                        <option value="{{ $tipe }}" @selected(request('tipe') === $tipe)>{{ $tipe }}</option>
                    @endforeach
                </select>
                <button class="btn" type="submit">Cari</button>
                <a class="btn primary" href="{{ route('kamar.create') }}">+ Tambah Kamar</a>
            </form>
            <section class="panel"><div class="table-wrap">
                <table>
                    <thead><tr><th>No</th><th>Kode</th><th>Tipe</th><th>Ukuran</th><th>Harga Sewa / Bulan</th><th>Fasilitas</th><th>Status</th><th>Aksi</th></tr></thead>
                    <tbody>
                    @forelse($kamars as $kamar)
                        <tr>
                            <td>{{ $loop->iteration }}</td><td>{{ $kamar->kode_kamar }}</td><td>{{ $kamar->tipe }}</td>
                            <td>{{ $kamar->panjang }} x {{ $kamar->lebar }} m</td>
                            <td>Rp {{ number_format($kamar->harga_sewa, 0, ',', '.') }}</td>
                            <td>@foreach(array_filter(array_map('trim', explode(',', $kamar->fasilitas ?? ''))) as $f)<span class="badge">{{ $f }}</span>@endforeach</td>
                            <td><span class="status {{ strtolower($kamar->status) }}">{{ $kamar->status }}</span></td>
                            <td>
                                <a class="btn green" href="{{ route('kamar.show', $kamar) }}">Lihat</a>
                                <a class="btn" href="{{ route('kamar.edit', $kamar) }}">Ubah</a>
                                @if(auth()->user()->role === 'admin')
                                <form method="POST" action="{{ route('kamar.destroy', $kamar) }}" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus kamar ini?')">
                                    @csrf @method('DELETE')
                                    <button class="btn danger" type="submit">Hapus</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="8" class="empty">Belum ada data kamar yang cocok.</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div><div style="padding:15px;color:#777;font-size:13px">Menampilkan {{ $kamars->count() }} data kamar.</div></section>
        </main>
        <footer>
            <p>Laila Husna Mahmuda | 102022500277 | SI-49-07</p>
            <p>Kelompok SJB | Studi Kasus Sistem Manajemen Kos &amp; Properti - Modul Master Kamar</p>
        </footer>
    </div>
</div>
</body>
</html>
