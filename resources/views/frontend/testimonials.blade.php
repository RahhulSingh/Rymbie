@extends('partials.app')
@section('title', 'testimonials')
@section('content')
        <section class="tst-hero" aria-label="Testimonials hero banner">
            <div class="tst-hero__inner container">
                <div class="tst-hero__text">
                    <h1 class="tst-hero__title">Real Stories.<br>Real Success.</h1>
                    <p class="tst-hero__subtitle">See what students have to say about their axperience with Rymbie.</p>
                </div>
                <div class="tst-hero__img-wrap">
                    <img src="{{asset('assets/frontend/images/testimonials-hero.png')}}" alt="Testimonials illustration" class="tst-hero__img" />
                </div>
            </div>
        </section>

        <section class="tst-reviews" aria-label="Student reviews grid">
            <div class="container">
                <div class="tst-grid">

                    <article class="tst-card" id="tst-card-1">
                        <div class="tst-card__stars" aria-label="5 star rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <blockquote class="tst-card__quote">
                            “Rymbie helped me finish my dissertation 2 weeks early and it was flawless!”
                        </blockquote>
                        <div class="tst-card__author">
                            <strong>Priya</strong>, UK
                        </div>
                    </article>

                    <article class="tst-card" id="tst-card-2">
                        <div class="tst-card__stars" aria-label="5 star rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <blockquote class="tst-card__quote">
                            Outsttanding service! My report was well-written ard delivered on time.
                        </blockquote>
                        <div class="tst-card__author">
                            <strong>David</strong>, USA
                        </div>
                    </article>

                    <article class="tst-card" id="tst-card-3">
                        <div class="tst-card__stars" aria-label="5 star rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <blockquote class="tst-card__quote">
                            I got an A on my thesis thanks to the expert help from Rymble!
                        </blockquote>
                        <div class="tst-card__author">
                            <strong>Sophie</strong>, Australia
                        </div>
                    </article>

                    <article class="tst-card" id="tst-card-4">
                        <div class="tst-card__stars" aria-label="5 star rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <blockquote class="tst-card__quote">
                            The assignments were high-quality and completely original.
                        </blockquote>
                        <div class="tst-card__author">
                            <strong>Raj</strong>, India
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <section class="tst-journey-section" aria-labelledby="tst-journey-heading">
            <div class="container">
                <div class="tst-journey-columns">
                    <div class="tst-journey-column">
                        <h2 class="tst-journey-title">Before</h2>
                        <p class="tst-journey-text">I was strugggling to keep up with my deadlines and research. –
                            Ahrried</p>
                    </div>

                    <div class="tst-journey-column">
                        <h2 class="tst-journey-title">After</h2>
                        <p class="tst-journey-text">Thanks to Rymbie. I delivered top-quality work and improved my
                            grades!</p>
                    </div>
                </div>

                <div class="tst-cta-buttons">
                    <button class="tst-btn-solid" onclick="window.location.href='{{route('frontend.faq')}}'">Get Help Now</button>
                    <button class="tst-btn-outline" onclick="window.location.href='{{route('frontend.careers')}}'">Be our next success
                        story!</button>
                </div>
            </div>
        </section>

     @endsection