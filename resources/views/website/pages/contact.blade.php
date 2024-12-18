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
  @if ($errors->any())
    <script>
      Swal.fire({
        title: 'Validation Error',
        html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
        icon: 'error',
        confirmButtonText: 'OK'
      });
    </script>
  @endif

  @if (session('success'))
    <script>
      Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.reload();
        }
      });
    </script>
  @endif

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
          @csrf
          <div class="row">
            <h2 class="fw-medium">Contact Us</h2>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="border-top border-dark-subtle my-4"></div>
            </div>
          </div>
          <form action="{{ route('contact-us') }}" id="contactForm" method="POST" enctype="multipart/form-data"> @csrf
            <!-- Your form fields here -->
            <div class="row mt-3">
              <div class="col-md-2 mb-4">
                <label for="title" class="form-label">Title</label>
                <select class="form-select-lg form-select" id="title" aria-label="Your Title" name="title" required>
                  <option selected value="">Select your title</option>
                  <option value="Mr." {{ old('title') == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                  <option value="Ms." {{ old('title') == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                </select>
              </div>
              <div class="col-md-5 mb-4">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control form-control-lg" id="firstName"
                  placeholder="Enter your first name" name="first_name" value="{{ old('first_name') }}" required>
              </div>
              <div class="col-md-5 mb-4">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control form-control-lg" id="lastName" required
                  placeholder="Enter your last name" name="last_name" value="{{ old('last_name') }}">
              </div>
              <div class="col-md-7 mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter your email"
                  required name="email" value="{{ old('email') }}">
              </div>
              <div class="col-md-5 mb-4">
                <label for="country" class="form-label">Country</label>
                <select class="form-select-lg form-select" id="country" aria-label="Your Country" name="country"
                  required>
                  <option selected>Select your country</option>
                  <option value="Indonesia" {{ old('country') == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                  <option value="Japan" {{ old('country') == 'Japan' ? 'selected' : '' }}>Japan</option>
                </select>
              </div>
              <div class="col-md-12 mb-4">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control form-control-lg" id="subject" placeholder="Enter your subject"
                  required name="subject" value="{{ old('subject') }}">
              </div>
              <div class="col-md-12 mb-4">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control form-control-lg" id="message" placeholder="Enter your message here ..."
                  rows="8" required name="message">{{ old('message') }}</textarea>
              </div>
            </div>
            <div class="row">
              <div class="form-group mt-4 mb-4 d-md-flex justify-content-md-end">
                @error('g-recaptcha-response')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="g-recaptcha" data-sitekey="{{ config('captcha.recaptcha_sitekey') }}" data-action="LOGIN"></div>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end"> <button type="submit"
                  class="btn btn-primary btn-lg me-md-2" type="button">Submit
                  <i class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  @endsection
