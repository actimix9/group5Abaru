@extends('layouts.template')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('page-subtitle', 'Your personal workspace')

@section('content')

@php
    $quickLinks = [
        [
            'title' => 'Students',
            'description' => 'Manage student records',
            'icon' => 'fa-user-graduate',
            'route' => 'students.index',
            'accent' => '#4679f5',
            'soft' => '#eaf1ff',
        ],
        [
            'title' => 'Subjects',
            'description' => 'Explore subject information',
            'icon' => 'fa-book-open',
            'route' => 'subjects.index',
            'accent' => '#e94e98',
            'soft' => '#ffe9f4',
        ],
        [
            'title' => 'Groups',
            'description' => 'Manage student groups',
            'icon' => 'fa-users',
            'route' => 'groups.index',
            'accent' => '#9257ec',
            'soft' => '#f0e7ff',
        ],
        [
            'title' => 'Halls',
            'description' => 'View hall information',
            'icon' => 'fa-building',
            'route' => 'halls.index',
            'accent' => '#07ad9d',
            'soft' => '#e0f8f2',
        ],
        [
            'title' => 'Timetables',
            'description' => 'View class schedules',
            'icon' => 'fa-calendar-alt',
            'route' => 'timetables.index',
            'accent' => '#f29237',
            'soft' => '#fff0df',
        ],
    ];
@endphp

<div class="row justify-content-center">

    <div class="col-xl-11 col-lg-12">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <!-- WELCOME CARD -->
        <div class="welcome-card">

            <span class="welcome-tag">
                <i class="fas fa-star"></i>
                WELCOME BACK
            </span>

            <h2>Hello, {{ auth()->user()->name ?? 'User' }}! 👋</h2>

            <p>
                Welcome to your personal dashboard!
                Everything you need to manage your
                academic information is right here.
                Let's make today productive!
            </p>

            <div class="welcome-divider"></div>

            <div class="login-status">
                <div class="login-icon">
                    <i class="fas fa-check-circle"></i>
                </div>

                <div>
                    <h4 class="login-title">You're successfully logged in!</h4>
                    <p class="login-subtitle">Your workspace is ready.</p>
                </div>
            </div>

        </div>

        <!-- QUICK ACCESS HEADER -->
        <div class="section-heading">

            <h3 class="section-title">
                <i class="fas fa-th-large" style="color: #605cf5; margin-right: .5rem;"></i>
                Quick Access
            </h3>

            <p class="section-subtitle">
                Navigate to your modules with one click.
            </p>

        </div>

        <!-- QUICK ACCESS CARDS -->
        <div class="row">

            @foreach ($quickLinks as $item)
                @php
                    $enabled = Route::has($item['route']);
                    $tag = $enabled ? 'a' : 'div';
                @endphp

                <div class="col-xl-4 col-md-6 mb-4">

                    <{{ $tag }}
                        class="quick-card {{ $enabled ? '' : 'quick-disabled' }}"
                        @if ($enabled)
                            href="{{ route($item['route']) }}"
                        @else
                            aria-disabled="true"
                            title="Route not configured"
                        @endif
                        style="--accent: {{ $item['accent'] }}; --soft: {{ $item['soft'] }};">

                        <div class="d-flex justify-content-between align-items-center">

                            <div class="quick-icon">
                                <i class="fas {{ $item['icon'] }}"></i>
                            </div>

                            <span class="quick-arrow">
                                <i class="fas fa-arrow-up"></i>
                            </span>

                        </div>

                        <h4 class="quick-name">{{ $item['title'] }}</h4>

                        <p class="quick-description">{{ $item['description'] }}</p>

                    </{{ $tag }}>

                </div>
            @endforeach

        </div>

        <!-- BOTTOM INFORMATION -->
        <div class="info-banner">

            <div class="info-banner-icon">
                <i class="fas fa-info-circle"></i>
            </div>

            <div>
                <h4 class="info-banner-title">Your Workspace</h4>

                <p class="info-banner-subtitle">
                    Use the sidebar or Quick Access cards
                    to navigate between your available modules.
                </p>
            </div>

        </div>

    </div>

</div>

@endsection