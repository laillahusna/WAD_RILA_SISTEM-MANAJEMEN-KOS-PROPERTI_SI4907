@extends('layouts.app')

@section('title', 'Data Penghuni')
@section('judul', 'Data Penghuni Kos SJB')
@section('subjudul', 'Lihat data lengkap seluruh penghuni Kos SJB.')

@section('content')

    <!-- Kolom cari, filter, dan tombol tambah -->
    <div class="baris-atas">
        <input type="text" class="cari" placeholder="Cari nama penghuni...">
        <select class="filter">
            <option>Filter</option>
        </select>
        <a href="{{ route('penghuni.create') }}" class="tombol-tambah">+ Tambah Penghuni</a>
    </div>

    <!-- Tabel data -->
    <div class="kartu-tabel">
        <table>
            <tr>
                <th class="kolom-no">No.</th>
                <th>Nama</th>
                <th>No KTP</th>
                <th>Pekerjaan</th>
                <th>Kamar</th>
                <th>No HP</th>
                <th>Kontak Darurat</th>
                <th class="kolom-aksi">Aksi</th>
            </tr>

            @foreach ($penghuni as $row)
            <tr>
                <td class="kolom-no">{{ $loop->iteration }}</td>
                <td>{{ $row->nama }}</td>
                <td class="ktp">{{ $row->no_ktp }}</td>
                <td>{{ $row->pekerjaan }}</td>
                <td>{{ $row->no_kamar }}</td>
                <td>{{ $row->no_hp }}</td>
                <td>{{ $row->kontak_darurat }}</td>
                <td class="aksi">
                    <a href="{{ route('penghuni.show', $row) }}">Lihat</a>
                    <a href="{{ route('penghuni.edit', $row) }}">Ubah</a>
                    <form action="{{ route('penghuni.destroy', $row) }}" method="POST"
                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="hapus">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection
