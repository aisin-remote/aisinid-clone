@extends('website.layouts.master')
@section('title', 'About - Main Menu')
@section('pages')
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/banner-about.png') }}" title="About" subtitle="Main Menu" />
    <div class="main-container">
      <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Company Principle"
        link="https://www.aisin.com/en/profile/policy/" />
      <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Company Core Value"
        link="https://www.aisin.com/en/profile/policy/" />
      <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Message from Top Management"
        link="https://www.aisin.com/en/profile/policy/" />
      <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Executive Management"
        link="https://www.aisin.com/en/profile/policy/" />
      <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Company History"
        link="https://www.aisin.com/en/profile/policy/" />
      <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Brand"
        link="https://www.aisin.com/en/profile/policy/" />
      <x-menu-banner image="{{ asset('website/img/about/banner-about.png') }}" title="Awards"
        link="https://www.aisin.com/en/profile/policy/" />
    </div>
  </div>
@endsection
