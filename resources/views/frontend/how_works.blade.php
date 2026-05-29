@extends('partials.app')
@section('title', 'How Works')
@section('content')

  <section class="how_work_section">
    <div class="container">
      <div class="academic_services_box">
        <h1>{{ $data['how_works']->title ?? '' }}</h1>
        <p>{{ $data['how_works']->description ?? '' }}</p>
      </div>
      <div class="get_started_box">
        <div class="ready_started_content">
          <h2>{{ $data['get_started']->title ?? '' }}</h2>
          <p>{{ $data['get_started']->description ?? '' }}</p>
        </div>
      </div>
      <div class="row assignments_title">
        @foreach($assignments as $assignment)
          <div class="col-12 col-md-3 col-lg-3 col-xl-3">
            <div class="submit_request_card mt-4">
              <div class="submit_request_icon">
                <img src="{{ asset('uploads/assignments_title_section/'.$assignment->icon) }}" alt="">
              </div>
              <h2>{{ $assignment->title ?? '' }}</h2>
              <p>{{ $assignment->description ?? '' }}</p>
            </div>
          </div>
        @endforeach
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
        @foreach($works_best as $work_best)
          <div class="col-6 ">
            <div class="feature_itemsdr">
              <i class="fa-solid fa-circle-check"></i>
              <span>{{ $work_best->title ?? '' }}
              </span>
            </div>
          </div>
        @endforeach
      </div>
      <a href="{{route('frontend.faq')}}" class="register_btnsrt">
        Get Help Now
      </a>
    </div>


  </section>
@endsection