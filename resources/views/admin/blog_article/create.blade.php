@extends('admin.partials.master')

@section('title', isset($article) ? 'Edit Blog Article' : 'Add Blog Article')

@section('content')

<div class="container-fluid px-3 px-lg-2 py-4">

    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-newspaper" aria-hidden="true"></i>
            </span>

            <div>
                <p class="eyebrow mb-1">Management</p>

                <h1 class="h3 mb-1">
                    {{ isset($article) ? 'Edit Blog Article' : 'Add Blog Article' }}
                </h1>
            </div>
        </div>

        <div class="heading-actions">
            <a class="btn btn-outline-secondary btn-sm"
                href="{{ route('blog_article.index') }}">
                <i class="bi bi-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
    </div>

    <form class="panel needs-validation"
        action="{{ isset($article) ? route('blog_article.update', $article->id) : route('blog_article.store') }}"
        method="POST"
        enctype="multipart/form-data"
        novalidate>

        @csrf

        @if(isset($article))
            @method('PUT')
        @endif

        <section class="row g-3">

            <div class="col-12 col-xl-12">

                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-newspaper"></i>
                            <span>
                                {{ isset($article) ? 'Edit Blog Article' : 'Add Blog Article' }}
                            </span>
                        </h2>
                    </div>
                </div>

                {{-- Validation Errors --}}
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="row">

                    {{-- Title --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Title
                            <span class="text-danger">*</span>
                        </label>

                        <input class="form-control @error('title') is-invalid @enderror"
                            name="title"
                            type="text"
                            value="{{ old('title', $article->title ?? '') }}"
                            required>

                        @error('title')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Category --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Category
                            <span class="text-danger">*</span>
                        </label>

                        <select class="form-select @error('category') is-invalid @enderror" name="category" required>
                            <option value="">Select Category</option>
                            <option value="Dissertation Tips" {{ old('category', $article->category ?? '') == 'Dissertation Tips' ? 'selected' : '' }}>Dissertation Tips</option>
                            <option value="Essay Writing" {{ old('category', $article->category ?? '') == 'Essay Writing' ? 'selected' : '' }}>Essay Writing</option>
                            <option value="Research & Citations" {{ old('category', $article->category ?? '') == 'Research & Citations' ? 'selected' : '' }}>Research & Citations</option>
                            <option value="Time Management" {{ old('category', $article->category ?? '') == 'Time Management' ? 'selected' : '' }}>Time Management</option>
                            <option value="AI Study Tools" {{ old('category', $article->category ?? '') == 'AI Study Tools' ? 'selected' : '' }}>AI Study Tools</option>
                        </select>

                        @error('category')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Image --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Image
                            <span class="text-danger">{{ isset($article) ? '' : '*' }}</span>
                        </label>

                        <input class="form-control @error('image') is-invalid @enderror"
                            name="image"
                            type="file"
                            {{ isset($article) ? '' : 'required' }}>

                        @error('image')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Existing Image --}}
                        @if(isset($article) && $article->image)
                            <div class="mt-3">
                                <img src="{{ asset('uploads/blog_articles/'.$article->image) }}"
                                    width="150"
                                    class="rounded border">
                            </div>
                        @endif
                    </div>

                    {{-- Content --}}
                    <div class="col-md-12 mb-3">
                        <label class="form-label">
                            Content (Excerpt / Details)
                            <span class="text-danger">*</span>
                        </label>

                        <textarea name="content"
                            id="content"
                            class="form-control @error('content') is-invalid @enderror">{{ old('content', $article->content ?? '') }}</textarea>

                        @error('content')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>

                {{-- Buttons --}}
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">
                    <a class="btn btn-outline-secondary"
                        href="{{ route('blog_article.index') }}">
                        Cancel
                    </a>

                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-check-circle"></i>
                        {{ isset($article) ? 'Update' : 'Add' }}
                    </button>
                </div>

            </div>

        </section>

    </form>

</div>

{{-- Jodit CSS --}}
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/jodit@3.24.5/build/jodit.min.css">

{{-- Jodit JS --}}
<script src="https://cdn.jsdelivr.net/npm/jodit@3.24.5/build/jodit.min.js"></script>

<script>
    const editor = new Jodit('#content', {
        height: 400
    });
</script>

@endsection
