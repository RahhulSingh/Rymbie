@extends('partials.app')
@section('title', 'Refund Policy')
@section('content')
  <section class="get_in_touch_section trams_conditions">
    <div class="container">
      <div class="get_intuch_box">
        <h1 class="">Refund Policy</h1>
        <p>"Fair and Transparent Refund Guidelines at Rymbie."</p>
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
            At Rymbie we strive to provide high-quality academic support services.
            However we understand that there may be circumstances where a refund
            is requested. This Refund Policy outlines the conditions under which
            refunds may be granted.
          </p>
        </div>

        <!-- ITEM -->
        <div class="terms_card">
          <h2>Eligibility for Refunds</h2>

          <p>
            Refunds will not be provided in the following cases:
          </p>

          <ul>
            <li>
              <strong>Duplicate Payment</strong><br>
              If the user cancels within X hours of the same order.
            </li>

            <li>
              <strong>Order Cancellation</strong><br>
              If the user cancels within hours of placing the order
              (before work has started).
            </li>

            <li>
              <strong>Service Not Delivered</strong><br>
              If the service was not delivered due to Rymbie’s fault.
            </li>
          </ul>
        </div>

        <!-- ITEM -->
        <div class="terms_card">
          <h2>Non-Refundable Cases</h2>

          <p>
            Refunds will not be provided if:
          </p>

          <ul>
            <li>Work has already been delivered</li>

            <li>
              If the requested but not completed, and the user requests cancellation
            </li>

            <li>Only a portion of the services were delivered</li>
          </ul>
        </div>

        <!-- ITEM -->
        <div class="terms_card">
          <h2>Partial Refunds</h2>

          <p>
            Partial refunds may be considered if:
          </p>

          <ul>
            <li>
              Work has been started but not completed,
              and user requests cancellation
            </li>

            <li>
              Only a portion of the services were delivered
            </li>
          </ul>
        </div>

        <!-- ITEM -->
        <div class="terms_card">
          <h2>Contact for Refunds</h2>
          <p>
            <strong>Email:</strong> refunds@rymbie.com
          </p>
          <p>
            Or via Contact Form on our website.
          </p>
        </div>
        <div class="text-center">
          <a href="{{route('home')}}" class="register_btnsrt_dantbg">
            Back to Homepage
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection