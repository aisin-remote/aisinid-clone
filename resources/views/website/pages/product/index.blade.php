@extends('website.layouts.master')
@section('title', 'Product - Main Menu')
@section('pages')
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Product" subtitle="Main Menu" />
    <div class="main-container">
      <div class="row">
        <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Body Part"
          link="{{ route('product-list', ['product' => 'body-part']) }}" column="col-lg-6" />
        <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Engine Part"
          link="{{ route('product-list', ['product' => 'engine-part']) }}" column="col-lg-6" />
        <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Drive Train"
          link="{{ route('product-list', ['product' => 'drive-train']) }}" column="col-lg-6" />
        <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="ELectrical Part"
          link="{{ route('product-list', ['product' => 'electrical-part']) }}" column="col-lg-6" />
      </div>
    </div>
  </div>
@endsection
