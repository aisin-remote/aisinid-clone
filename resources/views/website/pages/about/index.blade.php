@extends('website.layouts.master')
@section('title', 'About - Main Menu')
@section('pages')
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/banner-about.png') }}" title="About" subtitle="Main Menu" />
    <div class="main-container">
      <div class="row">
        <x-menu-banner image="{{ asset('website/img/about/banner-policy.jpg') }}" title="Company Principle"
          link="https://www.aisin.com/en/profile/policy/" column="col-lg-12" />
        <x-menu-banner image="{{ asset('website/img/about/banner-core-value.jpg') }}" title="Company Core Value"
          link="{{ route('core') }}" column="col-lg-12" />
        <x-menu-banner image="{{ asset('website/img/about/banner-message-from-top.jpg') }}"
          title="Message from Top Management" link="{{ route('management-message') }}" column="col-lg-12" />
        <x-menu-banner image="{{ asset('website/img/about/banner-executive-management.jpg') }}"
          title="Executive Management" link="{{ route('executives') }}" column="col-lg-12" />
        <x-menu-banner image="{{ asset('website/img/about/summary-aii.jpg') }}" title="Company Summary"
          link="{{ route('company-summary') }}" column="col-lg-6" />
        <x-menu-banner image="{{ asset('website/img/home/history/1996.jpg') }}" title="Company History"
          link="{{ route('company-history-main') }}" column="col-lg-6" />
        <x-menu-banner image="{{ asset('website/img/about/banner-brand.jpg') }}" title="Brand"
          link="https://www.aisin.com/en/profile/brand/" column="col-lg-6" />
        <x-menu-banner image="{{ asset('website/img/about/banner-awards.jpg') }}" title="Awards"
          link="{{ route('awards') }}" column="col-lg-6" />
      </div>
    </div>
  </div>
@endsection
