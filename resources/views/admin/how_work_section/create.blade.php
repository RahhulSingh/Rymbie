@extends('admin.partials.master')

@section('title', isset($how) ? 'Edit How Work Section' : 'Add How Work Section')

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
                    {{ isset($how) ? 'Edit How Work Section' : 'Add How Work Section' }}
                </h1>
            </div>
        </div>

        <div class="heading-actions">
            <a class="btn btn-outline-secondary btn-sm" href="{{ route('how_work_section.index') }}">
                <i class="bi bi-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
    </div>

    <form class="panel needs-validation"
        action="{{ isset($how) ? route('how_work_section.update',$how->id) : route('how_work_section.store') }}"
        method="POST" novalidate>

        @csrf

        @if(isset($how))
            @method('PUT')
        @endif

        <section class="row g-3">

            <div class="col-12 col-xl-12">

                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-person-fill-gear"></i>
                            <span>
                                {{ isset($how) ? 'Edit How Work Section' : 'Add How Work Section' }}
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

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Section Key<span class="text-danger">*</span></label>
                        <select name="section_key" class="form-control form-select" required>

                            <option value="" disabled selected >Select Section</option>

                            <option value="how_works"
                                {{ old('section_key', $how->section_key ?? '') == 'how_works' ? 'selected' : '' }}>
                                How Works
                            </option>

                            <option value="get_started"
                                {{ old('section_key', $how->section_key ?? '') == 'get_started' ? 'selected' : '' }}>
                                Get Started
                            </option>


                        </select>
                        @error('section_key')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title<span class="text-danger">*</span></label>
                        <input class="form-control" name="title" type="text"
                            value="{{ old('title', $how->title ?? '') }}"
                            required>
                        @error('title')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Description<span class="text-danger">*</span></label>
                        <textarea class="form-control" name="description" type="text"
                            required>{{ old('description', $how->description ?? '') }}</textarea>
                        @error('description')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>

                {{-- Buttons --}}
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">

                    <a class="btn btn-outline-secondary" href="{{ route('how_work_section.index') }}">
                        Cancel
                    </a>

                    <button class="btn btn-primary" type="submit">

                        <i class="bi bi-person-fill-gear"></i>

                        {{ isset($how) ? 'Update' : 'Add' }}

                    </button>

                </div>

            </div>

        </section>

    </form>

</div>
@endsection
