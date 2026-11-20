@extends('layouts.app')

@section('title', 'Biodata Penghuni')
@section('judul', 'Biodata Penghuni Kos')

@section('content')
<div class="table-container">
    <table class="detail-table">
        <tr><th>Nama</th><td>{{ $penghuni->nama }}</td></tr>
        <tr><th>No KTP</th><td>{{ $penghuni->no_ktp }}</td></tr>
        <tr><th>Pekerjaan</th><td>{{ $penghuni->pekerjaan }}</td></tr>
        <tr><th>No HP</th><td>{{ $penghuni->no_hp }}</td></tr>
        <tr><th>Kontak Darurat</th><td>{{ $penghuni->kontak_darurat }}</td></tr>
        <tr><th>No Kamar</th><td>{{ $penghuni->no_kamar }}</td></tr>
    </table>

    <div class="btn-wrapper">
        <a href="{{ route('penghuni.index') }}" class="btn-kembali">&larr; Kembali ke Daftar</a>
        <a href="{{ route('penghuni.edit', $penghuni) }}" class="btn-edit">Edit Data</a>
    </div>
</div>
@endsection