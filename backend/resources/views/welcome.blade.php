<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FindersKeeperz - Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/welcome.css'])
</head>
<body>
  <header class="header">
    <div class="logo-section">
      <img src="img/Logo.svg" alt="" class="header-logo">
      <span class="logo-title">FINDERSKEEPERZ</span>
    </div>
  </header>
  <div class="container">
    <div class="login-wrapper">
      <!-- Logo Section -->


      <div class="login-card">
        <!-- Profile Icon -->
        <div class="profile-icon">
          <i class="fas fa-user"></i>
        </div>

        <!-- Login Form -->
        <form method="POST" action="#">
          @csrf

          <div class="mb-3">
            <label for="username" class="form-label input-label mb-0">Username</label>
            <input type="text" class="form-control rounded" id="username">
          </div>
          <div class="mb-0">
            <label for="password" class="form-label input-label mb-0">Password</label>
            <input type="text" class="form-control rounded" id="password" name="password">
          </div>
          <div>
            <p class="forgot-password-text">Forgot your password? <a href="#" class="link">Click Here</a></p>
          </div>
          <div class="role-wrapper mb-3">
            <label for="roles" class="form-label input-label mb-0">Select account type: </label>
            <select name="roles" class="form-select form-select-sm roles rounded" aria-label="Small select example">
              <option value="student" selected>Student</option>
              <option value="staff">Staff</option>
            </select>
          </div>
          <button type="submit" class="btn login-btn rounded">Log In</button>


        </form>
      </div>
    </div>

    <!-- Welcome Section -->
    <div class="welcome-section">
      <img src="img/Logo.svg" class="welcome-logo" alt="">
      <div class="logo-text">FINDERSKEEPERZ</div>
      <div class="welcome-text">WELCOME.</div>
    </div>
  </div>

  <script>
    function selectRole(role) {
      const button = document.querySelector('.btn-role');
      button.innerHTML = `<i class="fas fa-user-tag" style="margin-right: 5px;"></i>${role}<i class="fas fa-chevron-down" style="margin-left: 5px;"></i>`;

      // You can add hidden input to store selected role
      let roleInput = document.querySelector('input[name="role"]');
      if (!roleInput) {
        roleInput = document.createElement('input');
        roleInput.type = 'hidden';
        roleInput.name = 'role';
        document.querySelector('form').appendChild(roleInput);
      }
      roleInput.value = role;
    }

  </script>
</body>
</html>
