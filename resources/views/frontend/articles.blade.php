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
                @if($featuredArticles->count() > 0)
                    <h2 class="art-heading-primary">Featured Articles</h2>

                    <div class="art-grid">
                        @foreach($featuredArticles as $feat)
                            <a href="javascript:void(0)" class="art-card" data-bs-toggle="modal" data-bs-target="#articleModal{{ $feat->id }}" aria-label="Read article: {{ $feat->title }}">
                                <div class="art-card__img-wrap">
                                    @if($feat->image)
                                        <img src="{{ asset('/uploads/featured_articles/'.$feat->image) }}" alt="{{ $feat->title }}"
                                            class="art-card__img">
                                    @else
                                        <img src="{{ asset('assets/frontend/images/article-1.png') }}" alt="{{ $feat->title }}"
                                            class="art-card__img">
                                    @endif
                                </div>
                                <div class="art-card__content">
                                    <h3 class="art-card__title">{{ $feat->title }}</h3>
                                    <p class="art-card__excerpt">{!! Str::limit(strip_tags($feat->content), 120) !!}</p>
                                    <span class="art-card__link">Read More</span>
                                </div>
                            </a>

                            <!-- Modal for Featured Article Detail -->
                            <div class="modal fade" id="articleModal{{ $feat->id }}" tabindex="-1" aria-labelledby="articleModalLabel{{ $feat->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content text-start">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="articleModalLabel{{ $feat->id }}">{{ $feat->title }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @if($feat->image)
                                                <img src="{{ asset('/uploads/featured_articles/'.$feat->image) }}" class="img-fluid rounded mb-3 w-100" alt="{{ $feat->title }}">
                                            @endif
                                            <div class="mb-3">
                                                <span class="text-muted">Published: {{ $feat->created_at->format('M d, Y') }}</span>
                                            </div>
                                            <div class="article-detail-content">
                                                {!! $feat->content !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="art-filters" aria-label="Article categories filter">
                    <a href="{{ route('frontend.articles') }}" class="art-pill {{ empty($category) ? 'active' : '' }}">All</a>
                    <a href="{{ route('frontend.articles', ['category' => 'Dissertation Tips']) }}" class="art-pill {{ $category == 'Dissertation Tips' ? 'active' : '' }}">Dissertation Tips</a>
                    <a href="{{ route('frontend.articles', ['category' => 'Essay Writing']) }}" class="art-pill {{ $category == 'Essay Writing' ? 'active' : '' }}">Essay Writing</a>
                    <a href="{{ route('frontend.articles', ['category' => 'Research & Citations']) }}" class="art-pill {{ $category == 'Research & Citations' ? 'active' : '' }}">Research & Citations</a>
                    <a href="{{ route('frontend.articles', ['category' => 'Time Management']) }}" class="art-pill {{ $category == 'Time Management' ? 'active' : '' }}">Time Management</a>
                    <a href="{{ route('frontend.articles', ['category' => 'AI Study Tools']) }}" class="art-pill {{ $category == 'AI Study Tools' ? 'active' : '' }}">AI Study Tools</a>
                </div>

                <h2 class="art-heading-primary">Blog / Articles</h2>

                @if($blogArticles->count() > 0)
                    <div class="art-grid">
                        @foreach($blogArticles as $blog)
                            <a href="javascript:void(0)" class="art-card" data-bs-toggle="modal" data-bs-target="#articleModal{{ $blog->id }}" aria-label="Read article: {{ $blog->title }}">
                                <div class="art-card__img-wrap">
                                    @if($blog->image)
                                        <img src="{{ asset('/uploads/blog_articles/'.$blog->image) }}" alt="{{ $blog->title }}"
                                            class="art-card__img">
                                    @else
                                        <img src="{{ asset('assets/frontend/images/article-4.png') }}" alt="{{ $blog->title }}"
                                            class="art-card__img">
                                    @endif
                                </div>
                                <div class="art-card__content">
                                    <h3 class="art-card__title">{{ $blog->title }}</h3>
                                    <p class="art-card__excerpt">{!! Str::limit(strip_tags($blog->content), 120) !!}</p>
                                    <span class="art-card__link">Read More</span>
                                </div>
                            </a>

                            <!-- Modal for Blog Article Detail -->
                            <div class="modal fade" id="articleModal{{ $blog->id }}" tabindex="-1" aria-labelledby="articleModalLabel{{ $blog->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="articleModalLabel{{ $blog->id }}">{{ $blog->title }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @if($blog->image)
                                                <img src="{{ asset('/uploads/blog_articles/'.$blog->image) }}" class="img-fluid rounded mb-3 w-100" alt="{{ $blog->title }}">
                                            @endif
                                            <div class="mb-3">
                                                <span class="badge bg-info text-dark">{{ $blog->category }}</span>
                                                <span class="text-muted ms-2">Published: {{ $blog->created_at->format('M d, Y') }}</span>
                                            </div>
                                            <div class="article-detail-content">
                                                {!! $blog->content !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-info text-center py-4">
                        <i class="bi bi-info-circle me-2"></i> No articles found under this category.
                    </div>
                @endif

                <style>
                    .art-pill.active {
                        background-color: var(--primary-color, #0d6efd);
                        color: #ffffff !important;
                        border-color: var(--primary-color, #0d6efd);
                    }
                    .art-card {
                        text-decoration: none;
                        color: inherit;
                        display: flex;
                        flex-direction: column;
                    }
                    .art-card__link {
                        font-weight: 600;
                        color: var(--primary-color, #0d6efd);
                        cursor: pointer;
                        text-align: left;
                    }
                    .article-detail-content img {
                        max-width: 100%;
                        height: auto;
                    }
                </style>

                <section class="art-newsletter-bar" aria-labelledby="newsletter-heading">
                    <p class="art-newsletter-text" id="newsletter-heading">Get the latest tips delivered stiraight to
                        your
                        inbox.</p>
                    <button class="art-newsletter-btn" onclick="window.location.href='{{route('home')}}'">Subscribe</button>
                </section>
            </div>
        </div>
     @endsection