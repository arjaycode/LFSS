<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Finderskeeperz | Dashboard</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('img/Logo.svg') }}">
  @yield('links')
</head>
<body>

  <aside class="sidebar">
    <x-user.sidebar></x-user.sidebar>
  </aside>
  <main class="main-content">
    @yield('content')
  </main>

  <script src="js/main.js"></script>
  <script src="js/dashboard.js"></script>
</body>
</html>
