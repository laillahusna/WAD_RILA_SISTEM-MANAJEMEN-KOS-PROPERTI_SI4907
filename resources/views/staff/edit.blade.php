@extends('layouts.app')

@section('title', 'Edit Staff')

@section('content')
  <div class="tabs">
    <a href="{{ route('staff.index') }}" class="tab aktif">Data Staff</a>
    <a href="{{ route('jadwal') }}" class="tab">Jadwal Staff</a>
  </div>

  <h1 class="judul">Edit Staff</h1>

  @include('staff._notif')

  <form action="{{ route('staff.update', $staff->id) }}" method="post" class="form-grid">
    @csrf
    @method('PUT')
    @include('staff._form')
    <div class="aksi">
      <a href="{{ route('staff.index') }}" class="btn btn-outline" style="margin-right:10px">Batal</a>
      <button type="submit" class="btn">Simpan Perubahan</button>
    </div>
  </form>
@endsection
