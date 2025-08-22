@extends('layouts.app')
@section('content')
<div class="dashboard-container">
    @foreach($users as $user)
    <div class="card">
        <h3>{{ $user->name }}</h3>
        <p>Email: {{ $user->email }}</p>
    </div>
    @endforeach
</div>
@endsection
