@extends('website.layouts.master')
@section('title', 'PT AISIN INDONESIA - Company Summary')
@section('pages')
  <div class="mainContents">
    <div class="mainContents">
      <x-banner image="{{ asset('website/img/about/banner-about.png') }}" title="About" subtitle="Main Menu" />
      <div class="main-container">
        <div class="row">
          <x-custom-breadcrumbs :breadcrumbs="$breadcrumbs" />
        </div>
        <div class="row">
          <h2 class="fw-medium">PT AISIN INDONESIA (AII)</h2>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="border-top border-dark-subtle my-4"></div>
          </div>
        </div>
        <div class="row">
          <section class="company-summary" style="padding: 3rem 1rem 5rem;">
            <div class="row">
              <div class="col-md-6 mt-4 mt-md-0 order-2 order-md-1">
                <p>PT AISIN INDONESIA is a renowned automotive manufacturer that specializes in producing various
                  essential
                  components such as Clutch Cover, Clutch Disc, Door Lock, Door Frame, Door Hinge, Door Handle, Hood Lock,
                  Hybrid Damper, Intake Manifold, and Cover Head Cylinder. Our company is dedicated to delivering
                  high-quality
                  products that contribute to the comfort and safety of drivers. We take pride in supporting car makers by
                  providing them with valuable solutions for an enhanced driving experience.</p>
              </div>
              <div class="col-md-6 d-flex align-items-center mb-4 mb-md-0 order-1 order-md-2">
                <img src="http://aisin-web-revamp.test/website/img/aii.png" alt="" class="img-fluid w-100 h-100">
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
