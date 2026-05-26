@extends('partials.app')
@section('title', 'Home')
@section('content')
        <section class="res-hero" aria-label="Free Academic Tools hero banner">
            <div class="res-hero__inner container">
                <div class="res-hero__text">
                    <h1 class="res-hero__title">Learn Smarter, Not Harder - With Free Academic Tools</h1>
                    <p class="res-hero__subtitle">Explore free resources, guides, and writing tools to improve your
                        academic success.</p>
                </div>
                <div class="res-hero__img-wrap">
                    <img src="{{asset('assets/frontend/images/resources-hero.png')}}" alt="Resources hero illustration" class="res-hero__img" />
                </div>
            </div>
        </section>

        <div class="container">
            <div class="res-content-wrap">
                <section class="res-section" aria-labelledby="guides-heading">
                    <h2 class="res-heading-primary" id="guides-heading">Free Guides</h2>

                    <div class="res-guides-grid">
                        <div class="res-guide-card">
                            <div class="res-guide-icon-box">
                                <i class="fa-solid fa-pen-nib"></i>
                            </div>
                            <div class="res-guide-content">
                                <h3>Essay Writing Guide <span class="res-guide-meta">(PDF)</span></h3>
                                <button class="res-download-btn" onclick="window.location.href='index.html'">Download
                                    Free</button>
                            </div>
                        </div>

                        <div class="res-guide-card">
                            <div class="res-guide-icon-box">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <div class="res-guide-content">
                                <h3>Dissertation Structure Template</h3>
                                <button class="res-download-btn" onclick="window.location.href='index.html'">Download
                                    Free</button>
                            </div>
                        </div>

                        <div class="res-guide-card">
                            <div class="res-guide-icon-box">
                                <i class="fa-solid fa-file-invoice"></i>
                            </div>
                            <div class="res-guide-content">
                                <h3>Citation & Referencing Guide <span class="res-guide-meta">(APA/Harvard/MLA)</span>
                                </h3>
                                <button class="res-download-btn" onclick="window.location.href='index.html'">Download
                                    Free</button>
                            </div>
                        </div>

                        <div class="res-guide-card">
                            <div class="res-guide-icon-box">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="res-guide-content">
                                <h3>Time Management for Students</h3>
                                <button class="res-download-btn" onclick="window.location.href='index.html'">Download
                                    Free</button>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="res-section" aria-labelledby="tools-heading">
                    <h2 class="res-heading-primary" id="tools-heading">Free Study Tools</h2>

                    <div class="res-tools-scroll-wrap">
                        <div class="res-tools-row">
                            <a href="{{route('frontend.ai.tools')}}" class="res-tool-pill">
                                <i class="fa-solid fa-tags"></i>
                                <span>Plagiarism Checker</span>
                            </a>

                            <a href="{{route('frontend.ai.tools')}}" class="res-tool-pill">
                                <i class="fa-solid fa-pen"></i>
                                <span>Grammar Checker</span>
                            </a>

                            <a href="{{route('frontend.ai.tools')}}" class="res-tool-pill">
                                <i class="fa-solid fa-copy"></i>
                                <span>Summarizer</span>
                            </a>

                            <a href="{{route('frontend.ai.tools')}}" class="res-tool-pill">
                                <i class="fa-solid fa-lightbulb"></i>
                                <span>Topic Generator</span>
                            </a>
                        </div>
                    </div>
                </section>

                <section class="res-section" aria-labelledby="featured-heading">
                    <h2 class="res-heading-primary" id="featured-heading">Featured Articles</h2>

                    <div class="res-articles-grid">
                        <div class="res-article-card">
                            <div class="res-article-header">
                                <div class="res-article-badge"><i class="fa-solid fa-file-lines"
                                        style="color: #0058c7;"></i></div>
                                <h3>Top 10 Mistakes in Essay Writing</h3>
                            </div>
                            <ul class="res-article-bullets">
                                <li>Top 10 Mistakes in Essay Writing</li>
                                <li>Grammar Checker</li>
                                <li>Paraphraser</li>
                            </ul>
                        </div>

                        <div class="res-article-card">
                            <div class="res-article-header">
                                <div class="res-article-badge"><i class="fa-solid fa-graduation-cap"
                                        style="color: #0058c7;"></i></div>
                                <h3>How to Write a Winning Dissertation Proposal</h3>
                            </div>
                            <ul class="res-article-bullets">
                                <li>Top 10 Mistakes in Essay Writing</li>
                                <li>How to Write a Winning Dissertation Proposal</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
@endsection