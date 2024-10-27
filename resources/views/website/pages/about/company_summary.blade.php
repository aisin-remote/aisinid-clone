@extends('website.layouts.master')
@section('title', 'Company Summary')
@section('pages')
  <div class="mainContents">
    <div class="pageHeader">
      <h1 class="pageTtl">Company Profile</h1>
      <section class="noticeSection" id="notice">
        <div class="baseBlock">
          <div class="box">
            <table class="tableStyle01">
              <tbody>
                @foreach ($data as $item)
                  <tr>
                    <th>{{ $item->title }}</th>
                    <td>{{ $item->content }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
