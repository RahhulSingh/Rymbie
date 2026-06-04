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
        <form class="card register_form" method="POST" action="{{ route('password.update') }}">
          @csrf
          @if(session('success'))
              <div class="alert alert-success mb-3 mt-3">
                  {{ session('success') }}
              </div>
          @endif
          @if(session('error'))
              <div class="alert alert-danger mb-3 mt-3">
                  {{ session('error') }}
              </div>
          @endif
          <div class="field">
            <input type="hidden" class="form-control" name="token" value="{{ $token }}"><br>
            <input type="email" name="email" class="form-control" placeholder="Email"><br>
            <input type="password" name="password" class="form-control" placeholder="New Password"><br>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password"><br>
            <button type="submit" class="register_button mt-3">Reset Password</button>

          </div>
        </form>
      </div>
    </div>

  </section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>

</html>