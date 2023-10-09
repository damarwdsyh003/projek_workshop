{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="{{ route('halamanregister') }}">Register</a></p>
</body>
</html> --}}


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login Apps</title>
</head>
<body>
<main>
    <header>
        <img src="assets/img/unair_horizontal.png" alt="Unair logo">
    </header>
    <!--TODO 1 : Ubah div menjadi form-->
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif
    <form class="login-input" method="POST" action="{{ route('login.post') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <div class="kembali-input">
    <a href="{{ route('welcome')}}"><button>KEMBALI</button></a>
    </div>
</main>
<div id="modal" class="pop-up-modal">
    <h2>Login gagal!</h2>
    <p>Silakan coba lagi</p>
</div>

<script src="assets/js/index.js"></script>
<script src="assets/js/login.js"></script>
</body>
</html>