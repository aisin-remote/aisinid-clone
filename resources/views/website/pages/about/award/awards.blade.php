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
              <div id="{{ Str::slug($category) }}" class="row d-flex flex-wrap justify-content-center">
                @foreach ($awards as $index => $award)
                  <div data-award="{{ json_encode($award) }}"
                    class="product-item col-sm-6 col-md-6 col-lg-4 mb-5 d-flex justify-content-center {{ $index >= 6 ? 'd-none' : '' }}"
                    style="cursor: pointer">
                    <x-misc-item :picture="$award->picture" :title="$award->name" :border="true" />
                  </div>
                @endforeach
              </div>
              @if (count($awards) > 6)
                <div class="d-flex justify-content-end">
                  <a href="javascript:void(0);" onclick="loadMore('{{ Str::slug($category) }}')" class="show-more">Show
                    More</a>
                </div>
              @endif
            </section>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <x-simple-modal modalName="awardModal" />
@endsection

@section('scripts')
  <script>
    function loadMore(category) {
      const $items = $(`#${category} .d-none`);
      $items.removeClass('d-none');
      $('.show-more').remove();
    }

    $(document).ready(function() {
      $('.product-item').on('click', function(e) {
        e.preventDefault();

        const award = $(this).data('award');

        // Update modal content
        $('#itemTitle strong').text(award.name);
        $('#itemDescription').html(award.description);

        $('#awardModal').modal({
          backdrop: true,
          focus: false
        }).modal('show');
      });
    })
  </script>
@endsection
