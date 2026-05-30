@extends('admin.partials.master')

@section('title', isset($employee) ? 'Edit Employee' : 'Add Employee')

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
                    {{ isset($employee) ? 'Edit Employee' : 'Add Employee' }}
                </h1>
            </div>
        </div>

        <div class="heading-actions">
            <a class="btn btn-outline-secondary btn-sm"
                href="{{ route('admin.employees.index') }}">
                <i class="bi bi-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
    </div>

    <form class="panel needs-validation"
        action="{{ isset($employee) ? route('admin.employees.update', $employee->id) : route('admin.employees.store') }}"
        method="POST"
        enctype="multipart/form-data"
        novalidate>

        @csrf

        @if(isset($employee))
            @method('PUT')
        @endif

        <section class="row g-3">

            <div class="col-12 col-xl-12">

                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-person-fill-gear"></i>
                            <span>
                                {{ isset($employee) ? 'Edit Employee' : 'Add Employee' }}
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
                            Full Name
                            <span class="text-danger">*</span>
                        </label>
                        <input class="form-control"name="name"type="text"value="{{ old('name', $employee->name ?? '') }}"required>
                        @error('name')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Image --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label">Email<span class="text-danger">*</span></label>
                        <input class="form-control"name="email"type="email"value="{{ old('email', $employee->email ?? '') }}"required>
                        @error('email')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone<span class="text-danger">*</span></label>
                        <input name="phone"class="form-control"type="text"value="{{ old('phone', $employee->phone ?? '') }}"required>
                        @error('phone')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Password<span class="text-danger">*</span></label>
                        <input name="password"class="form-control" placeholder="Only enter when updating, otherwise leave blank (min: 6)" type="password" required>
                        @error('password')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Role<span class="text-danger">*</span></label>
                        <select name="role_id" class="form-control" required>
                            <option value="" disabled selected>Select Role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" {{ (old('role_id', $employee->role_id ?? '') == $role->id) ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('role_id')
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