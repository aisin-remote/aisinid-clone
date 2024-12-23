@extends('website.layouts.master')
@section('title', 'About - Company Summary - Main Menu')
@section('pages')
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/summary-aii.jpg') }}" title="Company Summary" subtitle="Main Menu" />
    <div class="main-container">
      <div class="row">
        <x-menu-banner image="{{ asset('website/img/about/summary-aii.jpg') }}" title="PT AISIN Indonesia"
          link="{{ route('company-summary', ['company' => 'aii']) }}" column="col-lg-6" />
        <x-menu-banner image="{{ asset('website/img/about/summary-aiia.jpg') }}" title="PT AISIN Indonesia Automotive"
          link="{{ route('company-summary', ['company' => 'aiia']) }}" column="col-lg-6" />
      </div>
    </div>
  </div>
@endsection
