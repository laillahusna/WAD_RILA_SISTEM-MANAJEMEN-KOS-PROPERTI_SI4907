<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Kos SJB</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            background-color: #001233;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 14px;
            color: #001233;
        }

        .kotak-login {
            width: 380px;
            margin: 90px auto;
            padding: 35px;
            background-color: white;
            border-radius: 10px;
        }

        .logo-login { font-size: 30px; font-weight: 700; }
        h1 { margin: 10px 0 0 0; font-size: 26px; }
        .subjudul { margin: 4px 0 25px 0; font-size: 12px; color: #555555; }

        label { display: block; margin-bottom: 8px; font-weight: 700; font-size: 13px; }

        input {
            width: 100%;
            height: 44px;
            padding: 0 16px;
            margin-bottom: 18px;
            border: 1px solid #999999;
            border-radius: 8px;
            font-family: 'Poppins', Arial, sans-serif;
        }

        button {
            width: 100%;
            padding: 13px;
            background-color: #001233;
            color: white;
            border: none;
            border-radius: 8px;
            font-family: 'Poppins', Arial, sans-serif;
            font-weight: 500;
            cursor: pointer;
        }

        .gagal { background-color: #f8d7da; color: #842029; padding: 10px; margin-bottom: 18px; border-radius: 8px; }
        .error { color: red; font-size: 11px; margin: -12px 0 14px 0; }
    </style>
</head>
<body>

    <div class="kotak-login">
        <div class="logo-login">SJB</div>
        <h1>Login Admin</h1>
        <p class="subjudul">Masuk dulu untuk mengelola data Kos SJB.</p>

        @if (session('gagal'))
            <div class="gagal">{{ session('gagal') }}</div>
        @endif

        <form action="{{ route('login.proses') }}" method="POST">
            @csrf

            <label>Username</label>
            <input type="text" name="username" placeholder="Contoh: admin" value="{{ old('username') }}">
            @error('username') <div class="error">{{ $message }}</div> @enderror

            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
            @error('password') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">Masuk</button>
        </form>
    </div>

</body>
</html>
