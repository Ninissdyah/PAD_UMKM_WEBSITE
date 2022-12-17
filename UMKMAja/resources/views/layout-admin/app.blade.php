<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM WEBSITE - KELOMPOK 7</title>

    <!-- font dari cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- css link -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lightbox2-dev/dist/css/lightbox.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <!-- animate -->
    <link href="https://dl.dropbox.com/s/dy890pni7k045na/animate.css?dl=0" rel="stylesheet" type="text/css"></link>

</head>
<body>
    <!-- header awal -->
    @include('layout-admin.header')
    <!-- header akhir -->

    @yield('content')


    <!-- footer awal -->
    @include('layout-admin.footer  ')
    <!-- footer akhir -->


    <!-- javascript link -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="{{asset('js/dialog.js')}}"></script>
    <script src="{{asset('js/javaScript.js')}}"></script>
    <script src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
    <script src="{{ asset('lightbox2-dev/dist/js/lightbox-plus-jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <!-- wow.js -->
    <script src="https://dl.dropbox.com/s/kqyr5w7ia2q7fkb/wow.js?dl=0" type="text/javascript"></script>
    <script>new WOW().init();</script>

</body>
</html>