@extends('website.layouts.master')
@section('title', 'Top Management Message')
@section('pages')
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/banner-executive-aii.jpg') }}" title="About"
      subtitle="Message from Top Management" dateUpdate="Update (January 10, 2025)" />
    <div class="main-container">
      <div class="row mb-5">
        <h1 class="text-center fw-bold" style="color: #001A72;letter-spacing: 0.5rem;">" COLLABORATION, INNOVATION "</h1>
      </div>
      <div class="row justify-content-center mb-5">
        <img src="{{ asset('website/img/home/executives/presdir.png') }}" alt="President Director" class="img-fluid"
          style="width: 300px">
      </div>
      <div class="row p-3">
        <p>
          The challenges and uncertainties we will face in 2025/2026 are becoming increasingly significant, making it
          essential to consistently strengthen and foster the harmonization of mindsets, active participation from all
          members, synergy, and cross-functional collaboration. <br><br>
        </p>
        <p>
          Our primary focus [PT AISIN Indonesia and PT AISIN Indonesia Automotive] is on improving efficiency and
          eliminating wasteful operations [TPS.3Pillar], thereby enhancing the competitiveness of each product. This can
          be achieved through collaboration and integration across all functions [Slim Organization]. We must optimize the
          resources available to us and implement extraordinary activities to achieve the desired level of
          competitiveness. <br><br>
        </p>
        <p>
          SDGs and Carbon Neutral initiatives must be further enhanced in line with the programs we have planned, aligning
          with future business conditions, including a 50% reduction in emissions by 2030. <br><br>
        </p>
        <p>
          We are embarking on digitalization across all areas to streamline tasks, improve inter-departmental integration,
          and facilitate cross-functional accessibility. This approach will eliminate duplicate data entries, ensuring
          data is consistently retrieved from available sources [while adhering to ATSG regulations]. <br><br>
        </p>
        <p>
          Developing human resources and preparing future leaders are crucial for cultivating a corporate culture that
          thrives amidst rapid changes. Education alone is not sufficient; adequate training must be conducted at all
          levels. This will foster a sense of ownership and belonging among all employees, enabling them to navigate
          dynamic business environments and overcome challenges. <br><br>
        </p>
        <p>
          Let us showcase our capabilities in making this company highly competitive, with speed and agility, to emerge as
          winners in every opportunity and establish ourselves as an irreplaceable supplier. <br><br>
        </p>
        <p class="fw-bold">
          Mr. PB Ariawan Purwonugroho<br>
          President Director
        </p>
        <p class="text-body-secondary">(Reference to President's Letter in 2025)</p>
      </div>
    </div>
  </div>
@endsection
