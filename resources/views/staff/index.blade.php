@extends('layouts.app')

@section('title', 'Daftar Staff')

@section('content')
  <div class="tabs">
    <a href="{{ route('staff.index') }}" class="tab aktif">Data Staff</a>
    <a href="{{ route('jadwal') }}" class="tab">Jadwal Staff</a>
  </div>

  <h1 class="judul">Daftar Staff</h1>

  @include('staff._notif')

  {{-- CREATE: form tambah staff --}}
  <form action="{{ route('staff.store') }}" method="post" class="form-grid">
    @csrf
    @include('staff._form')
    <div class="aksi">
      <button type="submit" class="btn">+ Daftarkan Staff</button>
    </div>
  </form>

  {{-- READ: tabel staff --}}
  <h2 class="sub">Data Staff</h2>
  <div class="tabel-wrap">
    <table class="tabel">
      <thead>
        <tr>
          <th>No.</th><th>Nama</th><th>Jobdesk</th><th>Area Kerja</th>
          <th>Usia</th><th>Kontak</th><th>TTL</th><th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($daftar as $row)
          <tr>
            <td>{{ $loop->iteration }}.</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->jobdesk }}</td>
            <td>{{ $row->area_kerja }}</td>
            <td>{{ $row->usia }}</td>
            <td>{{ $row->no_telepon }}</td>
            <td>{{ $row->ttl }}</td>
            <td class="sel-aksi">
              {{-- UPDATE: link ke halaman edit --}}
              <a href="{{ route('staff.edit', $row->id) }}" class="btn-kecil">Edit</a>
              {{-- DELETE: hanya tampil untuk admin --}}
              @if (auth()->user()->role === 'admin')
                <form action="{{ route('staff.destroy', $row->id) }}" method="post"
                      onsubmit="return confirm('Hapus data staff ini?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn-kecil btn-hapus">Hapus</button>
                </form>
              @endif
            </td>
          </tr>
        @empty
          <tr><td colspan="8" class="kosong">Belum ada data staff.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
@endsection
