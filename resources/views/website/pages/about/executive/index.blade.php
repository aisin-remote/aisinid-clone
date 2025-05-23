@extends('website.layouts.master')
@section('title', 'Executive Management - Main Menu')
@section('pages')
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/banner-executive-aiia.jpg') }}" title="Executive Management" subtitle="Main Menu" />
    <div class="main-container">
      <div class="row">
        <x-menu-banner image="{{ asset('website/img/about/bod-aii-2.jpg') }}" title="PT AISIN Indonesia"
          link="{{ route('executive-list', ['company' => 'aii']) }}" column="col-lg-6" />
        <x-menu-banner image="{{ asset('website/img/about/bod-aiia-2.jpg') }}" title="PT AISIN Indonesia Automotive"
          link="{{ route('executive-list', ['company' => 'aiia']) }}" column="col-lg-6" />
      </div>
    </div>
  </div>
@endsection
