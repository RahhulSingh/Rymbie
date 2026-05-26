@extends('partials.app')
@section('title', 'Careers')
@section('content')
        <section class="car-hero" aria-label="Work With Us hero banner">
            <div class="car-hero__inner container">
                <div class="car-hero__text">
                    <h1 class="car-hero__title">Work With Us</h1>
                    <p class="car-hero__subtitle">At Rymbie, we believe in empowering students globally while creating
                        growth opportunities for our team.</p>
                </div>
                <div class="car-hero__img-wrap">
                    <img src="{{asset('assets/frontend/images/careers-hero.png')}}" alt="Careers illustration" class="car-hero__img" />
                </div>
            </div>
        </section>

        <div class="container">
            <div class="car-content-wrap">
                <section class="car-why-section" aria-labelledby="why-work-heading">
                    <h2 class="car-heading-primary" id="why-work-heading">Why Work at Rymbie</h2>

                    <div class="car-why-grid">
                        <div class="car-why-item">
                            <span class="car-why-checkmark">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span class="car-why-text">Flexible Work Environment</span>
                        </div>

                        <div class="car-why-item">
                            <span class="car-why-checkmark">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span class="car-why-text">Opportunity to Impact Education Globally</span>
                        </div>

                        <div class="car-why-item">
                            <span class="car-why-checkmark">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span class="car-why-text">Growth & Learning Opportunities</span>
                        </div>

                        <div class="car-why-item">
                            <span class="car-why-checkmark">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span class="car-why-text">Collaborative & Inclusive Culture</span>
                        </div>
                    </div>
                </section>

                <section class="car-openings-section" id="openings" aria-labelledby="openings-heading">
                    <div class="car-openings-card">
                        <div class="car-openings-header">
                            <h2 id="openings-heading">Current Openings</h2>
                        </div>

                        <div class="car-jobs-list">
                            <div class="car-job-row">
                                <div class="car-job-title-col">
                                    <h3>Content Writer (Freelance / Remote)</h3>
                                </div>
                                <div class="car-job-desc-col">
                                    <p>Create engaging academic content on a variety of subjects.</p>
                                </div>
                                <div class="car-job-btn-col">
                                    <button class="car-apply-btn" onclick="window.location.href='{{route('frontend.contact_us')}}'">Apply
                                        Now</button>
                                </div>
                            </div>

                            <div class="car-job-row">
                                <div class="car-job-title-col">
                                    <h3>Academic Researcher (Subject Expert)</h3>
                                </div>
                                <div class="car-job-desc-col">
                                    <p>Conduct in-depth research in your field of expertise.</p>
                                </div>
                                <div class="car-job-btn-col">
                                    <button class="car-apply-btn" onclick="window.location.href='{{route('frontend.contact_us')}}'">Apply
                                        Now</button>
                                </div>
                            </div>

                            <div class="car-job-row">
                                <div class="car-job-title-col">
                                    <h3>Marketing Intern</h3>
                                </div>
                                <div class="car-job-desc-col">
                                    <p>Assist in promoting our services and brand</p>
                                </div>
                                <div class="car-job-btn-col">
                                    <button class="car-apply-btn" onclick="window.location.href='{{route('frontend.contact_us')}}'">Apply
                                        Now</button>
                                </div>
                            </div>

                            <div class="car-job-row">
                                <div class="car-job-title-col">
                                    <h3>Customer Support Executive</h3>
                                </div>
                                <div class="car-job-desc-col">
                                    <p>Provide exceptional support to our valued clients</p>
                                </div>
                                <div class="car-job-btn-col">
                                    <button class="car-apply-btn" onclick="window.location.href='{{route('frontend.contact_us')}}'">Apply
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="car-opp-process-section" aria-labelledby="opportunities-heading">
                    <div class="car-opp-process-grid">
                        <div class="car-opp-text-col">
                            <h2 class="car-heading-primary" id="opportunities-heading">Internship & Freelance
                                Opportunities
                            </h2>
                            <p class="car-opp-body">Rymbie welcomes talented students and professionals who want to
                                explore
                                freelance writing, research, and customer support roles with us.</p>
                        </div>

                        <div class="car-process-flow-col">
                            <div class="car-flow-step">
                                <div class="car-flow-circle">
                                    <i class="fa-solid fa-file-invoice"></i>
                                </div>
                                <span class="car-flow-label">Submit Your CV/Portfolio</span>
                            </div>

                            <div class="car-flow-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                            <div class="car-flow-step">
                                <div class="car-flow-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <span class="car-flow-label">Shortlisting & Screening</span>
                            </div>

                            <div class="car-flow-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                            <div class="car-flow-step">
                                <div class="car-flow-circle">
                                    <i class="fa-solid fa-comment"></i>
                                </div>
                                <span class="car-flow-label">Interview (Virtual)</span>
                            </div>

                            <div class="car-flow-arrow"><i class="fa-solid fa-chevron-right"></i></div>

                            <div class="car-flow-step">
                                <div class="car-flow-circle">
                                    <i class="fa-solid fa-briefcase"></i>
                                </div>
                                <span class="car-flow-label">Onboarding</span>
                            </div>
                        </div>
                    </div>

                    <div class="car-bottom-cta">
                        <button class="car-cta-btn" onclick="window.location.href='{{route('frontend.contact_us')}}'">Apply Now</button>
                    </div>
                </section>
            </div>
        </div>

   @endsection