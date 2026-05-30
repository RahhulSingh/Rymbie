@extends('admin.partials.master')
@section('title', 'Assignment Briefs')
@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Data</p>
                <h1 class="h3 mb-1">Assignment Briefs</h1>
            </div>
        </div>

    </div>

    <section class="panel">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title"> <i class="bi bi-table" aria-hidden="true"></i><span> Assignment Briefs</span>
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
                    <span aria-hidden="true">&times;</span>
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
                        <th>Brief file</th>
                        <th>Photo</th>
                        <th>Extra Instructions</th>
                        <th>Deadline</th>
                        <th>Subject</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($assignment as $index => $assi)
                        <tr>
                            <td class="fw-semibold">{{ $index+1 }}</td>
                            <td>
                                <div class="table-media">
                                    <strong>{{ $assi->user->name ?? '' }}</strong><br>
                                </div>
                            </td>
                            <td>{{ $assi->user->email ?? '' }}</td>
                            <td>
                                @if($assi->brief_file)
                                    <a href="{{ asset('/uploads/assignments/'.$assi->brief_file) }}" target="_blank">View File</a>
                                @endif
                            </td>
                            <td>
                                @if($assi->photo)
                                    <img src="{{ asset('/uploads/assignments/'.$assi->photo) }}" alt="Photo" width="100">
                                @endif
                            </td>
                            <td>{{ $assi->extra_instructions ?? '' }}</td>
                            <td>{{ $assi->deadline ?? '' }}</td>
                            <td>{{ $assi->subject ?? '' }}</td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('admin.assignment_briefs.delete',$assi->id) }}"><button
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
