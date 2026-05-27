@extends('admin.partials.master')

@section('title', isset($service) ? 'Edit Service' : 'Add Service')

@section('content')

<div class="container-fluid px-3 px-lg-2 py-4">

    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-gear" aria-hidden="true"></i>
            </span>

            <div>
                <p class="eyebrow mb-1">Management</p>

                <h1 class="h3 mb-1">
                    {{ isset($service) ? 'Edit Service' : 'Add Service' }}
                </h1>
            </div>
        </div>

        <div class="heading-actions">
            <a class="btn btn-outline-secondary btn-sm"
                href="{{ route('services_section.index') }}">
                <i class="bi bi-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
    </div>

    <form class="panel needs-validation"
        action="{{ isset($service) ? route('services_section.update', $service->id) : route('services_section.store') }}"
        method="POST"
        novalidate>

        @csrf

        @if(isset($service))
            @method('PUT')
        @endif

        <section class="row g-3">

            <div class="col-12 col-xl-12">

                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-gear"></i>
                            <span>
                                {{ isset($service) ? 'Edit Service' : 'Add Service' }}
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
                            value="{{ old('title', $service->title ?? '') }}"
                            placeholder="e.g. Custom-Written Assignments"
                            required>

                        @error('title')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Description --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Description
                            <span class="text-danger">*</span>
                        </label>

                        <input class="form-control @error('description') is-invalid @enderror"
                            name="description"
                            type="text"
                            value="{{ old('description', $service->description ?? '') }}"
                            placeholder="e.g. Get tailored assignments based on your requirements."
                            required>

                        @error('description')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- SVG Icon --}}
                    <div class="col-md-12 mb-3">
                        <label class="form-label">
                            SVG Icon Code
                            <span class="text-danger">*</span>
                        </label>

                        <textarea class="form-control @error('svg_icon') is-invalid @enderror"
                            name="svg_icon"
                            rows="8"
                            placeholder='Paste full SVG code here, e.g. <svg width="39" height="39" ...>...</svg>'
                            required>{{ old('svg_icon', $service->svg_icon ?? '') }}</textarea>

                        @error('svg_icon')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Icon Preview --}}
                        @if(isset($service) && $service->svg_icon)
                            <div class="mt-3">
                                <label class="form-label text-muted">Current Icon Preview:</label>
                                <div style="width:39px;height:39px;">
                                    {!! $service->svg_icon !!}
                                </div>
                            </div>
                        @endif
                    </div>

                </div>

                {{-- Buttons --}}
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">
                    <a class="btn btn-outline-secondary"
                        href="{{ route('services_section.index') }}">
                        Cancel
                    </a>

                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-check-circle"></i>
                        {{ isset($service) ? 'Update' : 'Add' }}
                    </button>
                </div>

            </div>

        </section>

    </form>

</div>

@endsection
