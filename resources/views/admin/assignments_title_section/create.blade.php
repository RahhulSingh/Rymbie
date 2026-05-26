@extends('admin.partials.master')

@section('title', isset($assignment) ? 'Edit Assignments Title Section' : 'Add Assignments Title Section')

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
                    {{ isset($assignment) ? 'Edit Assignments Title Section' : 'Add Assignments Title Section' }}
                </h1>
            </div>
        </div>

        <div class="heading-actions">
            <a class="btn btn-outline-secondary btn-sm"
                href="{{ route('assignments_title_section.index') }}">
                <i class="bi bi-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
    </div>

    <form class="panel needs-validation"
        action="{{ isset($assignment) ? route('assignments_title_section.update',$assignment->id) : route('assignments_title_section.store') }}"
        method="POST" enctype="multipart/form-data" novalidate>

        @csrf

        @if(isset($assignment))
            @method('PUT')
        @endif

        <section class="row g-3">

            <div class="col-12 col-xl-12">

                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-person-fill-gear"></i>
                            <span>
                                {{ isset($assignment) ? 'Edit Assignments Title Section' : 'Add Assignments Title Section' }}
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
                        <label class="form-label">
                            Icon
                            <span class="text-danger">*</span>
                        </label>

                        <input class="form-control" name="icon" rows="3"
                            value="{{ old('icon', $assignment->icon ?? '') }}" type="file">

                        @error('icon')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="col-md-6 mb-3">

                        <label class="form-label">Title<span class="text-danger">*</span>
                        </label>

                        <input name="title" class="form-control"
                            value="{{ old('title', $assignment->title ?? '') }}">

                        @error('title')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Description<span class="text-danger">*</span></label>
                        <textarea name="description" class="form-control" rows="3">{{ old('description', $assignment->description ?? '') }}</textarea>
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
                        href="{{ route('assignments_title_section.index') }}">
                        Cancel
                    </a>

                    <button class="btn btn-primary" type="submit">

                        <i class="bi bi-person-fill-gear"></i>

                        {{ isset($assignment) ? 'Update' : 'Add' }}

                    </button>

                </div>

            </div>

        </section>

    </form>

</div>
@endsection
