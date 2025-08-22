@extends('layouts.app')

@section('content')
<div class="login-container">
    <h2>{{ __('login') }}</h2>
    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <input type="email" name="email" placeholder="{{ __('email') }}" required>
        <input type="password" name="password" placeholder="{{ __('password') }}" required>
        <button type="submit">{{ __('sign_in') }}</button>
    </form>
</div>
@endsection
