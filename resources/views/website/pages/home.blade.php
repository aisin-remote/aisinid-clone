@extends('website.layouts.master')
@section('title', 'Home')
@section('pages')
  <!-- News Section -->
  {{-- <section id="whatsnew" class="newsSection"> --}}
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-bottom: 5rem">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <x-carousel-item image="{{ asset('website/img/aiia.png') }}" text="Inspiring “movement”, creating tomorrow." />
      <x-carousel-item image="{{ asset('website/img/aii.png') }}" text="Excellence operation, world class result" />
      <x-carousel-item image="{{ asset('website/img/aii.png') }}"
        text="Consistent and keep continuing improvement and innovation" />
      <x-carousel-item image="{{ asset('website/img/aii.png') }}" text="Innovation, Collaboration" />
    </div>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <!-- <span class="sr-only">Previous</span> -->
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <!-- <span class="sr-only">Next</span> -->
    </a>
  </div>
  {{-- </section> --}}
  <!-- /News Section -->

  <!-- Main Page Section -->
  <x-big-menu image="https://www.aisin.com/jp/assets/img/home/PC_technology_bg.jpg" big-title="About"
    text="Becoming a global supplier of automotive component." link="#" />
  <x-big-menu image="https://www.aisin.com/jp/assets/img/home/PC_products_bg.jpg" big-title="Product"
    text="With a focus on excellence and detail, we create the best products." link="#" />
  <x-big-menu image="https://www.aisin.com/jp/assets/img/home/PC_products_bg.jpg" big-title="Sustainability"
    text="Think and act autonomously in our efforts to build a sustainable society." link="#" />
  <x-big-menu image="https://www.aisin.com/jp/assets/img/home/PC_products_bg.jpg" big-title="Career"
    text="With a focus on excellence and detail, we create the best products." link="#" />
  <x-big-menu image="https://www.aisin.com/jp/assets/img/home/PC_products_bg.jpg" big-title="Contact"
    text="With a focus on excellence and detail, we create the best products." link="{{ route('contact') }}" />
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
        interval: 6000,
        pause: "true"
      });
    });
  </script>
@endsection
