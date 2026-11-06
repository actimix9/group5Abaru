
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: #f7fafc;
            color: #4a5568;
            font-family: Arial, Helvetica, sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .top-nav {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            padding: 25px 35px;
            font-size: 13px;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto 0;
            padding: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 35px;
            color: #ff2d20;
        }

        .logo img {
            width: 55px;
            height: 55px;
        }

        .logo h1 {
            font-size: 42px;
            font-weight: 500;
            margin: 0;
            letter-spacing: -2px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            overflow: hidden;
        }

        .card {
            padding: 25px 30px;
            min-height: 150px;
            border-bottom: 1px solid #edf2f7;
        }

        .card:nth-child(odd) {
            border-right: 1px solid #edf2f7;
        }

        .card h2 {
            margin: 0 0 12px;
            font-size: 16px;
            font-weight: 600;
            color: #2d3748;
        }

        .card h2 a {
            text-decoration: underline;
        }

        .card p {
            margin: 0;
            color: #718096;
            font-size: 13px;
            line-height: 1.7;
        }

        .card-icon {
            display: inline-flex;
            vertical-align: middle;
            color: #a0aec0;
            margin-right: 10px;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            margin-top: 20px;
            color: #a0aec0;
            font-size: 12px;
        }

        @media (max-width: 768px) {
            .container {
                margin-top: 25px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .card:nth-child(odd) {
                border-right: none;
            }

            .logo h1 {
                font-size: 34px;
            }

            .footer {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    {{-- Login and Register Navigation --}}
    @if (Route::has('login'))
        <div class="top-nav">
            @auth
                <a href="{{ route('home') }}">
                    Home
                </a>
            @else
                <a href="{{ route('login') }}">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">
                        Register
                    </a>
                @endif
            @endauth
        </div>
    @endif

    <main class="container">

        {{-- Laravel Logo --}}
        <div class="logo">
            <img
                src="https://laravel.com/img/logomark.min.svg"
                alt="Laravel Logo"
            >
            <h1>Laravel</h1>
        </div>

        {{-- Information Cards --}}
        <div class="cards">

            {{-- Documentation --}}
            <div class="card">
                <h2>
                    <span class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="20" height="20"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M12 7v14"/>
                            <path d="M3 18V5a2 2 0 0 1 2-2h3a4 4 0 0 1 4 4 4 4 0 0 1 4-4h3a2 2 0 0 1 2 2v13a1 1 0 0 1-1 1h-4a4 4 0 0 0-4 2 4 4 0 0 0-4-2H4a1 1 0 0 1-1-1z"/>
                        </svg>
                    </span>

                    <a href="https://laravel.com/docs/13.x"
                       target="_blank"
                       rel="noopener noreferrer">
                        Documentation
                    </a>
                </h2>

                <p>
                    Laravel has wonderful, thorough
                    documentation covering every aspect
                    of the framework. Whether you are
                    new to the framework or have previous
                    experience, we recommend reading it.
                </p>
            </div>

            {{-- Laracasts --}}
            <div class="card">
                <h2>
                    <span class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="20" height="20"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3z"/>
                            <circle cx="12" cy="13" r="3"/>
                        </svg>
                    </span>

                    <a href="https://laracasts.com"
                       target="_blank"
                       rel="noopener noreferrer">
                        Laracasts
                    </a>
                </h2>

                <p>
                    Laracasts offers thousands of video
                    tutorials on Laravel, PHP, and
                    JavaScript development. Learn
                    Laravel through practical lessons
                    and examples.
                </p>
            </div>

            {{-- Laravel News --}}
            <div class="card">
                <h2>
                    <span class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="20" height="20"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Z"/>
                            <path d="M2 18h2"/>
                            <path d="M8 6h10"/>
                            <path d="M8 10h10"/>
                            <path d="M8 14h6"/>
                        </svg>
                    </span>

                    <a href="https://laravel-news.com"
                       target="_blank"
                       rel="noopener noreferrer">
                        Laravel News
                    </a>
                </h2>

                <p>
                    Laravel News is a community-driven
                    portal and newsletter aggregating
                    important news, tutorials,
                    packages, and releases in the
                    Laravel ecosystem.
                </p>
            </div>

            {{-- Vibrant Ecosystem --}}
            <div class="card">
                <h2>
                    <span class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="20" height="20"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             aria-hidden="true">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M2 12h20"/>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                        </svg>
                    </span>

                    <a href="https://laravel.com"
                       target="_blank"
                       rel="noopener noreferrer">
                        Vibrant Ecosystem
                    </a>
                </h2>

                <p>
                    Laravel's robust library of first-party
                    tools and libraries, such as Forge,
                    Vapor, and Nova, helps developers
                    build modern web applications.
                </p>
            </div>

        </div>

        {{-- Footer --}}
        <div class="footer">
            <div>
                Shop &nbsp; ❤ Sponsor
            </div>

            <div>
                Laravel v{{ Illuminate\Foundation\Application::VERSION }}
                (PHP v{{ PHP_VERSION }})
            </div>
        </div>

    </main>

</body>
</html>
