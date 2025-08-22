@extends('layouts.app')
@section('content')
<div class="dashboard-container">
    <div class="card">
        <h3>{{ $server->name }}</h3>
        <p><strong>Owner:</strong> {{ $server->owner->name }}</p>
        <p><strong>Status:</strong> {{ $server->status }}</p>
        <p><strong>CPU:</strong> {{ $server->cpu }}%</p>
        <p><strong>Memory:</strong> {{ $server->memory }} MB</p>
        <p><strong>Disk:</strong> {{ $server->disk }} MB</p>
        <button onclick="window.location='{{ route('dashboard') }}'">Back</button>
    </div>
</div>
@endsection
