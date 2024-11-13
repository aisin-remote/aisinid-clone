@extends('website.layouts.master')
@section('title', 'Contact')
@section('pages')
  <style>
    .list-group-item {
      border: none;
    }

    .form-label {
      font-size: 14px
    }
  </style>
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/banner-search.png') }}" title="Search" subtitle="Search Result" />
    <div class="main-container">
      <div id="searchResultBox">
      </div>
    </div>
  </div>
@endsection
