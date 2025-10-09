@extends('user.main')


@section('links')
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
@endsection

@section('content')
<header class="page-header">
  <div class="page-title">
    <h1>Notifications</h1>
    <p>We'll send you notifications for activities.</p>
  </div>
</header>
@endsection
