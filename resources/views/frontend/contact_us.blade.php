@extends('partials.app')
@section('title', 'Contact Us')
@section('content')
  <section class="get_in_touch_section">
    <div class="container">
      <div class="get_intuch_box">
        <h1>Get in Touch</h1>
        <p>Questions, quotes, or urgent help? Send us a message.</p>
      </div>
    </div>
  </section>
  <section class="socal_mediya_sec asedfsocal_mediya_sec">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12  col-xl-10">
          <div class="row">
            @foreach ($contactus_socalmediyas as $socalmediya)
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
              <a href="#" class="whatsapp_title mt-4">
                <img src="{{ asset('/uploads/contactus_socalmediya/' . $socalmediya->image) }}" alt="Image">
                <h3>{{ $socalmediya->title }}</h3>
                <p>{{ $socalmediya->content }}</p>
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact_us_section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-xl-11">
          <div class="contact_us_box">
            <h2 class="contact_title">Contact Us</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('contact.store') }}"method="POST"enctype="multipart/form-data">
              @csrf
              <div class="form_row">
                <div class="form_group">
                  <label>Full Name</label>
                  <input type="text" class="form_control" name="name" value="{{ old('name') }}">
                  @error('name')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form_group">
                  <label>Email Address</label>
                  <input type="email" class="form_control" name="email" value="{{ old('email') }}">
                  @error('email')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form_row">
                <div class="form_group full_width">
                  <input type="text" placeholder="Phone Number" class="form_control" name="phone" value="{{ old('phone') }}">
                  @error('phone')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form_row">
                <div class="form_group full_width">
                  <label>Subject</label>
                  <div class="select_wrapperwe">
                    <select class="form_control font_size_14" name="subject">
                        <option value="">Select Subject</option>
                        <option value="Assignment">Assignment</option>
                        <option value="Project">Project</option>
                        <option value="Support">Support</option>
                    </select>

                    <span class="select_icon">
                      <svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.75 0.75L9.75 9.75L18.75 0.75" stroke="black" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round" />
                      </svg>

                    </span> 
                  </div>
                </div>
              </div>
              <div class="form_row">
                <div class="form_group full_width">
                  <textarea class="form_control" placeholder="Message" name="message">{{ old('message') }}</textarea>
                  @error('message')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="form_row">
                <div class="form_group full_width">
                  <label>Attach Brief <span class="optional_box">(optional)</span> </span>
                    <label class="file_upload">

                      <input type="file" name="file" id="fileInput" hidden>

                      <span id="fileName">
                        Choose file...
                      </span>
                      <span>
                        PDF/DOC/Image
                      </span>
                    </label>

                </div>
              </div>

              <div class="form_group">
                <label>Preferred contact:</label>
                <div class="radio_wrapper">
                  <label>
                    <input type="radio" value="whatsapp" checked name="preferred_contact">
                    WhatsApp
                  </label>
                  <label>
                    <input type="radio" value="email" name="preferred_contact">
                    Email
                  </label>

                  <label>
                    <input type="radio" value="call" name="preferred_contact">
                    Call
                  </label>
                </div>
              </div>
              <div class="checkbox_wrapper">
                <input type="checkbox" name="terms" value="1" required>
                <p>
                  I agree to the:
                  <a href="privacy_policy.html">Terms & Privacy Policy</a>
                </p>
              </div>
              <button type="submit" class="submit_btn">
                Send Message
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="need_help_section">

    <div class="container
 ">
      <div class="need_help_box">

        <h2 class="mb-2">Need urgent help?</h2>
        <p class="current_open_positions_text">
          We operate online worldwide. 9:00–21:00 ST. Mon–Sat
        </p>
      </div>
    </div>
  </section>
@endsection
  <script>
    const fileInput = document.getElementById('fileInput');
    const fileName = document.getElementById('fileName');

    fileInput.addEventListener('change', function () {

      if (this.files.length > 0) {
        fileName.textContent = this.files[0].name;
      } else {
        fileName.textContent = 'Choose file...';
      }

    });
  </script>
