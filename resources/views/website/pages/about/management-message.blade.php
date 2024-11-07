@extends('website.layouts.master')
@section('title', 'Top Management Message')
@section('pages')
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/banner-message-from-top.jpg') }}" title="About"
      subtitle="Message from Top Management" />
    <div class="main-container">
      <div class="row mb-5">
        <h1 class="text-center fw-bold" style="color: #001A72;letter-spacing: 0.5rem;">" INNOVATION, COLLABORATION "</h1>
      </div>
      <div class="row justify-content-center mb-5">
        <img src="{{ asset('website/img/home/executives/presdir.png') }}" alt="President Director" class="img-fluid"
          style="width: 300px">
      </div>
      <div class="row p-3">
        <p>
          The challenges and level of uncertainty that we will face in 2024 will be bigger and higher, so we must
          continue to strengthen and build harmonization of mindsets, participation of all members, synergy and
          collaboration between functions. <br><br>
        </p>
        <p>
          Our focus [AII-AIIA] is how we improve efficiency and eliminate young operations [TPS, 3 Pillars] so as to
          increase competitiveness in each product. This can be achieved by collaborating and integrating all existing
          functions [Slim Organization]. We optimally use the resources available to us and carry out extra ordinary
          [Change Mindset] activities so that we can increase the expected competitiveness. <br><br>
        </p>
        <p>
          SDGs and Carbon Neutral activities need to be increased in accordance with the programs we have planned and
          in line with the business situation. <br><br>
        </p>
        <p>
          We are starting digitalization in all areas to make work easier, integration between parts and easier access
          between functions [No Barrier]. There is no duplicate data procurement, it can be taken from available
          sources. <br><br>
        </p>
        <p>
          Resource development is important to form a company culture that is able to compete with rapidly changing
          situations. It is not enough just to provide education, but adequate training must be carried out at all
          levels. So that the sense of belonging to the company can grow and develop in all employees and this company
          will become stronger in facing challenges that are not easy and fast. <br><br>
        </p>
        <p class="fw-bold">
          Mr. PB Ariawan Purwonugroho<br>
          President Director
        </p>
      </div>
    </div>
  </div>
@endsection
