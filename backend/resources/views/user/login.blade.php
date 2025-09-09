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
    <form method="POST" action="#" class="w-100">
      @csrf

      <div class="container-fluid">
        <div class="row">
          <div class="mb-2 p-0">
            <label for="school_id" class="form-label input-label mb-0">School ID</label>
            <input type="text" class="form-control rounded" id="school_id" name="school_id">
          </div>
          <div class="mb-2 p-0">
            <label for="email" class="form-label input-label mb-0">Email</label>
            <input type="text" class="form-control rounded" id="email" name="email">
          </div>
          <div class="mb-0 p-0">
            <label for="password" class="form-label input-label mb-0">Password</label>
            <input type="text" class="form-control rounded" id="password" name="password">
          </div>
        </div>

      </div>

      <div>
        <p class="forgot-password-text">Forgot your password? <a href="#" class="link">Click Here</a></p>
      </div>
      <button type="submit" class="btn login-btn rounded">Log In</button>
      <button type="reset" class="btn reset-btn rounded"><svg width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.719 12A10.719 10.719 0 0 1 1.28 12h.838a9.916 9.916 0 1 0 1.373-5H8v1H2V2h1v4.2A10.71 10.71 0 0 1 22.719 12z" />
          <path fill="none" d="M0 0h24v24H0z" /></svg></button>


    </form>
  </div>
</div>
@endsection
