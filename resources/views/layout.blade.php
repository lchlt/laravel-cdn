<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    @vite('resources/css/app.css')
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <x-navbar></x-navbar>
</nav>

@yield('content')

<footer class="footer">
    <div class="content has-text-centered">
        <p>
            <strong>LaravelCDN</strong> par <a href="https://lcdev.fr">LCDev</a>. <br>
        </p>
    </div>
</footer>

@vite('resources/js/app.js')
</body>
</html>
