@extends('website.layouts.master')
@section('title', 'test')
@section('pages')
  <style>
    #paper {
      width: 70%;
      height: 600px;
      border: 1px solid #ccc;
      float: right;
      margin: 20px;
    }

    #toolbox {
      width: 25%;
      float: left;
      margin: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
    }

    .tool {
      cursor: pointer;
      padding: 10px;
      margin: 10px;
      border: 1px solid #ccc;
      text-align: center;
      background-color: #fff;
    }

    .tool:hover {
      background-color: #e0e0e0;
    }
  </style>
  <div class="mainContents">
    <div class="pageHeader">
      <h1 class="pageTtl">Message from Top Management</h1>

    </div>
    <div class="pageHeader">
      <h1 class="pageTtl">Message from Top Management</h1>

    </div>
    <div class="pageHeader">
      <h1 class="pageTtl">Message from Top Management</h1>

    </div>
    <div class="pageHeader">
      <h1 class="pageTtl">Message from Top Management</h1>

    </div>
    <div class="pageHeader">
      <h1 class="pageTtl">Message from Top Management</h1>

    </div>
    <div class="pageHeader">
      <h1 class="pageTtl">Message from Top Management</h1>

    </div>
    <div type="button" class="btn btn-primary aaa">
      Launch demo modal
    </div>

    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="{{ '$id' }}Label"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <button style="right:0" type="button" class="position-absolute me-4 mt-2 pull-right btn-close"
              data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="d-lg-flex flex-lg-row flex-sm-column p-5 p-lg-3 border border-dark-subtle">
              <div class="col-lg-5 mb-5 mb-lg-0 d-flex justify-content-center align-items-center">
                <div class="row">
                  <img id="productPicture" alt="" style="width: 280px; height: 280px; object-fit: contain;">
                </div>
              </div>
              <div class="col-lg-7 py-2 d-flex flex-column">
                <div class="row flex-column gap-3">
                  <h5 class="fst-italic text-muted" id="productCategory"></h5>
                  <h1 class="fw-bold" style="color: #001A73" id="productTitle"></h1>
                  <div class="row">
                    <div class="col-12">
                      <div class="border-top border-dark-subtle my-1"></div>
                    </div>
                  </div>
                  <p class="mb-5" id="productDescription"></p>
                </div>
                <div class="d-flex gap-3 mt-auto">
                  <p class="py-4 px-3 bg-body-secondary fw-medium">Manufacturer</p>
                  <p class="py-4 px-2" id="productManufacturer"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" id="popo">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      let scrollPosition;

      $('.aaa').on('click', function() {
        scrollPosition = window.pageYOffset;
        console.log(scrollPosition);

        // const id = $(this).data('id');
        // const product = $(this).data('product');

        // Update modal content

        $('#productModal').modal('show')
      });

      $('#productModal').on('shown.bs.modal', function() {
        $('.aaa').focus();
      }).on('hidden.bs.modal', function() {
        window.scrollTo(0, scrollPosition);
      })

      $('#popo').on('click', function() {
        $('#exampleModal').modal('show')
      })
    })
  </script>
@endsection
