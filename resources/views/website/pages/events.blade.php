@extends('website.layouts.master')
@section('title', 'Events')
@section('pages')
  <div class="mainContents">
    <div class="pageHeader">
      <h1 class="pageTtl">Event</h1>

      <section class="noticeSection" id="notice">
        <div class="inner">

          <div class="baseBlock">
            <div class="intro">
              <div class="contentSection">
                <h3 class="headStyle07">1. Argoforestry</h3>
                <table class="tableStyle01">
                  <tbody>
                    <tr>
                      <th></th>
                      <td><img src="{{ asset('website/img/home/events/argoforestry.jpg') }}" alt=""
                          width="350">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
