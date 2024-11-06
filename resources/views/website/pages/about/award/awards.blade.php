@extends('website.layouts.master')
@section('title', 'Awards')
@section('pages')
  <div class="mainContents">
    <div class="mainContents">
      <x-banner :image="$banner" title="Product" :subtitle="$subtitle" />
      <div class="main-container">
        <div class="row">
          <x-custom-breadcrumbs :breadcrumbs="$breadcrumbs" />
        </div>
        @foreach ($awards as $category => $awards)
          <div class="row">
            <h2 class="fw-medium">{{ $category }}</h2>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="border-top border-dark-subtle my-4"></div>
            </div>
          </div>
          <div class="row">
            <section class="company-summary" style="padding: 3rem 1rem 5rem;">
              <div class="row d-flex flex-wrap justify-content-center">
                @foreach ($awards as $award)
                  <div class="product-item col-sm-6 col-md-6 col-lg-4 mb-5 d-flex justify-content-center"
                    style="cursor: pointer">
                    <x-misc-item :picture="$award->picture" :title="$award->name" :border="true" />
                  </div>
                @endforeach
              </div>
            </section>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
