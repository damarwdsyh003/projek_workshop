<!doctype html>
<html lang="en">

<head>
    <meta property="og:image" itemprop="image" content="images/logoTitle/logoweb.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:wight" content="200">
    <meta property="og:image:height" content="200">
    <title>Internet Cafe</title>
    <link rel="icon" type="image/png" href="images/logoTitle/logoweb.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex">
            @include('sidebar')

            <div class="col-10 main-content flex-grow-1">
                <div id="notificationContainer"></div>
                @yield('content')
            </div>

            @include('footer')

            @yield('scripts')
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>