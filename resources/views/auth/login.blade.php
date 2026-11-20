<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Kos SJB</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="login-body">
  <div class="login-box">
    <h1 class="judul">Login Kos SJB</h1>

    @if ($errors->any())
      <div class="login-error">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('login.proses') }}" method="post" class="login-form">
      @csrf
      <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
      </div>
      <div class="field">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</body>
</html>
