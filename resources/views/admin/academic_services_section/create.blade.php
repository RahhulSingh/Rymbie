@extends('admin.partials.master')

@section('title', isset($academic) ? 'Edit Academic Services Section' : 'Add Academic Services Section')

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
                    {{ isset($academic) ? 'Edit Academic Services Section' : 'Add Academic Services Section' }}
                </h1>
            </div>
        </div>

        <div class="heading-actions">
            <a class="btn btn-outline-secondary btn-sm"
                href="{{ route('academic_services_section.index') }}">
                <i class="bi bi-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
    </div>

    <form class="panel needs-validation"
        action="{{ isset($academic) ? route('academic_services_section.update',$academic->id) : route('academic_services_section.store') }}"
        method="POST"
        enctype="multipart/form-data"
        novalidate>

        @csrf

        @if(isset($academic))
            @method('PUT')
        @endif

        <section class="row g-3">

            <div class="col-12 col-xl-12">

                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-person-fill-gear"></i>
                            <span>
                                {{ isset($academic) ? 'Edit Academic Services Section' : 'Add Academic Services Section' }}
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


                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Icon
                            <span class="text-danger">*</span>
                        </label>

                        <input class="form-control"
                            name="icon"
                            type="text"
                            value="{{ old('icon', $academic->icon ?? '') }}"
                            required>

                        @error('title')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Content }}
                    <div class="col-md-12 mb-3">

                        <label class="form-label">Title<span class="text-danger">*</span>
                        </label>

                        <textarea name="content"
                            id="content"
                            class="form-control">{{ old('content', $academic->content ?? '') }}</textarea>

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
                        href="{{ route('hero_section.index') }}">
                        Cancel
                    </a>

                    <button class="btn btn-primary" type="submit">

                        <i class="bi bi-person-fill-gear"></i>

                        {{ isset($hero) ? 'Update' : 'Add' }}

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