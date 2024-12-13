@extends('website.layouts.master')
@section('title', 'Home')
@section('pages')
  <!-- News Section -->
  {{-- <section id="whatsnew" class="newsSection"> --}}
  <div id="mainCarousel" class="carousel slide" style="margin-bottom: 5rem" data-bs-ride="carousel">
    <div class="carousel-inner">
      <x-carousel-item image="{{ asset('website/img/about/car2.png') }}" text="Inspiring “movement”, creating tomorrow." />
      <x-carousel-item image="{{ asset('website/img/home/history/2024.jpg') }}"
        text="Excellence operation, world class result" />
      <x-carousel-item image="{{ asset('website/img/about/car2.png') }}"
        text="Consistent and keep continuing improvement and innovation" />
      <x-carousel-item image="{{ asset('website/img/home/history/2024.jpg') }}" text="Innovation, Collaboration" />
    </div>
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  {{-- </section> --}}
  <!-- /News Section -->

  <!-- Main Page Section -->
  <x-big-menu image="{{ asset('website/img/about/main-about.jpg') }}" big-title="About"
    text="Becoming a global supplier of automotive component." link="{{ route('about') }}" />
  <x-big-menu image="{{ asset('website/img/about/main-product.jpg') }}" big-title="Product"
    text="With a focus on excellence and detail, we create the best products." link="{{ route('products') }}" />
  <x-big-menu image="{{ asset('website/img/about/main-sustainability.jpg') }}" big-title="Sustainability"
    text="Think and act autonomously in our efforts to build a sustainable society."
    link="https://www.aisin.com/en/sustainability/" />
  <x-big-menu image="{{ asset('website/img/about/main-career.jpg') }}" big-title="Career"
    text="Your Talent, Our Vision: Building the Future." link="{{ route('careers') }}" />
  <x-big-menu image="{{ asset('website/img/home/contact--.png') }}" big-title="Contact"
    text="We can help. Our team of experts is on hand to answer your questions." link="{{ route('contact') }}" />
  <!-- /Main Page Section -->


  <script>
    $(document).ready(function() {
      var $item = $('.carousel-item');
      var $wHeight = $(window).height();
      $item.eq(0).addClass('active');
      $item.height($wHeight);
      $item.addClass('full-screen');

      $('.carousel img').each(function() {
        var $src = $(this).attr('src');
        var $color = $(this).attr('data-color');
        $(this).parent().css({
          'background-image': 'url(' + $src + ')',
          'background-color': $color
        });
        $(this).remove();
      });

      $(window).on('resize', function() {
        $wHeight = $(window).height();
        $item.height($wHeight);
      });

      $('.carousel').carousel({
        interval: 5000,
        pause: "false"
      });
    });
  </script>
@endsection
