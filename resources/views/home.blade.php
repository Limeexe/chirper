<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper - Home</title>
    <link rel="preconnect" href="<https://fonts.bunny.net>">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/theme.css" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen font-sans bg-base-300">
    <nav class="navbar bg-base-100">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-x1">🐦 Chirper</a>
        </div>
        <div class="gap-2 navbar-end">
            <a href="#" class="btn btn-ghost btn-sm">Sign In</a>
            <a href="#" class="btn btn-ghost btn-sm">Sign Up</a>
        </div>
    </nav>

    <main class="container flex-1 px-4 py-8 mx-auto">
        <div class="mx-auto max-w-2x1">
            <div class="mt-8 shadow card bg-base-100">
                <div class="card-body">
                    <h1 class="font-bold text-3x1">Welcome to Chirper!</h1>
                    <p class="mt-4 text-base-content/60">This is your brand new laravel application. Time to make it chirp!</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="justify-center p-5 text-xs footer footer-content bg-base-300 text-base-content">
        <div>
            <p>© 2026 Chirper - Built with Laravel and ❤️. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
