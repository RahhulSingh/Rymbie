<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loginup</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
    <section class="login_up register_now">
        <div class="container">
            <div class="login_form">
                <form class="card register_form" action="{{ route('frontend.login.check') }}"
                    method="POST">
                    @csrf
                    <div class="peraheding_bix">
                        <h1 class="one_hedding">Welcome Back</h1>
                        <p class="subtitle">Log in to access your dashboard and get assignment support.</p>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="field">
                        <label>Email Address</label>
                        <input type="email" name="email" autocomplete="email" />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" autocomplete="new-password" />
                        @error('password')
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
                    <button class="register_button">Login Now</button>

                    <div>
                        <div><p class="already_textlogin_move"> Don’t have an account? <a
                            href="{{ route('frontend.register') }}"> Register here </a> </p></div>
                        <div><a href="{{ route('frontend.forget_password') }}" >Forgot Password?</a></div>
                        
                    </div>
                    

                    
                </form>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>





</body>

</html>
