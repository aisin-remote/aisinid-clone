@extends('website.layouts.master')
@section('title', 'Management Policy - ' . $company)
@section('pages')
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/banner-management-policy.jpg') }}" title="About"
      subtitle="{{ $subtitle }}" dateUpdate="Update (January 15, 2025)" />
    <div class="main-container">
      <div class="row mb-5 ps-3">
        <h2 style="color: #001A72">{{ $title }}</h2>
      </div>
      <div class="row p-3">
        @php $paragraphParts = explode('--', $paragraph); @endphp
        <p>{!! $paragraphParts[0] !!}</p>
        <div class="mb-3">
          @foreach ($policies as $policy)
            <x-policy-bit :code="$policy->code" :description="$policy->desc" />
          @endforeach
        </div>
        <p>{!! $paragraphParts[1] !!}</p>
      </div>
    </div>
  </div>
@endsection
