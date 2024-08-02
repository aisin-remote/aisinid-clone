@extends('website.layouts.master')
@section('title', 'Job Opportunities')
@section('pages')
  <div class="mainContents">
    <div class="pageHeader">
      <h1 class="pageTtl">Job Opportunities</h1>
      <section class="noticeSection" id="notice">
        <div class="inner">

          <div class="baseBlock">
            <div class="intro">
              @foreach ($data as $item)
                <div class="contentSection">
                  <h2 class="blockTtl">{{ $item->title }}</h2>
                  <table class="tableStyle01">
                    <tbody>
                      <tr>
                        <th>
                          <p class="blockTtl">Job Description</p>
                        </th>
                        <td>
                          <ul>
                            @foreach ($item->description as $description)
                              <li>• {{ $description }}</li><br>
                            @endforeach
                          </ul>
                        </td>
                      </tr>

                      <tr>
                        <th>
                          <p class="blockTtl">Requirement</p>
                        </th>
                        <td>
                          <ul>
                            @foreach ($item->requirements as $requirement)
                              <li>• {{ $requirement }}</li><br>
                            @endforeach
                          </ul>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              @endforeach
            </div><!-- /intro -->
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
