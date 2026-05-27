@extends('admin.partials.master')
@section('title', isset($res_article) ? 'Edit Resource Article' : 'Add Resource Article')
@section('content')

<div class="container-fluid px-3 px-lg-2 py-4">

    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-person-fill-gear" aria-hidden="true"></i>
            </span>

            <div>
                <p class="eyebrow mb-1">Management</p>

                <h1 class="h3 mb-1">
                    {{ isset($res_article) ? 'Edit Resource Article' : 'Add Resource Article' }}
                </h1>
            </div>
        </div>

        <div class="heading-actions">
            <a class="btn btn-outline-secondary btn-sm"
                href="{{ route('res_articles.index') }}">
                <i class="bi bi-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
    </div>

    <form class="panel needs-validation"
        action="{{ isset($res_article) ? route('res_articles.update',$res_article->id) : route('res_articles.store') }}"
        method="POST" enctype="multipart/form-data" novalidate>

        @csrf

        @if(isset($res_article))
            @method('PUT')
        @endif

        <section class="row g-3">

            <div class="col-12 col-xl-12">

                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-person-fill-gear"></i>
                            <span>
                                {{ isset($res_article) ? 'Edit Resource Article' : 'Add Resource Article' }}
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

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                <div class="row">


                    <div class="col-md-6 mb-3">
                        <label class="form-label">Icon<span class="text-danger">*</span></label>
                        <input class="form-control" name="icon" id="" rows="3"value="{{ old('icon', $res_article->icon ?? '') }}">
                        @error('icon')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title<span class="text-danger">*</span></label>
                        <input name="title" class="form-control"
                            value="{{ old('title', $res_article->title ?? '') }}">
                        @error('title')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Points<span class="text-danger">*</span></label>
                        <textarea name="points" class="form-control" placeholder="Enter points separated by ',' (Comma)"
                             rows="3">{{ old('points', $res_article->points ?? '') }}</textarea>
                        @error('points')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>

                {{-- Buttons --}}
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">

                    <a class="btn btn-outline-secondary"
                        href="{{ route('res_articles.index') }}">
                        Cancel
                    </a>

                    <button class="btn btn-primary" type="submit">

                        <i class="bi bi-person-fill-gear"></i>

                        {{ isset($res_article) ? 'Update' : 'Add' }}

                    </button>

                </div>

            </div>

        </section>

    </form>

</div>
@endsection
