<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') | {{ config('app.name', 'AdminLTE 3') }}</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- AdminLTE -->
    <link rel="stylesheet"
          href="{{ asset('admin/dist/css/adminlte.min.css') }}">

    <style>
        :root {
            --primary: #605cf5;
            --secondary: #9257ed;
            --pink: #ec59aa;
            --navy: #191b54;
            --page-bg: #f7f8fe;
            --dark: #253047;
            --muted: #8290a7;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 13px;
            background: var(--page-bg);
            color: var(--dark);
        }

        /* SIDEBAR */

        .main-sidebar {
            background: linear-gradient(
                180deg,
                #191b54 0%,
                #272168 65%,
                #392170 100%
            ) !important;
        }

        .brand-link {
            height: 76px;
            display: flex;
            align-items: center;
            padding: 16px;
            border-bottom: 1px solid rgba(255,255,255,.1) !important;
            text-decoration: none !important;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg,#6867ff,#ad65ef);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 19px;
            flex-shrink: 0;
            box-shadow: 0 5px 16px rgba(112,95,255,.3);
        }

        .brand-info {
            margin-left: 12px;
            overflow: hidden;
            white-space: nowrap;
        }

        .brand-name {
            font-size: 16px;
            font-weight: 800;
            color: white;
        }

        .brand-subtitle {
            font-size: 9px;
            letter-spacing: 1.2px;
            color: #b3b7e3;
        }

        .sidebar {
            padding: 0 10px 20px;
        }

        .user-panel {
            background: rgba(255,255,255,.07);
            border: 1px solid rgba(255,255,255,.08) !important;
            border-radius: 14px;
            padding: 13px 10px !important;
            margin: 18px 3px 24px !important;
            align-items: center;
        }

        .user-panel .image {
            padding-left: 0;
        }

        .user-avatar {
            background: linear-gradient(135deg,#ed5cb0,#9266ff);
            height: 39px;
            width: 39px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 17px;
        }

        .user-panel .info {
            padding-left: 10px;
            min-width: 0;
        }

        .user-name {
            color: #ffffff;
            font-weight: 700;
            font-size: 12px;
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-email {
            color: #c1c4e8;
            font-size: 10px;
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .sidebar-heading {
            font-size: 10px;
            font-weight: 700;
            color: #a4a8dc;
            letter-spacing: 1.3px;
            padding: 9px 14px;
        }

        .nav-sidebar .nav-link {
            border-radius: 10px;
            color: #d0d2f1 !important;
            margin-bottom: 5px;
            padding: 11px 12px;
            transition: background .2s, color .2s;
        }

        .nav-sidebar .nav-link:hover {
            background: rgba(255,255,255,.1) !important;
            color: #ffffff !important;
        }

        .nav-sidebar > .nav-item > .nav-link.active {
            background: linear-gradient(
                100deg,
                #5d65ff,
                #9955ed
            ) !important;
            color: white !important;
            box-shadow: 0 5px 18px rgba(80,70,230,.28);
        }

        .nav-sidebar .nav-icon {
            font-size: 15px !important;
        }

        .nav-treeview {
            padding-left: 9px;
        }

        .nav-treeview .nav-link {
            padding: 10px 12px;
            font-size: 12px;
        }

        .nav-treeview .nav-link.active {
            background: rgba(255,255,255,.12) !important;
            color: white !important;
        }

        .nav-treeview .nav-link.is-unavailable {
            opacity: .5;
            cursor: not-allowed;
        }

        .sidebar-divider {
            border-top: 1px solid rgba(255,255,255,.12);
            margin: 18px 12px;
        }

        .logout-link {
            width: 100%;
            background: transparent;
            border: 0;
            text-align: left;
            cursor: pointer;
            font-family: inherit;
            font-size: 13px;
        }

        .nav-sidebar .logout-link:hover {
            background: rgba(255,100,140,.16) !important;
            color: #ffc3d5 !important;
        }

        /* NAVBAR */

        .main-header {
            background: white !important;
            min-height: 72px;
            border-bottom: 1px solid #eceefa;
            padding: 0 22px;
        }

        .main-header .nav-link {
            color: #67748c !important;
            font-weight: 600;
        }

        .navbar-user {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
        }

        .navbar-avatar {
            height: 34px;
            width: 34px;
            border-radius: 11px;
            color: white;
            background: linear-gradient(135deg,#665cf6,#ef5aa7);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* PAGE */

        .content-wrapper {
            background: linear-gradient(
                140deg,
                #f8f9ff 0%,
                #f5f4ff 55%,
                #fff8fd 100%
            ) !important;
            min-height: calc(100vh - 72px) !important;
        }

        .page-container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 22px;
        }

        .content-header {
            padding: 32px 0 23px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -.8px;
            margin-bottom: 5px;
            color: #26284d;
        }

        .page-subtitle {
            font-size: 13px;
            color: #8891aa;
            margin-bottom: 0;
        }

        .content {
            padding-bottom: 50px;
        }

        /* WELCOME CARD */

        .welcome-card {
            position: relative;
            overflow: hidden;
            background: linear-gradient(
                115deg,
                #485ef5 0%,
                #8757eb 56%,
                #ed5aab 100%
            );
            border-radius: 22px;
            padding: 36px;
            box-shadow: 0 13px 32px rgba(111,86,230,.17);
            color: white;
        }

        .welcome-card::before {
            content: '';
            position: absolute;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            right: -120px;
            top: -170px;
            border: 55px solid rgba(255,255,255,.09);
            pointer-events: none;
        }

        .welcome-card::after {
            content: '';
            position: absolute;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            right: 95px;
            bottom: -95px;
            background: rgba(255,255,255,.08);
            pointer-events: none;
        }

        .welcome-card > * {
            position: relative;
            z-index: 1;
        }

        .welcome-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 13px;
            background: rgba(255,255,255,.18);
            border: 1px solid rgba(255,255,255,.22);
            border-radius: 30px;
            font-size: 10px;
            letter-spacing: 1px;
            font-weight: 800;
        }

        .welcome-card h2 {
            font-size: 27px;
            font-weight: 800;
            margin: 25px 0 12px;
            letter-spacing: -.7px;
        }

        .welcome-card p {
            color: rgba(255,255,255,.9);
            font-size: 13px;
            line-height: 1.9;
            max-width: 510px;
        }

        .welcome-divider {
            height: 1px;
            background: rgba(255,255,255,.2);
            margin: 25px 0;
        }

        .login-status {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .login-icon {
            background: rgba(255,255,255,.2);
            border-radius: 12px;
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            flex-shrink: 0;
        }

        .login-title {
            font-weight: 800;
            font-size: 13px;
            margin: 0;
        }

        /* higher specificity so it beats ".welcome-card p" */
        .welcome-card p.login-subtitle {
            font-size: 11px;
            line-height: 1.4;
            opacity: .85;
            margin: 3px 0 0;
        }

        /* QUICK ACCESS */

        .section-heading {
            margin-top: 35px;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 800;
            margin: 0 0 7px;
            color: #282947;
        }

        .section-subtitle {
            font-size: 12px;
            color: #8891aa;
            margin: 0;
        }

        .quick-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            position: relative;
            overflow: hidden;
            padding: 23px;
            background: white;
            border: 1px solid #edf0fa;
            border-radius: 17px;
            text-decoration: none !important;
            box-shadow: 0 5px 18px rgba(42,47,90,.04);
            transition:
                transform .2s,
                box-shadow .2s,
                border-color .2s;
        }

        .quick-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 4px;
            width: 100%;
            background: var(--accent);
        }

        a.quick-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
            box-shadow: 0 12px 28px rgba(42,47,90,.1);
        }

        .quick-icon {
            width: 49px;
            height: 49px;
            border-radius: 14px;
            background: var(--soft);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .quick-arrow {
            color: #abb4c6;
            font-size: 13px;
        }

        .quick-name {
            font-weight: 800;
            font-size: 14px;
            margin-top: 20px;
            color: #2d3550;
            margin-bottom: 5px;
        }

        .quick-description {
            color: #98a2b7;
            font-size: 11px;
            margin: 0;
            line-height: 1.5;
        }

        .quick-disabled {
            opacity: .55;
            cursor: not-allowed;
        }

        /* BOTTOM INFORMATION */

        .info-banner {
            margin-top: 14px;
            padding: 18px 22px;
            background: #ffffff;
            border: 1px solid #eaeafa;
            border-radius: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-banner-icon {
            width: 40px;
            height: 40px;
            background: #e3faf4;
            color: #0ba98d;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 12px;
            flex-shrink: 0;
        }

        .info-banner-title {
            font-size: 12px;
            font-weight: 800;
            margin: 0;
            color: #334155;
        }

        .info-banner-subtitle {
            font-size: 11px;
            margin: 4px 0 0;
            color: #98a2b7;
        }

        @media(max-width:767px) {
            .welcome-card {
                padding: 25px;
            }

            .welcome-card h2 {
                font-size: 21px;
            }

            .page-title {
                font-size: 24px;
            }

            .main-header {
                padding: 0 10px;
            }
        }
    </style>

</head>

<body class="hold-transition sidebar-mini">

@php

    $menus = [
        ['name' => 'Students',   'route' => 'students.index',   'match' => 'students.*',   'icon' => 'fa-user-graduate'],
        ['name' => 'Subjects',   'route' => 'subjects.index',   'match' => 'subjects.*',   'icon' => 'fa-book'],
        ['name' => 'Groups',     'route' => 'groups.index',     'match' => 'groups.*',     'icon' => 'fa-users'],
        ['name' => 'Halls',      'route' => 'halls.index',      'match' => 'halls.*',      'icon' => 'fa-building'],
        ['name' => 'Timetables', 'route' => 'timetables.index', 'match' => 'timetables.*', 'icon' => 'fa-calendar-alt'],
    ];

    $groupActive = collect($menus)->contains(fn ($m) => request()->routeIs($m['match']));
@endphp

<div class="wrapper">

    <!-- NAVBAR -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">

            <li class="nav-item">
                <a href="#"
                   class="nav-link"
                   data-widget="pushmenu"
                   role="button"
                   aria-label="Toggle sidebar">
                    <i class="fas fa-bars"></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link">
                    Home
                </a>
            </li>

        </ul>

        <ul class="navbar-nav ml-auto">

            @auth
            <li class="nav-item d-flex align-items-center">

                <div class="navbar-user">

                    <span class="d-none d-sm-inline">
                        {{ auth()->user()->name }}
                    </span>

                    <div class="navbar-avatar">
                        <i class="fas fa-user"></i>
                    </div>

                </div>

            </li>
            @endauth

        </ul>

    </nav>

    <!-- SIDEBAR -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="{{ url('/home') }}" class="brand-link">

            <div class="brand-icon">
                <i class="fas fa-layer-group"></i>
            </div>

            <span class="brand-text brand-info">
                <span class="brand-name d-block">
                    {{ config('app.name', 'AdminLTE 3') }}
                </span>

                <span class="brand-subtitle d-block">
                    MY WORKSPACE
                </span>
            </span>

        </a>

        <div class="sidebar">

            <!-- USER PANEL -->
            @auth
            <div class="user-panel d-flex">

                <div class="image">
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <div class="info">
                    <span class="user-name">
                        {{ auth()->user()->name }}
                    </span>

                    <span class="user-email">
                        {{ auth()->user()->email }}
                    </span>
                </div>

            </div>
            @endauth

            <div class="sidebar-heading">
                MAIN MENU
            </div>

            <nav class="mt-2">

                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview"
                    role="menu"
                    data-accordion="false">

                    <!-- DASHBOARD -->
                    <li class="nav-item">

                        <a href="{{ url('/home') }}"
                           class="nav-link {{ request()->is('home') ? 'active' : '' }}">

                            <i class="nav-icon fas fa-th-large"></i>

                            <p>Dashboard</p>

                        </a>

                    </li>

                    <!-- FORMS -->
                    <li class="nav-item {{ $groupActive ? 'menu-open' : '' }}">

                        <a href="#" class="nav-link {{ $groupActive ? 'active' : '' }}">

                            <i class="nav-icon fas fa-folder-open"></i>

                            <p>
                                Forms
                                <i class="right fas fa-angle-left"></i>
                            </p>

                        </a>

                        <ul class="nav nav-treeview">

                            <!-- STUDENTS DROPDOWN -->
                            <li class="nav-item {{ request()->routeIs('students.*') ? 'menu-open' : '' }}">

                                <a href="#"
                                   class="nav-link {{ request()->routeIs('students.*') ? 'active' : '' }}">

                                    <i class="nav-icon fas fa-user-graduate"></i>

                                    <p>
                                        Students
                                        <i class="right fas fa-angle-left"></i>
                                    </p>

                                </a>

                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="{{ route('students.index') }}"
                                           class="nav-link {{ request()->routeIs('students.index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>List of Students</p>
                                        </a>
                                    </li>

                                   

                                </ul>

                            </li>

                            @foreach($menus as $menu)
                            @continue($menu['route'] === 'students.index')
                            <li class="nav-item">

                                @if(Route::has($menu['route']))

                                <a href="{{ route($menu['route']) }}"
                                   class="nav-link {{ request()->routeIs($menu['match']) ? 'active' : '' }}">

                                    <i class="nav-icon fas {{ $menu['icon'] }}"></i>

                                    <p>{{ $menu['name'] }}</p>

                                </a>

                                @else

                                <span class="nav-link is-unavailable"
                                      aria-disabled="true"
                                      title="Route not configured">

                                    <i class="nav-icon fas {{ $menu['icon'] }}"></i>

                                    <p>{{ $menu['name'] }}</p>

                                </span>

                                @endif

                            </li>
                            @endforeach

                        </ul>

                    </li>

                </ul>

                <div class="sidebar-divider"></div>

                <!-- LOGOUT -->
                @auth
                @if(Route::has('logout'))
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <button type="submit" class="nav-link logout-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </button>
                        </form>
                    </li>
                </ul>
                @endif
                @endauth

            </nav>

        </div>

    </aside>

    <!-- MAIN CONTENT -->
    <div class="content-wrapper">

        <div class="content-header">

            <div class="page-container">

                <h1 class="page-title">
                    @hasSection('page-title')
                        @yield('page-title')
                    @else
                        @yield('title', 'Dashboard')
                    @endif
                </h1>

                <p class="page-subtitle">@yield('page-subtitle', 'Your personal workspace')</p>

            </div>

        </div>

        <section class="content">

            <div class="page-container">

                @yield('content')

            </div>

        </section>

    </div>

</div>

<!-- SCRIPTS -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>

</body>
</html>