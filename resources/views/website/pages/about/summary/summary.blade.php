@extends('website.layouts.master')
@section('title', $pageTitle . ' - Company Summary')
@section('pages')
  <div class="mainContents">
    <div class="mainContents">
      <x-banner image="{{ $banner }}" title="About" subtitle="{{ $subtitle }}" dateUpdate="Update (December 1, 2024)" />
      <div class="main-container">
        <div class="row">
          <x-custom-breadcrumbs :breadcrumbs="$breadcrumbs" />
        </div>
        <div class="row">
          <h2 class="fw-medium">{{ $title }}</h2>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="border-top border-dark-subtle my-4"></div>
          </div>
        </div>
        <div class="row">
          <section class="company-summary" style="padding: 3rem 1rem 5rem;">
            <div class="row">
              <div class="d-flex align-items-center col-md-6 mt-4 mt-md-0 order-2 order-md-1">
                <p>{{ $description }}</p>
              </div>
              <div class="col-md-6 d-flex align-items-center mb-4 mb-md-0 order-1 order-md-2">
                <img src="{{ $image }}" alt="" class="img-fluid w-100 h-100 object-fit-cover"
                  style="min-height: 300px">
              </div>
          </section>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="border-top border-dark-subtle my-4"></div>
          </div>
        </div>
        <div class="row">
          <section class="company-profile" style="margin-top: 5rem">
            <h2 class="fw-medium" style="margin-bottom: 2rem">Company Profile</h2>
            <div class="box">
              <table class="tableStyle01">
                <tbody>
                  @foreach ($profile as $item)
                    <tr>
                      <th>{{ $item->title }}</th>
                      <td>{{ $item->content }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
@endsection
