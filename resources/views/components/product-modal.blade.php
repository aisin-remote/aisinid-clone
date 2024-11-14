<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="{{ '$id' }}Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button style="right:0" type="button" class="position-absolute me-4 mt-2 pull-right btn-close" data-bs-dismiss="modal"
          aria-label="Close"></button>
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
