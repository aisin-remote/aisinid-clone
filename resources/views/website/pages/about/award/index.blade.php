@extends('website.layouts.master')
@section('title', 'About - Awards - Main Menu')
@section('pages')
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/banner-awards.jpg') }}" title="Awards" subtitle="Main Menu" />
    <div class="main-container">
      <div class="row">
        <x-menu-banner image="{{ asset('website/img/home/awards/rak.jpg') }}" title="PT AISIN INDONESIA"
          link="{{ route('award-list', ['company' => 'aii']) }}" column="col-lg-6" />
        <x-menu-banner image="{{ asset('website/img/about/banner-awards.jpg') }}" title="PT AISIN INDONESIA AUTOMOTIVE"
          link="{{ route('award-list', ['company' => 'aiia']) }}" column="col-lg-6" />
      </div>
    </div>
  </div>
@endsection
