@extends('website.layouts.master')
@section('title', $subtitle . ' - Product')
@section('pages')
  <div class="mainContents">
    <div class="mainContents">
      <x-banner :image="$banner" title="Product" :subtitle="$subtitle" />
      <div class="main-container">
        <div class="row">
          <x-custom-breadcrumbs :breadcrumbs="$breadcrumbs" />
        </div>
        <div class="row">
          <h2 class="fw-medium">{{ $subtitle }}</h2>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="border-top border-dark-subtle my-4"></div>
          </div>
        </div>
        <div class="row">
          <section class="company-summary" style="padding: 3rem 1rem 5rem;">
            <div class="row d-flex flex-wrap justify-content-center">
              @foreach ($products as $index => $product)
                <div data-id="{{ $index }}" data-product="{{ json_encode($product) }}"
                  class="product-item col-sm-6 col-md-6 col-lg-4 mb-5 d-flex justify-content-center"
                  style="cursor: pointer">
                  <x-misc-item :picture="$product->picture" :title="$product->name" />
                </div>
              @endforeach
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <x-product-modal />
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      $('.product-item').on('click', function() {
        $('#productModal').modal('show');
        const id = $(this).data('id');
        const product = $(this).data('product');
        console.log(id, product);
        $('#productTitle').text(product.name)
        $('#productPicture').attr('src', product.picture)
        $('#productCategory').text('{{ $subtitle }}')
        $('#productDescription').html(product.description)
        $('#productManufacturer').text(product.manufacturer)
      })
    })
  </script>
@endsection
