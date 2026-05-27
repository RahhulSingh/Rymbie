@extends('partials.app')
@section('title', 'Services')
@section('content')
        <section class="svc-hero" aria-label="Academic services hero">
            <div class="svc-hero__inner container">
                <div class="svc-hero__text">
                    <h1 class="svc-hero__title">Expert Academic <br>Services You <br>Can Trust</h1>
                    <p class="svc-hero__subtitle">From essays to dissertations, our team delivers high-quality,
                        plagiarism-free, and timely academic writing help.</p>
                </div>
                <div class="svc-hero__img-wrap">
                    <img src="{{asset('assets/frontend/images/services-hero.png')}}?v=2" alt="Expert Academic Services Illustration"
                        class="svc-hero__img" />
                </div>
            </div>
        </section>

        <section class="svc-services" aria-labelledby="svc-services-heading">
            <div class="container">
                <h2 class="svc-section-title" id="svc-services-heading">Our Services</h2>

                <div class="svc-grid">
                    @if($services->count() > 0)
                    @foreach($services as $service)
                    <article class="svc-card" id="svc-card-assignments">
                        <div class="svc-card__icon" aria-hidden="true">
                            {!! $service->svg_icon !!}
                        </div>
                        <div class="svc-card__body">
                            <h3 class="svc-card__title">{{ $service->title }}</h3>
                            <p class="svc-card__desc">{{ $service->description }}
                            </p>
                        </div>
                    </article>
                     @endforeach
                     @endif

                </div>
            </div>
        </section>

        <section class="svc-how" aria-labelledby="svc-how-heading">
            <div class="container">
                <h2 class="svc-section-title" id="svc-how-heading">How It Works</h2>

                <div class="svc-steps">
                    <div class="svc-step" id="svc-step-1">
                        <div class="svc-step__badge">1</div>
                        <p class="svc-step__label">Submit Your Requirements</p>
                    </div>

                    <div class="svc-step" id="svc-step-2">
                        <div class="svc-step__badge">2</div>
                        <p class="svc-step__label">Get a Quote</p>
                    </div>

                    <div class="svc-step" id="svc-step-3">
                        <div class="svc-step__badge">3</div>
                        <p class="svc-step__label">Get a Quote</p>
                    </div>

                    <div class="svc-step" id="svc-step-4">
                        <div class="svc-step__badge">4</div>
                        <p class="svc-step__label">We Assign an Expert</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="svc-bottom-section">
            <div class="container">
                <h2 class="svc-bottom-title">Let’s start your academic <br>success journey today!</h2>
                <div class="svc-contact-box">
                    <span class="svc-contact-text">Ready to get started? Contact our team.</span>
                    <button class="svc-contact-btn" onclick="window.location.href='{{route('frontend.contact_us')}}'">Contact Us</button>
                </div>
            </div>
        </section>
@endsection
 