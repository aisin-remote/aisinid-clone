@extends('website.layouts.master')
@section('title', 'Company History')
@section('pages')
  <div class="mainContents">
    <div class="pageHeader">
      <h1 class="pageTtl">Company History</h1>

      <section class="noticeSection" id="notice">
        <div class="inner">

          <!-- Page Content -->
          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12 pull-left">
                  <div class="pull-left">
                    <h1 data-aos="fade-up" data-aos-duration="900" data-aos-delay="100" data-aos-once="true">
                      {{ $profile->title }}
                    </h1>
                    <p style="color:#3E3D3D;font-size:18px;" data-aos="fade-up" data-aos-delay="700"
                      data-aos-duration="700" data-aos-once="true">
                      {{ $profile->content }}
                    </p><br><br>
                  </div>
                </div>
              </div>
            </div>

            <div id="history">
              <div class="container-fluid">
                <h1 class="blockTtl">
                  COMPANY HISTORY
                </h1>
                <div class="row">
                  <div class="col-md-12">
                    <ul>
                      @foreach ($history as $item)
                        <li>
                          <div style="background-color: #405D72; padding: 10px;">
                            <a><i class="fa fa-circle invert" style="font-size:15px; color: #071952;"></i></a>
                          </div>
                          <div style="margin-left: 30px;">
                            <h2 style="font-style:italic; color: #939185;"> {{ $item->year }} </h2>
                            <h4 style="color:#071952;"> {{ $item->title }} </h4>
                            <hr style="border-color: #000; margin: 10px 0;">
                            <div class="row">
                              <div class="col-md-6 center-img">
                                <img src="{{ asset($item->picture) }}" alt="" width="350">
                              </div>
                              <div class="col-md-6">
                                <p style="margin:10px 0;">{{ $item->description }}</p>
                              </div>
                            </div>
                          </div>
                        </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
    </div>
  </div>
@endsection
