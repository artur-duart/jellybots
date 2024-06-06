<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaveX</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('images/SOLUTION3.png') }}" type="image/png">
</head>
<body>
    <header>
        <a href="" class="logo">
            <img src="{{ asset('images/logo.svg') }}" alt="WaveX" class="logo">
        </a>
        <nav class="center-nav">
            <a href="{{ url('/mission') }}">Mission</a>
            <a href="{{ url('/technology') }}">Technology</a>
            <a href="{{ url('/solution') }}">Solution</a>
            <a href="{{ url('/invest') }}">Invest</a>
        </nav>
    </header>
    <div class="shadow"></div>
    <button class="hamburger" onclick="toggle()">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <nav class="mobile-nav">
        <a href="{{ url('/mission') }}">Mission</a>
        <a href="{{ url('/technology') }}">Technology</a>
        <a href="{{ url('/solution') }}">Solution</a>
        <a href="{{ url('/invest') }}">Invest</a>
    </nav>
    
    <main class="container-fluid p-0">
        @yield('content')
    </main>

    <footer>
        <nav>
            <span>WaveX &copy; 2024</span>
            <a><img src="{{ asset('images/Pacto Global.png') }}" alt="Pacto" width="115"></a>
            <a><img src="{{ asset('images/Rede Oceano Limpo.png') }}" alt="Rede" width="120"></a>
            <a><img src="{{ asset('images/Select Soluções.png') }}" alt="Select" width="100"></a>
            <a><img src="{{ asset('images/O20.png') }}" alt="20" width="70"></a>
            <a><img src="{{ asset('images/AWS.png') }}" alt="AWS" width="60"></a>
        </nav>
    </footer>

    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
</body>
</html>
