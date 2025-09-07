@extends('welcome')

@section('text')
<p class="header-text">
  Don't have an account? <a href=" {{ url('/create/user/account') }}" class="header-link">Create new account.</a>
</p>
@endsection

@section('content')
<div class="login-wrapper" data-aos="fade-right" data-aos-duration=1000>
  <h1 class="title">Log In</h1>
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
      <button type="submit" class="btn login-btn rounded">Log In</button>


    </form>
  </div>
</div>
@endsection
