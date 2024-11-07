@extends('website.layouts.master')
@section('title', 'Brand')
@section('pages')
  <div class="mainContents">
    <div class="pageHeader">
      <h1 class="pageTtl">Brand</h1>

      <section class="noticeSection" id="notice">
        <div class="inner">


          <div class="noticeHeader">
            <p2 style="font-size: 15px; display: block; text-align: justify;">AISIN Seiki Co., Ltd. and its subsidiary,
              AISIN AW Co., Ltd., merged business operations on April 1, 2021, making a new start as AISIN CORPORATION.
              Our logo and brand slogan represent our hopes and ideas, as well as our determination to realize the brand
              we are aiming for.
            </p2>
          </div><!-- /noticeHeader -->



          <div class="box blockLogo">
            <h2 class="blockTtl">Logo</h2>
            <figure class="logo" style="text-align: center;"><img src="{{ asset('website/img/home/brand/logo_aisin.png') }}"
                alt="AISIN"></figure><br><br>
            <p2 class="lead" style="font-size: 15px; display: block; text-align: justify;">Our corporate logo symbolizes
              our philosophy: Inspiring &ldquo;movement&rdquo;, creating tomorrow.<br>
              The large, rounded top of the typeface represents unity and togetherness. The design evokes all of our AISIN
              Group companies working together in unity to achieve even more ambitious goals. The gently rounded lettering
              reflects our goals: happiness and beauty for our future earth.<br>
              The italic text and streamlined accents represent the energy and drive of our employees as they achieve
              their dreams and aspirations to create a brighter future.<br>
              Our corporate logo represents the company we want to be, our hopes and ideals, as well as our determination
              to achieve our goals.<br><br>
            </p2>
          </div>
          <!-- /box -->

          <div class="box blockMessage">
            <h2 class="blockTtl">Brand Slogan</h2>
            <h3><img src="{{ asset('website/img/home/brand/brand_slogan.JPEG') }}" alt="We Touch the Future"
                style="text-align: center;"></h3><br><br>
            <p2 class="lead" style="font-size: 15px; display: block; text-align: justify;">Our corporate logo symbolizes
              our philosophy: Inspiring &ldquo;movement&rdquo;, creating tomorrow.<br>
              The large, rounded top of the typeface represents unity and togetherness. The design evokes all of our AISIN
              Group companies working together in unity to achieve even more ambitious goals. The gently rounded lettering
              reflects our goals: happiness and beauty for our future earth.<br>
              The italic text and streamlined accents represent the energy and drive of our employees as they achieve
              their dreams and aspirations to create a brighter future.<br>
              Our corporate logo represents the company we want to be, our hopes and ideals, as well as our determination
              to achieve our goals.<br><br>
            </p2>
          </div>
          <!-- /box -->

          {{-- <div class="box blockBrand">
            <h2 class="blockTtl">Brand Video</h2>
            <p2 style="font-size: 15px; display: block; text-align: justify;">This video represents the AISIN Group's
              management philosophy.</p2>
            <figure class="thumb">
              <!-- <a href="javascript:void(0)" class="popupBtItem trOp02s" data-video="IsJIZ5fpQvY" data-popup="popupWrapperMovie" data-title="Brand movie">
                        <img src="https://www.aisin.com/jp/assets/img/profile/brand/movie.jpg" alt="Brand movie (Movie)">
                      </a> -->
            </figure>
          </div> --}}
          <!-- /box -->
        </div>
      </section>
    </div>
  </div>
@endsection
