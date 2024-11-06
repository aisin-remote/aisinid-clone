@extends('website.layouts.master')
@section('title', 'Company History')
@section('pages')
  <div class="mainContents">
    <div class="mainContents">
      <x-banner :image="$banner" title="About" :subtitle="$subtitle" />
      <div class="main-container">
        <div class="row">
          <h2 class="fw-medium">{{ $subtitle }}</h2>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="border-top border-dark-subtle my-4"></div>
          </div>
        </div>
        <div class="row">
          <section id="company-history" style="padding: 3rem 1rem 5rem;">
            <div id="history" class="d-flex flex-column">
              @foreach ($history as $item)
                <x-history-card :picture="$item->picture" :title="$item->title" :year="$item->year" :description="$item->description" />
              @endforeach
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
@endsection
