@extends('partials.app')
@section('title', 'Articles')
@section('content')
        <section class="art-hero" aria-label="Blog hero banner">
            <div class="art-hero__inner container">
                <div class="art-hero__text">
                    <h1 class="art-hero__title">Stay Ahead in Your Academic Journey</h1>
                    <p class="art-hero__subtitle">Expert insights, writing tips, and resources from experienced academic
                        writers.</p>
                </div>
                <div class="art-hero__img-wrap">
                    <img src="{{asset('assets/frontend/images/articles-hero.png')}}" alt="Happy student studying with a bright idea"
                        class="art-hero__img" />
                </div>
            </div>
        </section>
        <div class="container">
            <div class="art-main">
                <h2 class="art-heading-primary">Featured Articles</h2>

                <div class="art-grid">
                    <a href="#" class="art-card"
                        aria-label="Read article: How to Write a Compelling Dissertation Introduction">
                        <div class="art-card__img-wrap">
                            <img src="{{asset('assets/frontend/images/article-1.png')}}" alt="How to Write a Compelling Dissertation Introduction"
                                class="art-card__img">
                        </div>
                        <div class="art-card__content">
                            <h3 class="art-card__title">How to Write a Compelling Dissertation Introduction</h3>
                            <p class="art-card__excerpt">Rebust advice protaid for ttarting your researchem.</p>
                            <span class="art-card__link">Read More</span>
                        </div>
                    </a>

                    <a href="#" class="art-card" aria-label="Read article: 10 Common Essay Writing Mistakes to Avoid">
                        <div class="art-card__img-wrap">
                            <img src="{{asset('assets/frontend/images/article-2.png')}}" alt="10 Common Essay Writing Mistakes to Avoid"
                                class="art-card__img">
                        </div>
                        <div class="art-card__content">
                            <h3 class="art-card__title">10 Common Essay Writing Mistakes to Avoid</h3>
                            <p class="art-card__excerpt">Avoid how advancing writing stress-free can bc lavode).</p>
                            <span class="art-card__link">Read More</span>
                        </div>
                    </a>

                    <a href="#" class="art-card" aria-label="Read article: The Importance of Proper Research Citations">
                        <div class="art-card__img-wrap">
                            <img src="{{asset('assets/frontend/images/article-3.png')}}" alt="The Importance of Proper Research Citations"
                                class="art-card__img">
                        </div>
                        <div class="art-card__content">
                            <h3 class="art-card__title">The Importance of Proper Research Cittons</h3>
                            <p class="art-card__excerpt">Empratie reerach citations, and long rest acprionce.</p>
                            <span class="art-card__link">Read More</span>
                        </div>
                    </a>
                </div>

                <div class="art-filters" aria-label="Article categories filter">
                    <a href="#" class="art-pill">Dissertation Tips</a>
                    <a href="#" class="art-pill">Essay Writing</a>
                    <a href="#" class="art-pill">Research & Citations</a>
                    <a href="#" class="art-pill">Time Management</a>
                    <a href="ai-tools.html" class="art-pill">AI Study Tools</a>
                </div>

                <h2 class="art-heading-primary">Blog / Articles</h2>

                <div class="art-grid">
                    <a href="#" class="art-card" aria-label="Read article: Dissertation Time Management Strategies">
                        <div class="art-card__img-wrap">
                            <img src="{{asset('assets/frontend/images/article-4.png')}}" alt="Dissertation Time Management Strategies"
                                class="art-card__img">
                        </div>
                        <div class="art-card__content">
                            <h3 class="art-card__title">Dissertation Time Management Strategics</h3>
                            <p class="art-card__excerpt">Boosts to elech your during an teseorch stress.</p>
                            <span class="art-card__link">Read More</span>
                        </div>
                    </a>

                    <a href="#" class="art-card" aria-label="Read article: Crafting a Strong Thesis Statement">
                        <div class="art-card__img-wrap">
                            <img src="{{asset('assets/frontend/images/article-5.png')}}" alt="Crafting a Strong Thesis Statement"
                                class="art-card__img">
                        </div>
                        <div class="art-card__content">
                            <h3 class="art-card__title">Crafting a Strong Thesis Statement</h3>
                            <p class="art-card__excerpt">Wititchg detailed, comseri.ty liak you’dresearch strategy.</p>
                            <span class="art-card__link">Read More</span>
                        </div>
                    </a>

                    <a href="#" class="art-card" aria-label="Read article: Using AI Tools to Enhance Your Studies">
                        <div class="art-card__img-wrap">
                            <img src="{{asset('assets/frontend/images/article-6.png')}}" alt="Using AI Tools to Enhance Your Studies"
                                class="art-card__img">
                        </div>
                        <div class="art-card__content">
                            <h3 class="art-card__title">Using AI Tools to Enhance Your Studies</h3>
                            <p class="art-card__excerpt">Benefits advice addicting cxerdent cratstakes.</p>
                            <span class="art-card__link">Read More</span>
                        </div>
                    </a>
                </div>

                <section class="art-newsletter-bar" aria-labelledby="newsletter-heading">
                    <p class="art-newsletter-text" id="newsletter-heading">Get the latest tips delivered stiraight to
                        your
                        inbox.</p>
                    <button class="art-newsletter-btn" onclick="window.location.href='index.html'">Subscribe</button>
                </section>
            </div>
        </div>
     @endsection