<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>contactform</title>

    <!-- Bootstrap CSS（CDN） -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

</head>
<body>
    <header class="bg-dark text-white p-3 mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="mb-0">Contact Form</h1>
        @if (Auth::check())
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link text-white">ログアウト</button>
        </form>
        @endif
    </div>
</header>

    <main>
        @yield('content')
    </main>

    <!-- Bootstrap JS（必要なら） -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>