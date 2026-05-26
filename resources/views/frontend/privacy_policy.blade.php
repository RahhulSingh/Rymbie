@extends('partials.app')
@section('title', 'Privacy Policy')
@section('content')
  <section class="get_in_touch_section">
    <div class="container">
      <div class="get_intuch_box">
        <h1 class="">Privacy Policy</h1>
        <p>"Protecting your personal information is our top priority."</p>
      </div>
    </div>
  </section>
  <section class="terms_conditions_section">
    <div class="container">

      <div class="row">
        <!-- LEFT SIDE -->
        <div class="col-md-6">

          <div class="terms_card">
            <h2>Information We Collect</h2>

            <ul>
              <li>Personal Information: Name, email, phone number, payment details</li>

              <li>Uploaded Content: Assignment files, supporting documents</li>

              <li>Technical Data: IP address, browser type, device information, cookies</li>
            </ul>
          </div>

          <div class="terms_card">
            <h2>How We Use Your Information</h2>

            <ul>
              <li>To provide and deliver academic services</li>

              <li>To improve user experience and tools</li>

              <li>Technical Data to prevent misuse and maintain security</li>
            </ul>
          </div>

          <div class="terms_card">
            <h2>Sharing of Information</h2>

            <ul>
              <li>We Do Not Sell Your Data.</li>

              <li>Right to opt out of marketing communications</li>
            </ul>
          </div>

          <div class="terms_card">
            <h2>Cookies & Tracking</h2>

            <ul>
              <li>Explain usage for personal data use</li>

              <li>Rights to request cookie preferences</li>

              <li>Opt-out of marketing tracking</li>
            </ul>
          </div>

          <div class="terms_card">
            <h2>Third-Party Links</h2>

            <ul>
              <li>The website may contain external links</li>

              <li>Rymbie is not responsible for third-party privacy practices</li>
            </ul>
          </div>

        </div>

        <!-- RIGHT SIDE -->
        <div class="col-md-6">

          <div class="terms_card">
            <h2>Sharing of Information</h2>

            <ul>
              <li>User Data is never sold or shared</li>

              <li>Right to request corrections or deletion</li>

              <li>Regular monitoring for communication security</li>
            </ul>
          </div>

          <div class="terms_card">
            <h2>User Rights</h2>

            <ul>
              <li>Right to access personal data we hold</li>

              <li>Right to request updates or deletion</li>

              <li>Right to opt-out of marketing communications</li>
            </ul>
          </div>

          <div class="terms_card">
            <h2>Data Retention</h2>

            <ul>
              <li>User files and data are stored only as long as necessary</li>

              <li>Files may be securely deleted after project completion</li>
            </ul>
          </div>

          <div class="terms_card">
            <h2>Updates to Privacy Policy</h2>

            <ul>
              <li>Rymbie reserves the right to update privacy-related policies</li>

              <li>For questions contact support@rymbie.com</li>
            </ul>
          </div>

          <div class="mt-4">
            <a href="{{route('home')}}" class="register_btnsrt">
              Back to Homepage
            </a>
          </div>

        </div>

      </div>

    </div>
  </section>
 @endsection