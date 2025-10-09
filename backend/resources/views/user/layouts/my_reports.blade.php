@extends('user.main')


@section('links')
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
@endsection

@section('content')
<header class="page-header">
  <div class="page-title">
    <h1>My Reports</h1>
    <p>Your lost and found reported items.</p>
  </div>
</header>
@endsection
