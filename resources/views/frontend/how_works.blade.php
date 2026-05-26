@extends('partials.app')
@section('title', 'How Works')
@section('content')

  <section class="how_work_section">
    <div class="container">
      <div class="academic_services_box">
        <h1>How Rymbie Works</h1>
        <p>Your academic success in just a few simple steps. We’ve made the process fast, simple, transparent, and
          completely stress-free for students.</p>
      </div>
      <div class="get_started_box">
        <div class="ready_started_content">
          <h2>Ready to Get Started?</h2>
          <p>
            Get professional academic help from trusted experts and complete your
            assignments stress-free with Rymbie.
          </p>
        </div>
      </div>
      <div class="row assignments_title">
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <div class="submit_request_card mt-4">
            <div class="submit_request_icon">
              <img src="{{asset('assets/frontend/images/dawn.svg')}}" alt="">
            </div>
            <h2>Submit Request</h2>
            <p>
              Upload your assignment brief, dissertation topic,
              or academic requirements with deadline and instructions.
            </p>

          </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <div class="submit_request_card mt-4">
            <div class="submit_request_icon">
              <img src="{{asset('assets/frontend/images/get.svg')}}" alt="">
            </div>
            <h2>Get a Quote</h2>
            <p>
              Our team reviews your work and shares a fair price. Confirm your order with secure payment.
            </p>

          </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <div class="submit_request_card mt-4">
            <div class="submit_request_icon">
              <img src="{{asset('assets/frontend/images/workin.svg')}}" alt="">
            </div>
            <h2>Work in Progress</h2>
            <p>
              An expert writer starts working on your task. Track updates and communicate anytime.
            </p>

          </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <div class="submit_request_card mt-4">
            <div class="submit_request_icon">
              <img src="{{asset('assets/frontend/images/delarybary.svg')}}" alt="">
            </div>
            <h2>Delivery & Revision</h2>
            <p>
              Receive your completed work before the deadline with free revisions included for perfection.
            </p>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="works_best_section">
    <div class="container">
      <div class="simple_procese_text">
        <h2> Why This Works Best
        </h2>
      </div>
      <div class="row">
        <div class="col-6 ">
          <div class="feature_itemsdr">
            <i class="fa-solid fa-circle-check"></i>
            <span>Fast turnaround time
            </span>
          </div>

          <div class="feature_itemsdr">
            <i class="fa-solid fa-circle-check"></i>
            <span>Plagiarism-free writing
            </span>
          </div>

          <div class="feature_itemsdr">
            <i class="fa-solid fa-circle-check"></i>
            <span>Expert writers in multiple subects
            </span>
          </div>
        </div>
        <div class="col-6">
          <div class="feature_itemsdr">
            <i class="fa-solid fa-circle-check"></i>
            <span>Fast turnaround time
            </span>
          </div>

          <div class="feature_itemsdr">
            <i class="fa-solid fa-circle-check"></i>
            <span>100% confidential & secure</span>
          </div>


        </div>
      </div>
      <a href="{{route('frontend.faq')}}" class="register_btnsrt">
        Get Help Now
      </a>
    </div>


  </section>
@endsection