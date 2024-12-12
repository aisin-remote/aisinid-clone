@extends('website.layouts.master')
@section('title', 'Job Opportunities')
@section('pages')
  <div class="mainContents">
    <div class="mainContents">
      <x-banner image="{{ asset('website/img/about/main-career.jpg') }}" title="Career" :subtitle="$subtitle"
        dateUpdate="Update (December 1, 2024)" />
      <div class="main-container">
        <div class="row">
          <div class="col-sm-12">
            <x-small-search />
          </div>
        </div>
        <div class="row">
          <section class="products" style="padding: 3rem 1rem 5rem;">
            <div class="row d-flex flex-wrap justify-content-center">
              @if (count($data) == 0)
                <div class="row rounded-3 p-3 bg-white shadow" style="min-height: 20rem">
                  <div class="col-12 text-center my-auto">
                    <h4><strong>No vacancies available</strong></h4>
                  </div>
                </div>
              @else
                @foreach ($data as $index => $career)
                  <div data-id="{{ $index }}" data-product="{{ json_encode($product) }}"
                    class="product-item col-sm-6 col-md-6 col-lg-4 mb-5 d-flex justify-content-center"
                    style="cursor: pointer">
                    {{-- <x-misc-item :picture="$career->picture" :title="$career->name" /> --}}
                  </div>
                @endforeach
              @endif
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
@endsection
