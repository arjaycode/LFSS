<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FindersKeeperz - Login</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('img/Logo.svg') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}
  @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/welcome.css'])
</head>
<body>
  <header class="header">
    <div class="logo-section">
      <img src="{{ asset('img/Logo.svg') }}" alt="" class="header-logo">
      <span class="logo-title">FINDERSKEEPERZ</span>
    </div>
    @yield('text')
  </header>
  <div class="container">
    <!-- Login Section -->
    @yield('content')
    <!-- Welcome Section -->
    <div class="welcome-section" data-aos="fade-left" data-aos-duration=1000>
      <img src="{{ asset('/img/Logo.svg') }}" class="welcome-logo" alt="">
      <div class="logo-text">FINDERSKEEPERZ</div>
      <div class="welcome-text">WELCOME.</div>
    </div>
  </div>
</body>
</html>
