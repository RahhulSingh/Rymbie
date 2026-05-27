@extends('admin.partials.master')
@section('title', isset($res_guide) ? 'Edit Resource Guide' : 'Add Resource Guide')
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
                    {{ isset($res_guide) ? 'Edit Resource Guide' : 'Add Resource Guide' }}
                </h1>
            </div>
        </div>

        <div class="heading-actions">
            <a class="btn btn-outline-secondary btn-sm"
                href="{{ route('res_guides.index') }}">
                <i class="bi bi-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
    </div>

    <form class="panel needs-validation"
        action="{{ isset($res_guide) ? route('res_guides.update',$res_guide->id) : route('res_guides.store') }}"
        method="POST" enctype="multipart/form-data" novalidate>

        @csrf

        @if(isset($res_guide))
            @method('PUT')
        @endif

        <section class="row g-3">

            <div class="col-12 col-xl-12">

                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-person-fill-gear"></i>
                            <span>
                                {{ isset($res_guide) ? 'Edit Resource Guide' : 'Add Resource Guide' }}
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
                        <input class="form-control" name="icon" id="" rows="3"value="{{ old('icon', $res_guide->icon ?? '') }}">
                        @error('icon')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title<span class="text-danger">*</span></label>
                        <input name="title" class="form-control"
                            value="{{ old('title', $res_guide->title ?? '') }}">
                        @error('title')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Meta<span class="text-secondary">(Optional)</span></label>
                        <input name="meta" class="form-control"
                            value="{{ old('meta', $res_guide->meta ?? '') }}">
                        @error('meta')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">File<span class="text-danger">*</span></label><br>   
                        @if(isset($res_guide))                    
                            @if($res_guide->file)
                                <a href="{{ asset('uploads/res_guides_files/'.$res_guide->file) }}"
                                target="_blank">
                                    View Current File
                                </a> <br>
                            @endif
                        @endif 
                        <input name="file" class="form-control" type="file"
                            value="{{ old('file', $res_guide->file ?? '') }}">
                        @error('file')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                            
                    </div>

                </div>

                {{-- Buttons --}}
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">

                    <a class="btn btn-outline-secondary"
                        href="{{ route('res_guides.index') }}">
                        Cancel
                    </a>

                    <button class="btn btn-primary" type="submit">

                        <i class="bi bi-person-fill-gear"></i>

                        {{ isset($res_guide) ? 'Update' : 'Add' }}

                    </button>

                </div>

            </div>

        </section>

    </form>

</div>
@endsection
