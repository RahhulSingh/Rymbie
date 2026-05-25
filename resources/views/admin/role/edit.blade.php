@extends('admin.partials.master')
@section('title', 'role')
@section('content')
<div class="container-fluid px-3 px-lg-2 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-person-fill-gear" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Management</p>
                <h1 class="h3 mb-1">Edit Role</h1>
            </div>
        </div>
        <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="users.html"><i
                    class="bi bi-arrow-left" aria-hidden="true"></i> Back </a></div>
    </div>
    <form class="panel needs-validation" action="{{ route('role.update',$roleEdit->id) }}" method="POST" novalidate>
        @csrf
        <section class="row g-3">
            <div class="col-12 col-xl-6">

                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-person-fill-gear"></i></i><span>Edit
                                Role</span>
                        </h2>

                    </div>

                </div>
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row g-3">
                    <div class="col-md-12"><label class="form-label">Role Name<span
                                class="text-danger">*</span></label><input class="form-control"
                            value="{{ old('name', $roleEdit->name) }}" name="name" type="text"
                            required>
                        <div class="invalid-feedback">Role name is required.</div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">
                    <a class="btn btn-outline-secondary" href="{{ route('role.index') }}">Cancel</a>
                    <button class="btn btn-primary" type="submit"><i class="bi bi-person-fill-gear"></i> Edit
                        Role</button></div>

            </div>
            <div class="col-12 col-xl-6">

                <div class="panel h-100">
                    <div class="card-header text-black mb-2">
                        <h5 class="card-title">
                            <i class="bi bi-shield-fill-exclamation" aria-hidden="true"></i> Assign Permissions
                        </h5>
                    </div>
                    <div class="role p-2">
                        @if($permissions->count() > 0)
                            @foreach($permissions as $module => $modulePermissions)
                                <div class="permission-module mb-4">
                                    <h6 class="fw-bold text-primary mb-2">
                                        {{ ucfirst(str_replace('_', ' ', $module)) }}
                                    </h6>

                                    <div class="d-flex flex-wrap align-items-center gap-3">
                                        @foreach($modulePermissions as $permission)
                                            <div class="form-check-inline">
                                                <input class="form-check-input permission-checkbox" type="checkbox"
                                                    id="permission_{{ $permission->id }}" name="permissions[]"
                                                    value="{{ $permission->id }}"
                                                    {{ in_array($permission->id, old('permissions',$rolePermissions ?? [])) ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    for="permission_{{ $permission->id }}">
                                                    {{ $permission->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center text-muted py-3">
                                <i class="fas fa-exclamation-triangle fa-2x mb-2"></i>
                                <p>No permissions available. Please create permissions first.</p>
                            </div>
                        @endif
                    </div>
                    <div class="mt-3 d-flex justify-content-start gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary" id="select-all">
                            <i class="fas fa-check-square me-1"></i>Select All
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-primary" id="deselect-all">
                            <i class="fas fa-square me-1"></i>Deselect All
                        </button>
                    </div>
                </div>

            </div>
        </section>
    </form>
</div>
@endsection
