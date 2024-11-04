@extends('website.layouts.master')
@section('title', 'About - Awards - Main Menu')
@section('pages')
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Awards" subtitle="Main Menu" />
    <div class="main-container">
      <div class="row">
        <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="PT Aisin Indonesia"
          link="{{ route('company-summary', ['company' => 'aii']) }}" column="col-lg-6" />
        <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="PT Aisin Indonesia Automotive"
          link="{{ route('company-summary', ['company' => 'aiia']) }}" column="col-lg-6" />
      </div>
    </div>
  </div>
@endsection
