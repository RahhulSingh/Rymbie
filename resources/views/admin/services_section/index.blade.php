@extends('admin.partials.master')
@section('title', 'Services Section')
@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Data</p>
                <h1 class="h3 mb-1">Services Section</h1>
            </div>
        </div>
    </div>

    <section class="panel">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title"> <i class="bi bi-gear" aria-hidden="true"></i><span> Services List</span>
                </h2>
            </div>
            <div>
                <div class="alert alert-primary" role="alert">
                    <strong>
                        <a href="{{ route('services_section.create') }}"><i class="bi bi-plus-lg"></i> Add New Service</a>
                    </strong>
                </div>
                <input class="form-control form-control-sm table-search" type="search" placeholder="Search services"
                    data-table-search="servicesTable" aria-label="Search services">
            </div>
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
            <table class="table align-middle mb-0" id="servicesTable" data-searchable-table>
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Icon Preview</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $index => $service)
                        <tr>
                            <td class="fw-semibold">{{ $index+1 }}</td>
                            <td>
                                <div class="table-media">
                                    <strong>{{ $service->title ?? '' }}</strong>
                                </div>
                            </td>
                            <td>{{ Str::limit($service->description, 60) }}</td>
                            <td>
                                <div style="width:39px;height:39px;">
                                    {!! $service->svg_icon !!}
                                </div>
                            </td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('services_section.edit', $service->id) }}">
                                        <button class="btn btn-light btn-sm" type="button">Edit</button>
                                    </a>
                                    <a href="{{ route('services_section.delete', $service->id) }}">
                                        <button class="btn btn-light btn-sm text-danger" 
                                            onclick="return confirm('Are you sure you want to delete this service?')" 
                                            type="button">Delete</button>
                                    </a>
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
