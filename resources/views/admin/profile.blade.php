@extends('admin.partials.master')
@section('title', 'add-users')
@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Account</p>
                <h1 class="h3 mb-1">Profile</h1>
                <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.</p>
            </div>
        </div>
    </div>

    <section class="row g-3">
        <div class="col-12 col-xl-4">
            <div class="panel h-100 text-center profile-card">
                <!-- <div class="profile-cover"><img src="../assets/images/png/dasher-ui-bootstrap-5.jpg"
                                alt="adminHMD dashboard preview"></div>
                        <img class="avatar-img avatar-xl profile-photo" src="../assets/images/avatar/avatar.jpg"
                            alt="Admin Hasan"> -->
                <h2 class=" mt-3 mb-3">Profile</h2>
                <!-- <p class="text-muted mb-3">Product Administrator</p> -->
                <div class="d-flex justify-content-center gap-2"><span
                        class="badge text-bg-primary">{{ auth()->user()->role->name ?? '' }}</span>
                </div>
                <div class="info-list mt-4 text-start">
                    <div>
                        <span>Name</span><strong>{{ auth()->user()->name ?? '' }}</strong>
                    </div>
                    <div>
                        <span>Email</span><strong>{{ auth()->user()->email ?? '' }}</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-8">
            <form class="panel needs-validation" novalidate method="POST"
                action="{{ route('admin.profile.update') }}">
                @csrf
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-person-gear"
                                aria-hidden="true"></i><span>Profile Settings</span></h2>
                        <p class="text-muted mb-0">Update your account profile and contact details.</p>
                    </div>
                </div>
                {{-- SUCCESS MESSAGE --}}
                @if(session('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">

                        {{ session('success') }}

                        <button type="button" class="btn-close" data-bs-dismiss="alert">
                        </button>

                    </div>

                @endif

                {{-- VALIDATION ERRORS --}}
                @if($errors->any())

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">

                        <ul class="mb-0">

                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                        <button type="button" class="btn-close" data-bs-dismiss="alert">
                        </button>

                    </div>

                @endif
                <div class="row g-3">
                    <div class="col-md-6"><label class="form-label">Name</label><input class="form-control" name="name"
                            type="text" value="{{ auth()->user()->name }}" required>
                        <div class="invalid-feedback">Name is required.</div>
                    </div>
                    <div class="col-md-6"><label class="form-label">Email</label><input class="form-control"
                            name="email" type="email" value="{{ auth()->user()->email }}" required>
                        <div class="invalid-feedback">Enter a valid email.</div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4"><button class="btn btn-primary" type="submit"><i
                            class="bi bi-check2-circle" aria-hidden="true"></i> Update Profile</button></div>
            </form>
        </div>
    </section>
</div>
</main>
@endsection
