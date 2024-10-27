@extends('website.layouts.master')
@section('title', 'Product - Drive Train')
@section('pages')
  <div class="mainContents">
    <div class="pageHeader">
      <h1 class="pageTtl">Drive Train</h1>

      <section class="noticeSection" id="notice">
        <div class="inner">
          <div class="productContent">
            <div class="imgTxtVox" style="display: flex; align-items: flex-start; margin-bottom: 20px;">
              <figure class="img" style="margin-right: 20px;">
                <img src="website/img/home/products/drivetrain-clutchdisc.jpg" alt="" width="350">
              </figure>
              <div class="txt">
                <h3 class="headStyle01">1 CLUTCH DISC</h3>
                <ul class="listStyle02">
                  <li>Automotive part that pressed against the flywheel to transmit the engine power to the input shaft.
                  </li><br>
                </ul>

                <h6 class="headStyle08">Detail Function :</h6>
                <ul class="listIcon">
                  <li class="is-hev-phev">- Enhances engagement and release performance,</li>
                  <li class="is-hev-phev">- Ensure low twisting rigidity to reduce noise, vibration, and harshnessd</li>
                </ul>
              </div>
            </div><!-- /imgTxtVox -->

            <div class="imgTxtVox" style="display: flex; align-items: flex-start; margin-bottom: 20px;">
              <figure class="img" style="margin-right: 20px;">
                <img src="website/img/home/products/drivetrain-clutchcover.jpg" alt="" width="350">
              </figure>
              <div class="txt">
                <h3 class="headStyle01">2 CLUTCH COVER</h3>
                <ul class="listStyle02">
                  <li>Automotive part that manipulates the pressure plate and presses it against the clutch disc.</li><br>
                </ul>

                <h6 class="headStyle08">Detail Function :</h6>
                <ul class="listIcon">
                  <li class="is-hev-phev">- Stabilizes performance of the diaphragm spring</li>
                  <li class="is-hev-phev">- Improves release of pressure plate</li>
                  <li class="is-hev-phev">- Higher load capacity</li>

                </ul>
              </div>
            </div><!-- /imgTxtVox -->
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
