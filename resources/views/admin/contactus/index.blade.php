@extends('admin.partials.master')
@section('title', 'Contact us Queries')
@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Data</p>
                <h1 class="h3 mb-1">Contact us Queries</h1>
            </div>
        </div>

    </div>

    <section class="panel">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title"> <i class="bi bi-table" aria-hidden="true"></i><span> Contact us Queries</span>
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
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                </button>
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
                        <th>Message</th>
                        <th>File</th>
                        <th>Preferred contact</th>
                        <th>Terms</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contactusEntries as $index => $cont)
                        <tr>
                            <td class="fw-semibold">{{ $index+1 }}</td>
                            <td>
                                <div class="table-media">
                                    <strong>{{ $cont->name ?? '' }}</strong><br>
                                </div>
                            </td>
                            <td>{{ $cont->email ?? '' }}</td>
                            <td>{{ $cont->phone ?? '' }}</td>
                            <td>{{ $cont->message ?? '' }}</td>
                            <td>
                                @if($cont->file)
                                    <a href="{{ asset('/uploads/contactus_file/'.$cont->file) }}" target="_blank">View File</a>
                                @endif
                            </td>
                            <td>{{ $cont->preferred_contact ?? '' }}</td>
                            <td>{{ $cont->terms ? 'Accepted' : 'Not Accepted' }}</td>
                            <td>
                                <!-- <div class="actions">
                                    <a href="{{ route('contactus_socalmediya.edit',$cont->id) }}"><button
                                            class="btn btn-light btn-sm" type="button">Edit</button></a>
                                    <a href="{{ route('contactus_socalmediya.delete',$cont->id) }}"><button
                                            class="btn btn-light btn-sm" onclick="return confirm('Are you sure you want to delete this record?')" type="button">Delete</button></a>
                                </div> -->

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
