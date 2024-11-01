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
    <div class="mainContents">
      <x-banner image="{{ $banner }}" title="About" subtitle="{{ $subtitle }}" />
      <div class="main-container">
        @foreach ($contacts as $contact)
          <div class="row mb-5">
            <div class="col-md-12 col-lg-6">
              <div class="row">
                <h2 class="fw-medium">{{ $contact->title }}</h2>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="border-top border-dark-subtle my-4"></div>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-12">
                  <ul class="list-group">
                    <li class="list-group-item d-flex gap-3">
                      <i class="bi bi-telephone-fill"></i>
                      <label class="form-check-label">{{ $contact->phone }}</label>
                    </li>
                    <li class="list-group-item d-flex gap-3">
                      <i class="bi bi-pin-map-fill"></i>
                      <label class="form-check-label">{{ $contact->address }}</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex justify-content-end">
              <iframe src="{{ $contact->map }}" width="90%" height="250" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        @endforeach

        <div class="contact-form-container mt-5">
          <div class="row">
            <h2 class="fw-medium">Contact Us</h2>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="border-top border-dark-subtle my-4"></div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-2 mb-4">
              <label for="title" class="form-label">Title</label>
              <select class="form-select-lg form-select" id="title" aria-label="Your Title" name="title">
                <option selected>Select title</option>
                <option value="1">Mr.</option>
                <option value="2">Ms.</option>
              </select>
            </div>
            <div class="col-md-5 mb-4">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control form-control-lg" id="firstName" placeholder="John" name="first_name">
            </div>
            <div class="col-md-5 mb-4">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control form-control-lg" id="lastName" placeholder="Doe" name="last_name">
            </div>
            <div class="col-md-7 mb-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control form-control-lg" id="email" placeholder="name@example.com" name="email">
            </div>
            <div class="col-md-5 mb-4">
              <label for="country" class="form-label">Country</label>
              <select class="form-select-lg form-select" id="country" aria-label="Your Country" name="country">
                <option selected>Select country</option>
                <option value="1">Indonesia</option>
                <option value="2">Japan</option>
              </select>
            </div>
            <div class="col-md-12 mb-4">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control form-control-lg" id="subject" placeholder="Your subject" name="subject">
            </div>
            <div class="col-md-12 mb-4">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control form-control-lg" id="message" placeholder="Write your message here ..." rows="8" name="message"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
