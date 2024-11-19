@extends('website.layouts.master')
@section('title', 'Top Management Message')
@section('pages')
  <div class="mainContents">
    <x-banner image="{{ asset('website/img/about/banner-core-value.jpg') }}" title="About" subtitle="Company Core Value" />
    <div class="main-container">
      <div class="row justify-content-center mb-5">
        <img src="{{ asset('website\img\logo\satu-aisin-final.png') }}" alt="Satu AISIN" class="img-fluid"
          style="width: 500px">
      </div>
      <div class="row p-3">
        <p>
          Our mission at AISIN is to drive economic growth, create meaningful employment opportunities, and cultivate top
          talent. At the heart of this mission are our Core Values, which serve as the foundation and unifying force of
          our company culture, enabling sustainable performance improvement. Every member of our organization—from the
          Board of Directors to our dedicated employees—is encouraged to embrace and embody these values sincerely and
          consistently. By embedding these Core Values into daily actions, we shape a work culture that thrives on
          integrity, accountability, and continuous growth, as outlined in our Core Values guidelines. <br><br>
        </p>
        <h1 class="p-3">Core Value</h1>
        <h3 class="primary-title">1. Trusworthy and Reliable</h3>
        <p>
          "Building trust through reliability is fundamental to our mission. At AISIN, we take pride in being a dependable
          partner, ensuring that our commitments are met with integrity and consistency. By prioritizing transparency and
          accountability, we create relationships rooted in trust, where our customers and partners can rely on us to
          deliver quality and support. This unwavering commitment to trustworthiness and reliability not only defines our
          work but also strengthens the foundation of our success." <br><br>
        </p>
        <h3 class="primary-title">2. Customer Focus</h3>
        <p>
          "Our dedication to teamwork stems from a single purpose: creating exceptional value for our customers. At Aisin,
          collaboration isn’t just a process—it’s the core of how we achieve excellence. By combining trust, mutual
          respect, and a unified vision, we bring out the best in every team member to surpass customer expectations. This
          synergy fuels innovation, tackles challenges head-on, and ensures that every solution reflects our unwavering
          commitment to quality. Together, we don’t just deliver results—we build a stronger, more connected organization
          that thrives on serving you better every day." <br><br>
        </p>
        <h3 class="primary-title">3. Passion for Excellence</h3>
        <p>
          "We are driven by an unwavering passion for excellence in everything we do. This dedication inspires us to
          continuously raise our standards, refine our skills, and push beyond boundaries to deliver outstanding results.
          With a commitment to quality, precision, and innovation, we ensure that every effort reflects our pursuit of the
          highest standards. Our passion for excellence is more than a goal; it’s a defining principle that fuels our
          growth and strengthens the trust of those we serve." <br><br>
        </p>
        <h3 class="primary-title">4. Teamwork</h3>
        <p>
          "Our commitment to teamwork is driven by a shared goal: delivering the best for our customers. By working
          together with trust, respect, and shared purpose, we harness each member’s strengths to meet and exceed customer
          needs. This collaborative approach not only allows us to innovate and solve challenges effectively but also
          ensures that every outcome is aligned with our dedication to quality and customer satisfaction. Through
          teamwork, we build a resilient organization that thrives on delivering exceptional service and value to those we
          serve." <br><br>
        </p>
        <h3 class="primary-title">5. Harmony with society and Nature</h3>
        <p>
          "We are committed to creating a positive impact by living in harmony with society and nature. Recognizing our
          responsibility to the communities we serve and the environment we share, we strive to make sustainable choices
          that benefit both people and the planet. Through ethical practices, resource conservation, and community
          engagement, we seek to build a future where progress and preservation go hand in hand. Our dedication to harmony
          reflects our belief that a thriving business contributes to a healthier society and a sustainable world."
          <br><br>
        </p>
        <h3 class="primary-title">6. Continuous process of Improvement</h3>
        <p>
          "Embracing the spirit of continuous improvement, we see every challenge as an opportunity to grow and excel.
          Guided by the principles of kaizen (incremental improvement), genchi (going to the source), genbutsu (seeing the
          actual facts), and gennin (focusing on root causes), we strive to make meaningful, lasting advancements in every
          aspect of our work. This approach empowers us to drive progress systematically, ensuring that each improvement,
          no matter how small, contributes to a culture of excellence. By meeting challenges with determination and
          precision, we build a foundation for innovation and sustainable success." <br><br>
        </p>
      </div>
    </div>
  </div>
@endsection
