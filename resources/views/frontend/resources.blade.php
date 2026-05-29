@extends('partials.app')
@section('title', 'resources')
@section('content')
        <section class="res-hero" aria-label="Free Academic Tools hero banner">
            <div class="res-hero__inner container">
                <div class="res-hero__text">
                    <h1 class="res-hero__title">{{ $res_hero->title ?? '' }}</h1>
                    <p class="res-hero__subtitle">{{ $res_hero->description ?? '' }}</p>
                </div>
                <div class="res-hero__img-wrap">
                    <img src="{{ asset('uploads/res_hero/' . $res_hero->image) }}" alt="Resources hero illustration" class="res-hero__img" />
                </div>
            </div>
        </section>

        <div class="container">
            <div class="res-content-wrap">
                <section class="res-section" aria-labelledby="guides-heading">
                    <h2 class="res-heading-primary" id="guides-heading">Free Guides</h2>
                    <div class="res-guides-grid">
                        @foreach($res_guides as $guide)
                        <div class="res-guide-card">
                            <div class="res-guide-icon-box">
                                <i class="{{ $guide->icon ?? ''}}"></i>
                            </div>
                            <div class="res-guide-content">
                                <h3>{{ $guide->title ?? '' }} <span class="res-guide-meta">{{$guide->meta ?? '' }}</span></h3>
                                <a class="res-download-btn"  href="{{ route('guide.download',$guide->id) }}">Download
                                    Free</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                <section class="res-section" aria-labelledby="tools-heading">
                    <h2 class="res-heading-primary" id="tools-heading">Free Study Tools</h2>

                    <div class="res-tools-scroll-wrap">
                        <div class="res-tools-row">
                            @foreach($res_tools as $tool)
                                <a href="{{route('frontend.ai.tools')}}" class="res-tool-pill">
                                    <i class="{{$tool->icon ?? ''}}"></i>
                                    <span>{{ $tool->title ?? '' }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section class="res-section" aria-labelledby="featured-heading">
                    <h2 class="res-heading-primary" id="featured-heading">Featured Articles</h2>

                    <div class="res-articles-grid">
                        @foreach($res_articles as $article)
                        <div class="res-article-card">
                            <div class="res-article-header">
                                <div class="res-article-badge"><i class="{{$article->icon ?? ''}}"
                                        style="color: #0058c7;"></i></div>
                                <h3>{{ $article->title ?? '' }}</h3>
                            </div>
                            <ul class="res-article-bullets">
                                @php
                                    $points = explode(',', $article->points);
                                @endphp
                                @foreach($points as $point)
                                    <li>{{$point}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
@endsection