@extends('welcome')

@section('text')
<p class="header-text">
  Already have an account? <a href=" {{ url('/') }}" class="header-link">Log In.</a>
</p>
@endsection

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="login-wrapper" data-aos="fade-right" data-aos-duration=1000>
  <h1 class="title">Sign Up</h1>
  <div class="login-card">



    <!-- Profile Icon -->
    <div class="profile-icon">
      <i class="fas fa-user"></i>
    </div>

    <!-- Create Form -->
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="container-fluid">
        <div class="row gap-2">
          <div class="mb-3 col p-0">
            <label for="first_name" class="form-label input-label mb-0">Firstname</label>
            <input type="text" class="form-control rounded" name="first_name" id="first_name">
          </div>
          <div class="mb-3 col p-0">
            <label for="last_name" class="form-label input-label mb-0">Lastname</label>
            <input type="text" class="form-control rounded" name="last_name" id="last_name">
          </div>
        </div>
      </div>

      <div class="mb-1">
        <label for="school_id" class="form-label input-label mb-0">School ID</label>
        <input type="text" class="form-control rounded" id="school_id" name="school_id">
      </div>
      <div class="mb-1">
        <label for="email" class="form-label input-label mb-0">Email</label>
        <input type="email" class="form-control rounded" id="email" name="email">
      </div>
      <div class="mb-1">
        <label for="phone_number" class="form-label input-label mb-0">Phone Number</label>
        <input type="text" class="form-control rounded" id="phone_number" name="phone_number">
      </div>

      <div class="container-fluid">
        <div class="row gap-2">
          <div class="mb-3 col p-0">
            <label for="department" class="form-label input-label mb-0">Department</label>
            <input type="text" class="form-control rounded" id="department" name="department">
          </div>
          <div class="mb-3 col p-0">
            <label for="year_level" class="form-label input-label mb-0">Year Level</label>
            <select class="form-select form-select-sm roles rounded" name="year_level" id="year_level">
              <option selected>Select Year</option>
              <option value="1st_year">1st Year</option>
              <option value="2nd_year">2nd Year</option>
              <option value="3rd_year">3rd Year</option>
              <option value="4th_year">4th Year</option>
            </select>
          </div>
        </div>
      </div>

      <div class="role-wrapper mb-3">
        <label for="role" class="form-label input-label mb-0">Select account type: </label>
        <select name="role" id="role" class="form-select form-select-sm roles rounded">
          <option value="student" selected>Student</option>
          <option value="staff">Staff</option>
        </select>
      </div>

      <div class="mb-0">
        <label for="password" class="form-label input-label mb-0">Password</label>
        <input type="password" class="form-control rounded" id="password" name="password">
      </div>
      <div class="mb-0">
        <label for="password_confirmation" class="form-label input-label mb-0">Confirm Password</label>
        <input type="password" class="form-control rounded" id="password_confirmation" name="password_confirmation">
      </div>
      <button type="submit" class="btn login-btn rounded mt-4">Create Account</button>
      <button type="reset" class="btn reset-btn rounded mt-4"><svg width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.719 12A10.719 10.719 0 0 1 1.28 12h.838a9.916 9.916 0 1 0 1.373-5H8v1H2V2h1v4.2A10.71 10.71 0 0 1 22.719 12z" />
          <path fill="none" d="M0 0h24v24H0z" /></svg></button>


    </form>
  </div>
</div>
@endsection
