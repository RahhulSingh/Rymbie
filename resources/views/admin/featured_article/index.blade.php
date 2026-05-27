@extends('admin.partials.master')
@section('title', 'Featured Articles')
@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-newspaper" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Data</p>
                <h1 class="h3 mb-1">Featured Articles</h1>
            </div>
        </div>
    </div>

    <section class="panel">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title"> <i class="bi bi-newspaper" aria-hidden="true"></i><span> Featured Articles List</span>
                </h2>
            </div>
            <div>
                <div class="alert alert-primary" role="alert">
                    <strong>
                        <a href="{{ route('featured_article.create') }}"><i class="bi bi-plus-lg"></i> Add Featured Article</a>
                    </strong>
                </div>
                <input class="form-control form-control-sm table-search" type="search" placeholder="Search featured articles"
                    data-table-search="featuredTable" aria-label="Search featured articles">
            </div>
        </div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table align-middle mb-0" id="featuredTable" data-searchable-table>
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Content Preview</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $index => $article)
                        <tr>
                            <td class="fw-semibold">{{ $index+1 }}</td>
                            <td>
                                <div class="table-media">
                                    <strong>{{ $article->title ?? '' }}</strong>
                                </div>
                            </td>
                            <td>
                                @if($article->image)
                                    <img src="{{ asset('/uploads/featured_articles/'.$article->image) }}"
                                        width="120px" class="rounded border" alt="articleimg">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{!! Str::limit(strip_tags($article->content), 80) !!}</td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('featured_article.edit', $article->id) }}">
                                        <button class="btn btn-light btn-sm" type="button">Edit</button>
                                    </a>
                                    <a href="{{ route('featured_article.delete', $article->id) }}">
                                        <button class="btn btn-light btn-sm text-danger" 
                                            onclick="return confirm('Are you sure you want to delete this featured article?')" 
                                            type="button">Delete</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
