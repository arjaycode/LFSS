@extends('welcome')

@section('content')
<div class="login-wrapper" data-aos="fade-right" data-aos-duration=1000>
  <h1 class="title">Sign Up</h1>
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
      <div class="mb-0">
        <label for="confirm-password" class="form-label input-label mb-0">Confirm Password</label>
        <input type="text" class="form-control rounded" id="confirm-password" name="confirm-password">
      </div>

      <div class="role-wrapper mb-3">
        <label for="roles" class="form-label input-label mb-0">Select account type: </label>
        <select name="roles" class="form-select form-select-sm roles rounded" aria-label="Small select example">
          <option value="student" selected>Student</option>
          <option value="staff">Staff</option>
        </select>
      </div>
      <button type="submit" class="btn login-btn rounded">Sign Up</button>


    </form>
  </div>
</div>
@endsection
