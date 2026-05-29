@extends('admin.partials.master')
@section('title', 'Students')
@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Data</p>
                <h1 class="h3 mb-1">Students</h1>
            </div>
        </div>

    </div>

    <section class="panel">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title"> <i class="bi bi-table" aria-hidden="true"></i><span> Students</span>
                </h2>
            </div>
            <!-- <div>
                <div class="alert alert-primary" role="alert">
                    <strong>
                        <a href="{{ route('contactus_socalmediya.create') }}"><i class="bi bi-plus-lg"></i>Contactus Socalmediya
                            Section</a></strong></div>
                <input class="form-control form-control-sm table-search" type="search" placeholder="Search orders"
                    data-table-search="ordersTable" aria-label="Search orders">
            </div> -->
        </div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table align-middle mb-0" id="ordersTable" data-searchable-table>
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                        <tr>
                            <td class="fw-semibold">{{ $index+1 }}</td>
                            <td>
                                <div class="table-media">
                                    <strong>{{ $user->name ?? '' }}</strong><br>
                                </div>
                            </td>
                            <td>{{ $user->email ?? '' }}</td>
                            <td>{{ $user->phone ?? '' }}</td>
                            <td>
                                <div class="actions">
                                    <!--  -->
                                    <a href="{{ route('admin.students.delete',$user->id) }}"><button
                                            class="btn btn-light btn-sm" onclick="return confirm('Are you sure you want to delete this record?')" type="button">Delete</button></a>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
