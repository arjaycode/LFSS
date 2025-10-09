@extends('user.main')


@section('links')
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
@endsection

@section('content')
<header class="page-header">
  <div class="page-title">
    <h1>My Claims</h1>
    <p>Your requested claims for lost items.</p>
  </div>
</header>
@endsection
