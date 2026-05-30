@extends('admin.partials.master')
@section('title', 'role')
@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Data</p>
                <h1 class="h3 mb-1">Roles</h1>
            </div>
        </div>

    </div>

    <section class="panel">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title"> <i class="bi bi-table" aria-hidden="true"></i><span>Role Base</span>
                </h2>
            </div>
            <div>
                <div class="alert alert-primary" role="alert"><strong><a
                            href="{{ route('role.create') }}"><i class="bi bi-plus-lg"></i> Add
                            Role</a></strong></div>
                <input class="form-control form-control-sm table-search" type="search" placeholder="Search orders"
                    data-table-search="ordersTable" aria-label="Search orders">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0" id="ordersTable" data-searchable-table>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                    </div>
                @endif
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Role Name</th>
                        <th>Permissions</th>
                        <th>Users</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $index => $role)
                        <tr>
                            <td class="fw-semibold">{{ $index+1 }}</td>
                            <td>
                                <div class="table-media">
                                    <strong>{{ $role->name }}</strong><br>
                                    <small>{{ $role->slug }}</small>
                                </div>
                            </td>
                            <td><span class="badge text-bg-primary">{{ $role->permissions->count() }}
                                    permissions</span></td>
                            <td>{{ $role->users->count() }} Users</td>
                            <td>
                                <!-- <button class="btn btn-light btn-sm" type="button">View</button> -->
                                <a href="{{route('role.edit',$role->id)}}"><button class="btn btn-light btn-sm" type="button">Edit</button></a>
                                <a href="{{route('role.delete',$role->id)}}"><button class="btn btn-light btn-sm" type="button">Delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
