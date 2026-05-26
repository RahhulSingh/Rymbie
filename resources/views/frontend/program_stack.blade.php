@extends('partials.app')
@section('title', 'Program Stack')
@section('content')
  <section class="how_work_section">
    <div class="container">
      <div class="academic_services_box">
        <h1>Affiliate & Partnership Opportunities</h1>
        <p>Join the Rymbie Affiliate & Partnership Program.</p>
        <p>Earn rewards for referrals, build collaborations, and grow with us.</p>
      </div>
    </div>
  </section>
  <section class="Study_hacks_section">
    <div class="container">
      <div class="row align-items-center">
        <!-- LEFT CONTENT -->
        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
          <div class="partner_content">
            <h2>Why Partner With Us?</h2>
            <ul>
              <li>
                <i class="fa-solid fa-check"></i>
                Generous commission structure for affiliates
              </li>

              <li>
                <i class="fa-solid fa-check"></i>
                Long-term business collaboration opportunities
              </li>

              <li>
                <i class="fa-solid fa-check"></i>
                Support from our dedicated partnership team
              </li>

              <li>
                <i class="fa-solid fa-check"></i>
                Access to exclusive marketing resources
              </li>
            </ul>

          </div>

        </div>

        <!-- RIGHT IMAGE -->
        <div class="col-12 col-md-6 col-lg-6 col-xl-5">

          <div class="partner_image">
            <img src="{{asset('assets/frontend/images/i-removebg-preview.png')}}" alt="Partner Image">
          </div>

        </div>

      </div>

    </div>
  </section>
  <section class="Study_hacks_section">
    <div class="container">
      <div class="partner_content">

        <h2>Affiliate Program Details</h2>
      </div>
      <div class="row align-items-center">

        <div class="col-12 col-md-6 col-lg-6 col-xl-6">

          <div class="partner_content">
            <ul class="details_box">
              <li>
                <div class="dotshyr">

                </div>
                Generous commission structure for affiliates
              </li>

              <li>
                <div class="dotshyr">

                </div>
                Long-term business collaboration opportunities
              </li>

              <li>
                <div class="dotshyr">

                </div>
                Support from our dedicated partnership team
              </li>

              <li>
                <div class="dotshyr">

                </div>
                Access to exclusive marketing resources
              </li>
            </ul>

          </div>

        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-5">
          <div class="partner_content">
            <ul class="details_box">
              <li>
                <div class="dotshyr">
                </div>
                Generous commission structure for affiliates
              </li>

              <li>
                <div class="dotshyr">

                </div>
                Long-term business collaboration opportunities
              </li>


            </ul>

          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="academic_services_section">
    <div class="container">
      <div class="simple_procese_text mb-4">
        <h2> Pertnership Opportunoties
        </h2>
      </div>
      <div class="row">
        <div class="col-6 col-md-3">
          <div class="process_boxsest mt-4">
            <div class="process_icon affiliatenbox">
              <img src="images/affiliatenone1.png" width="100%" alt="">
            </div>
            <h3>Apply Online </h3>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="process_boxsest mt-4">
            <div class="process_icon affiliatenbox">
              <img src="images/affiliatentrue2.png" width="100%" alt="">
            </div>

            <h3>Get Approved</h3>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="process_boxsest mt-4">
            <div class="process_icon affiliatenbox">
              <img src="images/affiliatentrue3.png" width="100%" alt="">
            </div>
            <h3>Start Promoting </h3>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="process_boxsest regular_box mt-4">
            <div class="process_icon affiliatenbox">
              <img src="images/affiliatenfour4.png" width="100%" alt="">
            </div>
            <h3>Earn Rewards </h3>
          </div>
        </div>
      </div>
      <div class="button-wrapper">
        <a href="#" class="custom-btn affiliate-btn">
          Become an Affiliate
        </a>

        <a href="#" class="custom-btn partnership-btn">
          Apply for Partnership
        </a>
      </div>

    </div>
  </section>
@endsection