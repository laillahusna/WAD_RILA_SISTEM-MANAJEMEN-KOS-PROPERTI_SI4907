@extends('layouts.app')

@section('title', 'Jadwal Staff')

@section('content')
    <div class="tabs">
      <a href="{{ route('staff.index') }}" class="tab">Data Staff</a>
      <a href="{{ route('jadwal') }}" class="tab aktif">Jadwal Staff</a>
    </div>

    <h1 class="judul">Jadwal Staff</h1>

    <div class="kal-bar">
      <span class="kal-judul">12 &ndash; 18 Oktober 2026</span>
      <div class="legend">
        <span class="tag t1">Lantai 1</span>
        <span class="tag t2">Lantai 2</span>
        <span class="tag t3">Lantai 3</span>
      </div>
    </div>

    <div class="kal-wrap">
      <div class="kal">
        <div class="hari-kol" data-hari="Senin">
          <div class="hari-head"><span class="nm">Senin</span><span class="tgl">12</span></div>
          <div class="kartu l1">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Asep Kimpul</strong>
            <span class="tag t1">Lantai 1</span>
          </div>
          <div class="kartu l2">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Puspi Nugrari</strong>
            <span class="tag t2">Lantai 2</span>
          </div>
          <div class="kartu l1">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Mahmud Hasnu</strong>
            <span class="tag t1">Lantai 1</span>
          </div>
          <div class="kartu l3">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Aliyah Fathiyah</strong>
            <span class="tag t3">Lantai 3</span>
          </div>
        </div>
        <div class="hari-kol" data-hari="Selasa">
          <div class="hari-head"><span class="nm">Selasa</span><span class="tgl">13</span></div>
          <div class="kartu l1">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Mahmud Hasnu</strong>
            <span class="tag t1">Lantai 1</span>
          </div>
          <div class="kartu l2">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Cardunalian Arifah</strong>
            <span class="tag t2">Lantai 2</span>
          </div>
          <div class="kartu l1">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Asep Kimpul</strong>
            <span class="tag t1">Lantai 1</span>
          </div>
          <div class="kartu l3">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Clarisma Dwi</strong>
            <span class="tag t3">Lantai 3</span>
          </div>
        </div>
        <div class="hari-kol" data-hari="Rabu">
          <div class="hari-head"><span class="nm">Rabu</span><span class="tgl">14</span></div>
          <div class="kartu l2">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Puspi Nugrari</strong>
            <span class="tag t2">Lantai 2</span>
          </div>
          <div class="kartu l3">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Aliyah Fathiyah</strong>
            <span class="tag t3">Lantai 3</span>
          </div>
          <div class="kartu l1">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Asep Kimpul</strong>
            <span class="tag t1">Lantai 1</span>
          </div>
          <div class="kartu l2">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Cardunalian Arifah</strong>
            <span class="tag t2">Lantai 2</span>
          </div>
        </div>
        <div class="hari-kol" data-hari="Kamis">
          <div class="hari-head"><span class="nm">Kamis</span><span class="tgl">15</span></div>
          <div class="kartu l1">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Mahmud Hasnu</strong>
            <span class="tag t1">Lantai 1</span>
          </div>
          <div class="kartu l3">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Clarisma Dwi</strong>
            <span class="tag t3">Lantai 3</span>
          </div>
          <div class="kartu l2">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Puspi Nugrari</strong>
            <span class="tag t2">Lantai 2</span>
          </div>
          <div class="kartu l3">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Aliyah Fathiyah</strong>
            <span class="tag t3">Lantai 3</span>
          </div>
        </div>
        <div class="hari-kol" data-hari="Jumat">
          <div class="hari-head"><span class="nm">Jumat</span><span class="tgl">16</span></div>
          <div class="kartu l1">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Asep Kimpul</strong>
            <span class="tag t1">Lantai 1</span>
          </div>
          <div class="kartu l2">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Cardunalian Arifah</strong>
            <span class="tag t2">Lantai 2</span>
          </div>
          <div class="kartu l1">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Mahmud Hasnu</strong>
            <span class="tag t1">Lantai 1</span>
          </div>
          <div class="kartu l3">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Clarisma Dwi</strong>
            <span class="tag t3">Lantai 3</span>
          </div>
        </div>
        <div class="hari-kol" data-hari="Sabtu">
          <div class="hari-head"><span class="nm">Sabtu</span><span class="tgl">17</span></div>
          <div class="kartu l3">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Aliyah Fathiyah</strong>
            <span class="tag t3">Lantai 3</span>
          </div>
          <div class="kartu l2">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Puspi Nugrari</strong>
            <span class="tag t2">Lantai 2</span>
          </div>
          <div class="kartu l2">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Cardunalian Arifah</strong>
            <span class="tag t2">Lantai 2</span>
          </div>
        </div>
        <div class="hari-kol" data-hari="Minggu">
          <div class="hari-head"><span class="nm">Minggu</span><span class="tgl">18</span></div>
          <div class="kartu l3">
            <span class="waktu">06.30 - 10.30</span>
            <strong>Clarisma Dwi</strong>
            <span class="tag t3">Lantai 3</span>
          </div>
          <div class="kartu l1">
            <span class="waktu">17.30 - 21.30</span>
            <strong>Asep Kimpul</strong>
            <span class="tag t1">Lantai 1</span>
          </div>
        </div>
      </div>
    </div>

    <script>
      const nama = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
      const kol = document.querySelector('[data-hari="' + nama[new Date().getDay()] + '"]');
      if (kol) kol.classList.add('hari-ini');
    </script>
@endsection
