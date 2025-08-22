@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    @foreach($servers as $server)
    <div class="card server-card">
        <h3>{{ $server->name }}</h3>
        @if($server->status == 'stopped')
            <p style="color:red; font-weight:bold;">انتهاء الاشتراك</p>
        @else
        <div class="status">
            <img src="{{ $server->status == 'online' ? asset('themes/WooDHosT/assets/images/online.png') : asset('themes/WooDHosT/assets/images/offline.png') }}" alt="status">
            <span>{{ ucfirst($server->status) }}</span>
        </div>

        <p><strong>Owner:</strong> {{ $server->owner->name }}</p>

        <p><strong>CPU:</strong> {{ $server->cpu }}%</p>
        <div class="stat-bar">
            <div class="stat-fill" data-width="{{ $server->cpu }}"></div>
        </div>

        <p><strong>Memory:</strong> {{ $server->memory }} MB</p>
        <div class="stat-bar">
            <div class="stat-fill" data-width="{{ ($server->memory / $server->memory_limit) * 100 }}"></div>
        </div>

        <p><strong>Disk:</strong> {{ $server->disk }} MB</p>
        <div class="stat-bar">
            <div class="stat-fill" data-width="{{ ($server->disk / $server->disk_limit) * 100 }}"></div>
        </div>

        <button onclick="window.location='{{ route('admin.servers.manage', $server->id) }}'">{{ __('manage_server') }}</button>
        @endif
    </div>
    @endforeach
</div>
@endsection
