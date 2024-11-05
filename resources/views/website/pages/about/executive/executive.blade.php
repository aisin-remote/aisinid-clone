@extends('website.layouts.master')
@section('title', 'Executives')
@section('pages')
  <div class="mainContents">
    <div class="mainContents">
      <x-banner :image="$banner" title="Executive Management" :subtitle="$subtitle" />
      <div class="main-container">
        <div class="row">
          <x-custom-breadcrumbs :breadcrumbs="$breadcrumbs" />
        </div>
        <div class="row">
          <h2 class="fw-medium" style="color: #001A72">Board of Directors</h2>
        </div>
        <div class="row">
          <section id="executive-management" style="padding: 3rem 1rem 5rem;">
            @foreach ($executives as $index => $executive)
              <div class="row d-flex flex-wrap justify-content-center custom-line mb-3">
                @foreach ($executive->members as $member)
                  <div
                    class="product-item col-sm-6 col-md-6 col-lg-4 mb-5 d-flex justify-content-center align-items-center flex-column">
                    <h3 style="color: #001A72" class="mb-4">{{ $member->position }}</h3>
                    <x-misc-item :picture="$member->picture" :title="$member->name" />
                  </div>
                @endforeach
              </div>
            @endforeach
          </section>
        </div>
      </div>
    </div>
  </div>
@endsection
