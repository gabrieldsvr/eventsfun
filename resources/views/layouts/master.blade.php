<!DOCTYPE html>
<html>
<head>
    <title>Admin System</title>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VGQ3DHXVK1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VGQ3DHXVK1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">


    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <!-- plugin css -->


    @stack('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        .display-4 {
            font-family: 'Bebas Neue', cursive;
        }

        .display-6 {
            font-family: 'Bebas Neue', cursive;
        }

        .display-3 {
            font-family: 'Bebas Neue', cursive;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        li {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
        }

        p {
            font-family: 'Poppins', sans-serif;
        }


        .thumb {
            position: relative;
            max-width: 250px;
            height: 400px;
            overflow: hidden;
        }


        .thumb-logo {
            position: relative;
            height: 400px;
            overflow: hidden;
        }

        .thumb-logo img {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 150%;
            width: auto;
            transform: translate(-50%, -50%);
        }

        .thumb-logo img.portrait-logo {
            width: 210%;
            height: auto;
        }


        .thumb img {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 100%;
            width: auto;
            transform: translate(-50%, -50%);
        }

        .thumb img.portrait {
            width: 100%;
            height: auto;
        }


        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: rgba(75, 75, 75, 0.26);
        }

        .container:hover .overlay {
            opacity: 1;
        }

        .container:hover img.portrait {
            transition: .5s ease;
            width: 105%;
            height: auto;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .font-menu {
            font-family: 'Bebas Neue', cursive;
            font-size: 28px !important;
        }

        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }


        .text {
            font-family: 'Bebas Neue', cursive;
            font-weight: bold;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>


    {{--    <link rel="stylesheet" href="{{url('css/horizontal-layout-light/style.css')}}">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css"
          integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css"
          integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/regular.min.css"
          integrity="sha512-k2UAKyvfA7Xd/6FrOv5SG4Qr9h4p2oaeshXF99WO3zIpCsgTJ3YZELDK0gHdlJE5ls+Mbd5HL50b458z3meB/Q=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/solid.min.css"
          integrity="sha512-6mc0R607di/biCutMUtU9K7NtNewiGQzrvWX4bWTeqmljZdJrwYvKJtnhgR+Ryvj+NRJ8+NnnCM/biGqMe/iRA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="<?= url("css/jquery-toast-plugin/jquery.toast.min.css") ?>">

</head>
<body class="" data-bs-theme="dark">


@yield('content')
@include('layouts.footer')

<script src="{{url('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{url('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('vendors/jquery-toast-plugin/jquery.toast.min.js')}}"></script>



@stack('plugin-scripts')

@stack('custom-scripts')

<script src="<?= url("css/jquery-toast-plugin/jquery.toast.min.js") ?>"></script>


</body>
</html>
