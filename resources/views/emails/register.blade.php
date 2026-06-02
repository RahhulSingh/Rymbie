<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome Email</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --navy: #17285a;
      --white: #ffffff;
    }

    body {
      background-color: var(--navy);
      font-family: 'Nunito', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 32px 16px;
    }

    .email-wrapper {
      width: 100%;
      max-width: 540px;
      margin: 0 auto;
    }

    /* ── Card ── */
    .card {
      background: var(--white);
      border-radius: 12px;


      
      overflow: hidden;
      box-shadow: 0 12px 48px rgba(0,0,0,0.35);
    }

    /* ── Top bar ── */
    .top-bar {
      background: var(--navy);
      padding: 18px 0 16px;
      text-align: center;
    }

    /* Envelope icon SVG */
    .envelope-wrap {
      display: inline-block;
      position: relative;
    }
    .envelope-wrap .spark {
      position: absolute;
      background: var(--white);
      border-radius: 1px;
      opacity: 0.7;
      animation: blink 1.8s ease-in-out infinite alternate;
    }
    .envelope-wrap .spark.s1 { width:3px; height:3px; top:-2px; right:4px; animation-delay:0s; }
    .envelope-wrap .spark.s2 { width:2px; height:8px; top:-6px; right:0px; animation-delay:.3s; }
    .envelope-wrap .spark.s3 { width:8px; height:2px; top:-3px; right:-6px; animation-delay:.6s; }
    @keyframes blink {
      from { opacity:.3; transform: scale(0.8); }
      to   { opacity:1;  transform: scale(1.1); }
    }

    /* ── Welcome Title ── */
    .welcome-section {
      padding: 32px 40px 24px;
      text-align: center;
      border-bottom: 1px solid #eef0f5;
    }

    .welcome-title {
      font-size: 26px;
      font-weight: 800;
      color: var(--navy);
      margin-bottom: 24px;
      letter-spacing: 0.2px;
    }

    /* Handshake illustration box */
    .illustration-box {
      width: 120px;
      height: 80px;
      background: #f5f7fb;
      border: 1.5px solid #e2e6f0;
      border-radius: 8px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    /* Yellow badge inside illustration */
    .illustration-box .badge {
      width: 72px;
      height: 48px;
      background: #f5c842;
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* ── Body Content ── */
    .body-content {
      padding: 28px 40px 32px;
    }

    .greeting {
      font-size: 15px;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 10px;
    }

    .body-text {
      font-size: 14px;
      font-weight: 400;
      color: #4a5578;
      line-height: 1.7;
      margin-bottom: 6px;
    }

    .body-text strong {
      color: var(--navy);
      font-weight: 800;
    }

    .body-text a {
      color: var(--navy);
      font-weight: 700;
      text-decoration: underline;
    }

    /* ── CTA Button ── */
    .cta-wrap {
      text-align: center;
      margin: 28px 0 32px;
    }

    .cta-btn {
      display: inline-block;
      background: var(--navy);
      color: var(--white);
      font-family: 'Nunito', sans-serif;
      font-size: 13px;
      font-weight: 800;
      text-decoration: none;
      padding: 13px 36px;
      border-radius: 4px;
      letter-spacing: 1.2px;
      text-transform: uppercase;
      transition: transform 0.16s ease, box-shadow 0.16s ease, background 0.16s ease;
      box-shadow: 0 4px 16px rgba(23,40,90,0.25);
    }

    .cta-btn:hover {
      background: #1e3370;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(23,40,90,0.35);
    }

    /* ── Divider ── */
    .divider {
      border: none;
      border-top: 1px solid #eef0f5;
      margin: 0 40px;
    }

    /* ── FAQ Section ── */
    .faq-section {
      padding: 24px 40px 36px;
    }

    .faq-title {
      font-size: 15px;
      font-weight: 800;
      color: var(--navy);
      margin-bottom: 10px;
    }

    .faq-text {
      font-size: 14px;
      color: #4a5578;
      line-height: 1.7;
    }

    .faq-text a {
      color: var(--navy);
      font-weight: 700;
      text-decoration: underline;
    }

    /* ── Footer ── */
    .footer {
      background: var(--navy);
      padding: 22px 24px;
      text-align: center;
    }

    .footer-text {
      font-size: 12px;
      color: rgba(255,255,255,0.5);
      line-height: 1.7;
    }

    .footer-text a {
      color: rgba(255,255,255,0.8);
      text-decoration: none;
      font-weight: 700;
    }
    .footer-text a:hover { text-decoration: underline; }

    /* ── Responsive ── */
    @media (max-width: 480px) {
      .welcome-section,
      .body-content,
      .faq-section { padding-left: 24px; padding-right: 24px; }
      .divider { margin: 0 24px; }
    }
  </style>
</head>
<body>

<div class="email-wrapper">
<div class="card">

  <!-- Top bar with envelope -->

  <!-- Welcome + Illustration -->
  <div class="welcome-section">
    <h1 class="welcome-title">Welcome</h1>
    <div class="illustration-box">
      <div class="badge">
        <!-- Handshake SVG -->
        <svg width="44" height="30" viewBox="0 0 44 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- left hand -->
          <path d="M2 18 C4 14 8 12 12 13 L18 15 L22 13" stroke="#17285a" stroke-width="2.2" stroke-linecap="round" fill="none"/>
          <!-- right hand -->
          <path d="M42 18 C40 14 36 12 32 13 L26 15 L22 13" stroke="#17285a" stroke-width="2.2" stroke-linecap="round" fill="none"/>
          <!-- clasped hands -->
          <ellipse cx="22" cy="14" rx="4" ry="3" fill="#17285a" opacity=".9"/>
          <!-- fingers left -->
          <path d="M14 11 C15 8 17 8 18 10" stroke="#17285a" stroke-width="2" stroke-linecap="round" fill="none"/>
          <path d="M17 9 C18 6 20 6 20 9" stroke="#17285a" stroke-width="2" stroke-linecap="round" fill="none"/>
          <!-- fingers right -->
          <path d="M30 11 C29 8 27 8 26 10" stroke="#17285a" stroke-width="2" stroke-linecap="round" fill="none"/>
          <path d="M27 9 C26 6 24 6 24 9" stroke="#17285a" stroke-width="2" stroke-linecap="round" fill="none"/>
          <!-- arm lines -->
          <line x1="2" y1="20" x2="10" y2="18" stroke="#17285a" stroke-width="2.5" stroke-linecap="round"/>
          <line x1="42" y1="20" x2="34" y2="18" stroke="#17285a" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
      </div>
    </div>
  </div>

  <!-- Body -->
  <div class="body-content">
    <p class="greeting">Hello {{ $user->name }},</p>
    <p class="body-text">Thanks for joining. We're really excited to have you on board.</p>

    <div class="cta-wrap">
      <a href="#" class="cta-btn">Login to your account</a>
    </div>
  </div>

  <hr class="divider"/>

  <!-- FAQ -->
  <div class="faq-section">
    <p class="faq-title">Have a question?</p>
    <p class="faq-text">Check out our <a href="#">Knowledge Base</a> for a quick answer!</p>
    <br/>
    <p class="faq-text">You can always contact our <a href="#">24/7 support team</a> via live chat and email. We will be happy to help you!</p>
  </div>

  <!-- Footer -->
  <div class="footer">
    <p class="footer-text">
      You're receiving this email because you signed up at rebrand.io<br/>
      <a href="#">Unsubscribe</a> &nbsp;·&nbsp; <a href="#">Privacy Policy</a><br/>
      © Copyright 2023
    </p>
  </div>

</div>
</div>

</body>
</html>
