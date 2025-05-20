<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Find ud af hvilken speciel dag det er i dag. I dag er det Tommy's fødselsdag!">
    
    <!-- OpenGraph Tags -->
    <meta property="og:title" content="Hvad Dag Er Det Idag">
    <meta property="og:description" content="Find ud af hvilken speciel dag det er i dag. I dag er det Tommy's fødselsdag!">
    <meta property="og:image" content="{{ url('/images/tommy2.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hvad Dag Er Det Idag">
    <meta name="twitter:description" content="Find ud af hvilken speciel dag det er i dag. I dag er det Tommy's fødselsdag!">
    <meta name="twitter:image" content="{{ url('/images/tommy2.jpg') }}">
    
    <!-- PWA Support -->
    <meta name="theme-color" content="#333333">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <title>Hvad Dag Er Det Idag</title>

    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f8f8;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Header Styles */
        header {
            padding: 1rem;
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }

        header nav {
            display: flex;
            gap: 1rem;
        }

        header a {
            text-decoration: none;
            color: #333;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            border: 1px solid transparent;
            transition: all 0.3s ease;
        }

        header a:hover {
            border-color: #333;
        }

        /* Page Section Styles */
        .page-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-grow: 1;
            padding: 1rem;
        }

        /* Top section */
        .top-section {
            text-align: center;
            margin-bottom: 2rem;
            animation: fadeIn 1s ease-in;
        }

        .top-section h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            z-index: 100;
            position: relative;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        /* Middle section */
        .middle-section {
            position: relative;
            margin-bottom: 2rem;
            animation: slideIn 0.8s ease-out;
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .image-container {
            position: relative;
            display: inline-block;
            max-width: 100%;
        }

        .main-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .hat {
            position: absolute;
            transform: rotate(-22deg);
            top: -34%;
            right: 56%;
            z-index: 10;
            height: 50%;
            width: auto;
        }

        /* Bottom section */
        .bottom-section {
            text-align: center;
            margin-top: 1rem;
            animation: fadeIn 1.2s ease-in;
        }

        .bottom-section h2 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #222;
        }

        /* Footer */
        footer {
            padding: 2rem 1rem;
            text-align: center;
            color: #444;
            font-size: 0.875rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Dark Mode */
        @media (prefers-color-scheme: dark) {
            body {
                background-color: #121212;
                color: #f1f1f1;
            }

            header a {
                color: #f1f1f1;
            }

            header a:hover {
                border-color: #f1f1f1;
            }
            
            .bottom-section h2 {
                color: #f1f1f1;
            }
            
            footer {
                color: #dddddd;
            }
        }

        /* Responsive Design */
        @media screen and (min-width: 768px) {
            .top-section h1 {
                font-size: 2.5rem;
            }

            .bottom-section h2 {
                font-size: 1.75rem;
            }

            .page-container {
                padding: 2rem;
            }
        }

        @media screen and (min-width: 1024px) {
            .top-section h1 {
                font-size: 3rem;
            }

            .bottom-section h2 {
                font-size: 2rem;
            }

            .page-container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .middle-section {
                max-width: 750px;
            }
        }
    </style>
</head>

<body>
    <header>
        @if (Route::has('login'))
            <nav>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <main class="page-container">
        <!-- Top Section - Title of the day -->
        <section class="top-section">
            <h1>Det er Tommy's Fødselsdag idag!</h1>
        </section>

        <!-- Middle Section - Images -->
        <section class="middle-section">
            <div class="image-container">
                <img src="/images/hat2.png" alt="Festhat" class="hat" width="300" height="200" loading="eager">
                <img src="/images/tommy2.jpg" alt="Tommy" class="main-image" width="600" height="400" loading="eager">
            </div>
        </section>

        <!-- Bottom Section - Subtitle -->
        <section class="bottom-section">
            <h2>Tillykke med Fødselsdagen!</h2>
        </section>
    </main>

    <footer>
        <p>Hvad Dag Er Det Idag - Dato: {{ date('d/m/Y') }}</p>
    </footer>
</body>

</html>
