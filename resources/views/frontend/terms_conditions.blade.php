@extends('partials.app')
@section('title', 'Terms & Conditions')
@section('content')
  <section class="get_in_touch_section trams_conditions">
    <div class="container">
      <div class="get_intuch_box">
        <h1>Terms & Conditions</h1>
      </div>
    </div>
  </section>
  <section class="terms_conditions_section">
    <div class="container">
      <div class="terms_content">

        <!-- ITEM -->
        <div class="terms_card">
          <h2>Introduction</h2>

          <p>
            Welcome to Rymbie. By using our website and services, you agree
            to comply with and be bound by the following terms and conditions.
          </p>
        </div>

        <!-- ITEM -->
        <div class="terms_card">
          <h2>Definitions</h2>

          <ul>
            <li>“We/Us/Our” refers to Rymbie.</li>

            <li>
              “User/You/Your” refers to anyone using the website or services.
            </li>

            <li>
              “Services” refers to assignments, dissertations, AI study tools, etc.
            </li>
          </ul>
        </div>

        <!-- ITEM -->
        <div class="terms_card">
          <h2>Use of Services</h2>

          <ul>
            <li>Users must be at least 18+ or have lawful guardian consent.</li>

            <li>
              Services are for reference and educational assistance only.
            </li>

            <li>
              Resale or redistribution of work is strictly prohibited.
            </li>
          </ul>
        </div>

        <!-- ITEM -->
        <div class="terms_card">
          <h2>User Responsibilities</h2>

          <ul>
            <li>Provide accurate information during registration.</li>

            <li>Maintain confidentiality of login ID.</li>
          </ul>
        </div>

        <!-- ITEM -->
        <div class="terms_card">
          <h2>Payment & Refund Policy</h2>

          <ul>
            <li>
              All materials are property of Rymbie.
            </li>

            <li>
              User will remain responsible for proper use of services.
            </li>
          </ul>
        </div>

        <!-- ITEM -->
        <div class="terms_card">
          <h2>Confidentiality & Privacy</h2>

          <ul>
            <li>Commitment to protecting user data.</li>

            <li>Reference to the Privacy Policy.</li>
          </ul>
        </div>

        <!-- ITEM -->
        <div class="terms_card">
          <h2>Limitation of Liability</h2>

          <ul>
            <li>
              Rymbie holds no responsibility for submitted work usage.
            </li>

            <li>
              No guarantee of academic results or outcomes.
            </li>
          </ul>
        </div>

        <!-- ITEM -->
        <div class="terms_card">
          <h2>Modifications to Terms</h2>

          <p>
            Requests on compatibility or updates may be revised at any time.
          </p>
        </div>

      </div>
      <div class="text-center">
        <a href="{{route('home')}}" class="register_btnsrt ">
          Back to Homepage
        </a>
      </div>
    </div>
  </section>
 @endsection