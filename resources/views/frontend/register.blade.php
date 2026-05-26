<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
  <section class="login_up">
    <div class="container">
      <div class="login_form">
        <form class="card">
          <div class="peraheding_bix">
            <h1 class="one_hedding">Create Your Account</h1>
            <p class="subtitle">Sign up to get expert help on assignments, dissertations & more.</p>
          </div>
          <div class="field">
            <input type="text" placeholder="Full Name" autocomplete="name" />
          </div>
          <div class="field">
            <input type="email" placeholder="Email Address" autocomplete="email" />
          </div>
          <div class="field">
            <input type="tel" placeholder="Phone Number" autocomplete="tel" />
          </div>
          <div class="field">
            <input type="password" placeholder="Password" autocomplete="new-password" />
          </div>
          <div class="field">
            <input type="password" placeholder="Confirm Password" autocomplete="new-password" />
          </div>

          <button class="register_button">Register Now</button>

          <p class="already_textlogin_move">Already have an account? <a href="{{route('frontend.login')}}">Log in</a></p>
        </form>
      </div>
    </div>

  </section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>