@if (session('pesan'))
  <div class="alert {{ session('pesan')['tipe'] }}" id="notif">{{ session('pesan')['teks'] }}</div>
  <script>
    setTimeout(function () {
      var n = document.getElementById('notif');
      if (!n) return;
      n.style.opacity = '0';
      setTimeout(function () { n.style.display = 'none'; }, 500);
    }, 3000);
  </script>
@endif

@if ($errors->any())
  <div class="alert gagal">
    @foreach ($errors->all() as $e)
      <div>{{ $e }}</div>
    @endforeach
  </div>
@endif
