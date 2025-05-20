<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Satu AISIN - @yield('title')</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <meta name="description" content="AISIN INDONESIA">
  <meta name="keywords" content="AISIN INDONESIA">

  <meta property="og:title" content="AISIN INDONESIA">
  <meta property="og:type" content="website">
  <meta property="og:description" content="AISIN INDONESIA">
  <meta property="og:url" content="https://aisin.id/">
  <meta property="og:image" content="{{ asset('website/img/common/ogp.png') }}">
  <meta property="og:site_name" content="AISIN INDONESIA">

  <link rel="stylesheet" href="{{ asset('website/css/global.css') }}" type="text/css" media="all">
  <link href="{{ asset('website/css/home.css') }}" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('website/css/print.css') }}" media="print">
  <link rel="stylesheet" href="{{ asset('website/css/select2.min.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('website/css/sweetalert2.min.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('website/css/select2-bootstrap-5-theme.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap-icons.min.css') }}" type="text/css" media="all">

  <script type="text/javascript" src="{{ asset('website/js/jquery-3.7.1.min.js') }}"></script>
  <script src="{{ asset('website/js/home.js') }}"></script>
  <script src="{{ asset('website/js/select2.min.js') }}"></script>
  <script src="{{ asset('website/js/sweetalert2.all.min.js') }}"></script>
  <script src="{{ asset('website/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('website/js/popper.js') }}"></script>
  <script type="text/javascript" src="{{ asset('website/js/main.js') }}"></script>

  <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>


  <style>
    .newsSection {
      position: absolute;
      z-index: 1;
      background: rgba(255, 255, 255, 0.8);
      /* Semi-transparent background */
      padding: 20px;
    }

    .newsBackground {
      position: relative;
      overflow: hidden;
    }

    .newsBackground .carousel-item img {
      object-fit: cover;
      width: 100%;
      height: 400px;
      /* Adjust height as needed */
    }

    .newsBackground .carousel-inner {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    /* Custom CSS untuk carousel
    h5 {
      display: inline-block;
      padding: 10px;
      background: rgb(23, 23, 76);
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    } */

    .full-screen {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .carousel-caption-static {
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
      color: white;
      font-size: 2rem;
    }
  </style>
</head>

<body id="home" class="home">
  @include('website.includes.header')
  @include('cookie-consent::index')
  <!-- wrapper -->
  <div class="wrapper d-flex flex-column min-vh-100">

    @yield('pages')

    @include('website.includes.footer')
  </div>
  <!-- wrapper -->
  @yield('scripts')
</body>

</html>
