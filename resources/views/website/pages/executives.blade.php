@extends('website.layouts.master')
@section('title', 'Executives')
@section('pages')
  <div class="mainContents">
    <div class="pageHeader">
      <h1 class="pageTtl">Executives</h1>
      <section class="noticeSection" id="notice">
        <div class="inner">
          <div class="baseBlock">
            <div class="intro">
              @foreach ($data as $category)
                <div class="contentSection">
                  <h2 class="blockTtl">{{ $category->category }}</h2>
                  @php
                    $positions = array_unique(array_column($category->members, 'position'));
                  @endphp
                  @foreach ($positions as $position)
                    <h3 class="listTtl">{{ $position }}</h3>
                    <table class="tableStyle01">
                      <tbody>
                        @php $counter = 0; @endphp
                        @foreach ($category->members as $member)
                          @if ($member->position === $position)
                            @if ($counter % 4 == 0)
                              <tr>
                            @endif
                            <th>
                              <img src="{{ asset($member->picture) }}" alt="{{ $member->name }}" width="200">
                              <p class="name">{{ $member->name }}</p>
                            </th>
                            @php $counter++; @endphp
                          @endif
                        @endforeach
                        @if ($counter % 4 != 0)
                          </tr>
                        @endif
                      </tbody>
                    </table>
                  @endforeach

                </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
