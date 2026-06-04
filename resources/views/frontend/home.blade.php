@extends('partials.app')
@section('title', 'Home')
@section('content')
<section class="hero_section">
    <div class="container">
        <div class="row align-items-center g-0">
            <div class="col-12 col-md-6 col-lg-6 col-xl-7">
                <div class="hero_box">
                    <h1>{{ $hero->title ?? '' }}</h1>
                    {!! $hero->content ?? '' !!}


                    <div class="erfeatures-box">

                        <div class="feature-item">
                            <div class="icon icon-1">
                                <i class="fa-solid fa-user-graduate"></i>
                            </div>
                            <div>
                                <h4>Expert Writers</h4>
                                <p>Qualified & experienced academic professionals</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="icon icon-2">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div>
                                <h4>100% Original</h4>
                                <p>Plagiarism free work guaranteed</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="icon icon-3">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <h4>On-Time Delivery</h4>
                                <p>Always delivered before deadline</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="icon icon-4">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <div>
                                <h4>24/7 Support</h4>
                                <p>Our support team is always here to help</p>
                            </div>
                        </div>

                    </div>

                    <div class="start_your_journey">
                        <a href="{{ route('frontend.register') }}" class="start_your">
                            Start Your Journey
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="trusted_students_ty">
                        <div class="trusted_users">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User">
                        </div>

                        <div class="trusted_rating">
                            <span class="stars">★★★★★</span>
                            <span class="trusted_text">Trusted by 10,000+ students worldwide</span>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-5">
                <div class="heroimg_title">
                    <img src="{{ asset('/uploads/hero_section/'.$hero->image) }}" width="100%" alt="heroimg.png">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="step_process_sec">
    <div class="container">
        <div class="simple_procese_text">
            <h2> Features</h2>
        </div>
        <div class="row">
            @foreach($steps as $step)
                <div class="col-6 ">
                    
                    <div class="feature_itemsdr">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>{{$step->title ?? ''}}</span>
                    </div>
                </div>
            @endforeach

    </div>
    </div>

</section>

<section class="academic_services_section">
    <div class="container">
        <div class="simple_procese_text mb-4">
            <h2> How It Works
            </h2>
        </div>
        <div class="row">
            @foreach($academic as $academic)
                <div class="col-4">
                    <div
                        class="process_boxsest {{ $loop->last ? 'last-box' : '' }}">
                        <div class="process_icon">
                            <i class="{{ $academic->icon ?? '' }}"></i>
                        </div>

                        <h3>{{ $academic->title ?? '' }}</h3>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pyble-se">
            <p>"Rymble helped me grafnish my dissertation 2 weeks early!" – Priya</p>
        </div>

    </div>
</section>

@endsection
