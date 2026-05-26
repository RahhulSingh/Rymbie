@extends('partials.app')
@section('title', 'About')
@section('content')
    <main class="about_page_section container">

        <section class="ab-hero-banner" aria-label="About us banner">
            <div class="ab-hero-row">
                <div class="ab-hero-text">
                    <h1 class="ab-hero-title">We Make <br> Academic Writing <br> Effortless</h1>
                    <p class="ab-hero-subtitle">Since our inception, Rymbie has been committed to helping students
                        achieve academic success with high-quality. plagiarism-free, corlfidential writing services.</p>
                </div>
                <div class="ab-hero-img-wrapper">
                    <img src="{{asset('assets/frontend/images/aboutus-2.png')}}" alt="Rymbie Creative Team" class="ab-hero-img" />
                </div>
            </div>
        </section>

        <section class="ab-middle-section" aria-label="Our Story and Mission">
            <div class="ab-middle-row">
                <div class="ab-story-col">
                    <h2 class="ab-section-title">Our Story</h2>
                    <p class="ab-story-body">Our founded, Rymbie started—to help students meet their deadlines and make
                        research and writing stress-free.</p>
                </div>
                <div class="ab-mv-col">
                    <h2 class="ab-section-title">Mission & Vision</h2>
                    <p class="ab-mv-body">To deliver high-quality, custom-written academic work that empowers students
                        to excel.</p>
                </div>
            </div>
        </section>

        <section class="ab-mv-cards-section" aria-label="Mission and Vision details">
            <div class="ab-mv-cards-row">
                <div class="ab-mv-card">
                    <h3 class="ab-mv-card-title">Mission</h3>
                    <p class="ab-mv-card-desc">To deliver high-quality, custom-written academic work that empowers
                        students to excel.</p>
                </div>
                <div class="ab-mv-card">
                    <h3 class="ab-mv-card-title">Vision</h3>
                    <p class="ab-mv-card-desc">To be the most trusted global platform for academic writing support.</p>
                </div>
            </div>
        </section>

        <section class="ab-why-section" aria-label="Why Choose Us benefits">
            <div class="ab-why-row">
                <div class="ab-why-left-col">
                    <h2 class="ab-why-title">Why Choose Us</h2>
                    <div class="ab-why-benefits-left">
                        <div class="feature_itemsdr">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Plagiarism-Free Guarantee</span>
                        </div>
                        <div class="feature_itemsdr">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Expert Writers Across All Fields</span>
                        </div>
                    </div>
                </div>
                <div class="ab-why-right-col">
                    <div class="feature_itemsdr">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Plagiarism-Free Guarantee</span>
                    </div>
                    <div class="feature_itemsdr">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Fast Turnaround Time</span>
                    </div>
                    <div class="feature_itemsdr">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>100% Confidential & Secure</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection