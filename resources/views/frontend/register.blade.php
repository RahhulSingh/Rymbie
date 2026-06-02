<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
    <section class="login_up">
        <div class="container">
            <div class="login_form">
                <form class="card" action="{{ route('frontend.register.store') }}" method="POST">
                    @csrf
                    <div class="peraheding_bix">
                        <h1 class="one_hedding">Create Your Account</h1>
                        <p class="subtitle">Sign up to get expert help on assignments, dissertations & more.</p>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="field">
                        <input type="text" name="name" placeholder="Full Name"
                            value="{{ old('name') }}" autocomplete="name" />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field">
                        <input type="email" name="email" placeholder="Email Address"
                            value="{{ old('email') }}" autocomplete="email" />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field">
                        <input type="tel" name="phone" placeholder="Phone Number"
                            value="{{ old('phone') }}" autocomplete="tel" />
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" autocomplete="new-password" />
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                            autocomplete="new-password" />
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {!! NoCaptcha::display() !!}
                    @error('g-recaptcha-response')
                        <div class="text-danger mt-2 mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                    {!! NoCaptcha::renderJs() !!}
                    <button class="register_button">Register Now</button>

                    <p class="already_textlogin_move">Already have an account? <a
                            href="{{ route('frontend.login') }}">Log in</a></p>
                </form>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
