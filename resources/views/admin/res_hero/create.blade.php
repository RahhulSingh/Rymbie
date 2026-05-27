@extends('admin.partials.master')

@section('title', isset($res_hero) ? 'Edit Resource Hero' : 'Add Resource Hero')

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
                    {{ isset($res_hero) ? 'Edit Resource Hero' : 'Add Resource Hero' }}
                </h1>
            </div>
        </div>

        <div class="heading-actions">
            <a class="btn btn-outline-secondary btn-sm"
                href="{{ route('res_hero.index') }}">
                <i class="bi bi-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
    </div>

    <form class="panel needs-validation"
        action="{{ isset($res_hero) ? route('res_hero.update',$res_hero->id) : route('res_hero.store') }}"
        method="POST"
        enctype="multipart/form-data"
        novalidate>

        @csrf

        @if(isset($res_hero))
            @method('PUT')
        @endif

        <section class="row g-3">

            <div class="col-12 col-xl-12">

                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-person-fill-gear"></i>
                            <span>
                                {{ isset($res_hero) ? 'Edit Resource Hero' : 'Add Resource Hero' }}
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

                        <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close">
                        </button>
                    </div>
                @endif

                <div class="row">

                    {{-- Title --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Title
                            <span class="text-danger">*</span>
                        </label>

                        <input class="form-control"
                            name="title"
                            type="text"
                            value="{{ old('title', $res_hero->title ?? '') }}"
                            required>

                        @error('title')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Image --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Image
                            <span class="text-danger">*</span>
                        </label>

                        <input class="form-control"
                            name="image"
                            type="file"
                            {{ isset($res_hero) ? '' : 'required' }}>

                        @error('image')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(isset($res_hero) && $res_hero->image)
                            <div class="mt-3">
                                <img src="{{ asset('uploads/res_hero/'.$res_hero->image) }}"
                                    width="120"
                                    class="rounded border">
                            </div>
                        @endif

                    </div>
                    <div class="col-md-12 mb-3">

                        <label class="form-label">
                            Description
                            <span class="text-danger">*</span>
                        </label>

                        <textarea name="description"
                            class="form-control" required>{{ old('description', $res_hero->description ?? '') }}</textarea>

                        @error('description')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                </div>

                {{-- Buttons --}}
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">

                    <a class="btn btn-outline-secondary"
                        href="{{ route('res_hero.index') }}">
                        Cancel
                    </a>

                    <button class="btn btn-primary" type="submit">

                        <i class="bi bi-person-fill-gear"></i>

                        {{ isset($res_hero) ? 'Update' : 'Add' }}

                    </button>

                </div>

            </div>

        </section>

    </form>

</div>
@endsection