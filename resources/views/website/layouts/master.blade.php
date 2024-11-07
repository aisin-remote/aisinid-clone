<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Satu AISIN - @yield('title')</title>
  <meta name="description" content="DESCRIPTION">
  <meta name="keywords" content="KEYWORD">

  <meta property="og:title" content="サイト名">
  <meta property="og:type" content="website">
  <meta property="og:description" content="DESCRIPTION">
  <meta property="og:url" content="https://aisin-web/">
  <meta property="og:image" content="{{ asset('website/img/common/ogp.png') }}">
  <meta property="og:site_name" content="サイト名">

  <link rel="stylesheet" href="{{ asset('website/css/global.css') }}" type="text/css" media="all">
  <link href="{{ asset('website/css/home.css') }}" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('website/css/print.css') }}" media="print">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script type="text/javascript" src="{{ asset('website/js/main.js') }}"></script>
  <script src="{{ asset('website/js/home.js') }}"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jointjs/3.5.5/joint.min.css" rel="stylesheet">

  <script src="https://unpkg.com/popper.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


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
  <!-- wrapper -->
  <div class="wrapper d-flex flex-column min-vh-100">

    @yield('pages')

    @include('website.includes.footer')
  </div>
  <!-- wrapper -->
  @yield('scripts')
</body>

</html>
