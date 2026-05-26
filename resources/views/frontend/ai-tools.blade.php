@extends('partials.app')
@section('title', 'Ai Tools')
@section('content')
        <section class="ai-hero" aria-label="AI tools hero banner">
            <div class="ai-hero__inner container">
                <div class="ai-hero__text">
                    <h1 class="ai-hero__title">Powerful AI Tools<br>at Your Fingertips</h1>
                    <p class="ai-hero__subtitle">From generating ideas to checking grammar, our AI-powered tools help
                        you work smarter and achieve academic success.</p>
                </div>
                <div class="ai-hero__img-wrap">
                    <img src="{{asset('assets/frontend/images/ai-hero.png')}}?v=2" alt="AI Academic illustration" class="ai-hero__img" />
                </div>
            </div>
        </section>

        <section class="ai-grid-section" aria-labelledby="ai-grid-heading">
            <div class="container">
                <div class="ai-grid">
                    <article class="ai-card" id="ai-card-essay">
                        <div class="ai-card__icon-wrap">
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" fill="#0058c7" />
                                <path d="M8 7H16M8 11H16M8 15H13" stroke="#ffffff" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="ai-card__title">Essay Generator</h3>
                        <p class="ai-card__desc">Generate well-structured essays in minutes.</p>
                    </article>

                    <!-- Card 2: Paraphraser -->
                    <article class="ai-card" id="ai-card-paraphrase">
                        <div class="ai-card__icon-wrap">
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" fill="#0058c7" />
                                <path
                                    d="M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C13.5 8 14.5 9 15 10M16 8V10H14"
                                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="ai-card__title">Paraphraser</h3>
                        <p class="ai-card__desc">Rewrite text while preserving meaning.</p>
                    </article>

                    <!-- Card 3: Summarizer -->
                    <article class="ai-card" id="ai-card-summary">
                        <div class="ai-card__icon-wrap">
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" fill="#0058c7" />
                                <path d="M8 8H16M8 12H16M8 16H16" stroke="#ffffff" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="ai-card__title">Summarizer</h3>
                        <p class="ai-card__desc">Get concise summaries from long content.</p>
                    </article>

                    <!-- Card 4: Topic Generator -->
                    <article class="ai-card" id="ai-card-topic">
                        <div class="ai-card__icon-wrap">
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" fill="#0058c7" />
                                <path
                                    d="M12 7V9M12 15V17M12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9Z"
                                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="ai-card__title">Topic Generator</h3>
                        <p class="ai-card__desc">Find fresh, research-worthy topics instantly.</p>
                    </article>

                    <!-- Card 5: Grammar Checker -->
                    <article class="ai-card" id="ai-card-grammar">
                        <div class="ai-card__icon-wrap">
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" fill="#0058c7" />
                                <path d="M9 12.5L11 14.5L15 9.5" stroke="#ffffff" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="ai-card__title">Grammar Checker</h3>
                        <p class="ai-card__desc">Spot and fix grammar errors in your work.</p>
                    </article>

                    <!-- Card 6: Creative Wrifing -->
                    <article class="ai-card" id="ai-card-creative">
                        <div class="ai-card__icon-wrap">
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" fill="#0058c7" />
                                <path d="M8 16L16 8M16 8L13 7M16 8L17 11M8 16L7 17M8 16L11 17" stroke="#ffffff"
                                    stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="ai-card__title">Creative Wrifing</h3>
                        <p class="ai-card__desc">Enhance stories, blogs, and creative projects.</p>
                    </article>

                    <!-- Card 7: Email Generator -->
                    <article class="ai-card" id="ai-card-email">
                        <div class="ai-card__icon-wrap">
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" fill="#0058c7" />
                                <path d="M6 8L12 12L18 8M6 16H18V8H6V16Z" stroke="#ffffff" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="ai-card__title">Email Generator</h3>
                        <p class="ai-card__desc">Write professional emails quickly and easily.</p>
                    </article>

                    <!-- Card 8: Email Generator (Duplicate) -->
                    <article class="ai-card" id="ai-card-email-dup">
                        <div class="ai-card__icon-wrap">
                            <svg width="42" height="42" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" fill="#0058c7" />
                                <path d="M6 8L12 12L18 8M6 16H18V8H6V16Z" stroke="#ffffff" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="ai-card__title">Email Generator</h3>
                        <p class="ai-card__desc">Write professional emails quickly and easily.</p>
                    </article>

                </div>
            </div>
        </section>

        <section class="ai-how" aria-labelledby="ai-how-heading">
            <div class="container">
                <h2 class="ai-section-title" id="ai-how-heading">How It Works</h2>

                <div class="ai-how__grid">
                    <div class="ai-how__item">
                        <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 20C15.5229 20 20 15.5229 20 10C20 7.96289 19.3909 6.06804 18.3448 4.48768L10.3944 13.3214C9.62489 14.1766 8.32978 14.3029 7.40938 13.6126L3.77778 10.8889C3.28686 10.5207 3.18737 9.82422 3.55556 9.33333C3.92374 8.84244 4.62019 8.74289 5.11111 9.11111L8.74267 11.8348L16.9044 2.76617C15.1096 1.05241 12.6777 0 10 0C4.47716 0 0 4.47716 0 10C0 15.5229 4.47716 20 10 20Z"
                                fill="#01a55c" />
                        </svg>
                        <span class="ai-how__label">Save time</span>
                    </div>

                    <div class="ai-how__item">
                        <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 20C15.5229 20 20 15.5229 20 10C20 7.96289 19.3909 6.06804 18.3448 4.48768L10.3944 13.3214C9.62489 14.1766 8.32978 14.3029 7.40938 13.6126L3.77778 10.8889C3.28686 10.5207 3.18737 9.82422 3.55556 9.33333C3.92374 8.84244 4.62019 8.74289 5.11111 9.11111L8.74267 11.8348L16.9044 2.76617C15.1096 1.05241 12.6777 0 10 0C4.47716 0 0 4.47716 0 10C0 15.5229 4.47716 20 10 20Z"
                                fill="#01a55c" />
                        </svg>
                        <span class="ai-how__label">Imprrove quality</span>
                    </div>

                    <div class="ai-how__item">
                        <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 20C15.5229 20 20 15.5229 20 10C20 7.96289 19.3909 6.06804 18.3448 4.48768L10.3944 13.3214C9.62489 14.1766 8.32978 14.3029 7.40938 13.6126L3.77778 10.8889C3.28686 10.5207 3.18737 9.82422 3.55556 9.33333C3.92374 8.84244 4.62019 8.74289 5.11111 9.11111L8.74267 11.8348L16.9044 2.76617C15.1096 1.05241 12.6777 0 10 0C4.47716 0 0 4.47716 0 10C0 15.5229 4.47716 20 10 20Z"
                                fill="#01a55c" />
                        </svg>
                        <span class="ai-how__label">Learn faster</span>
                    </div>

                    <div class="ai-how__item">
                        <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 20C15.5229 20 20 15.5229 20 10C20 7.96289 19.3909 6.06804 18.3448 4.48768L10.3944 13.3214C9.62489 14.1766 8.32978 14.3029 7.40938 13.6126L3.77778 10.8889C3.28686 10.5207 3.18737 9.82422 3.55556 9.33333C3.92374 8.84244 4.62019 8.74289 5.11111 9.11111L8.74267 11.8348L16.9044 2.76617C15.1096 1.05241 12.6777 0 10 0C4.47716 0 0 4.47716 0 10C0 15.5229 4.47716 20 10 20Z"
                                fill="#01a55c" />
                        </svg>
                        <span class="ai-how__label">Easy to use</span>
                    </div>

                    <div class="ai-how__item">
                        <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 20C15.5229 20 20 15.5229 20 10C20 7.96289 19.3909 6.06804 18.3448 4.48768L10.3944 13.3214C9.62489 14.1766 8.32978 14.3029 7.40938 13.6126L3.77778 10.8889C3.28686 10.5207 3.18737 9.82422 3.55556 9.33333C3.92374 8.84244 4.62019 8.74289 5.11111 9.11111L8.74267 11.8348L16.9044 2.76617C15.1096 1.05241 12.6777 0 10 0C4.47716 0 0 4.47716 0 10C0 15.5229 4.47716 20 10 20Z"
                                fill="#01a55c" />
                        </svg>
                        <span class="ai-how__label">Easy to use</span>
                    </div>
                </div>

                <div class="ai-cta-wrap">
                    <button class="ai-cta-btn" onclick="window.location.href='{{route('frontend.testimonials')}}'">Try AI Tools
                        Now</button>
                    <p class="ai-cta-subtext">No login needed for free trial.</p>
                </div>
            </div>
        </section>
@endsection