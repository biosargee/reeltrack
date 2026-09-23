<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Reeltrack')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#1A1614] text-[#EDE8E3] font-sans min-h-screen flex flex-col">

    <nav class="border-b border-[#3A332E] px-6 py-3 flex items-center justify-between">
        <a href="/" class="font-serif text-2xl text-[#C89B3C] tracking-wide">Reeltrack</a>
        <div class="flex gap-6 text-sm">
            <a href="{{ route('search') }}" class="hover:text-[#C89B3C] transition-colors">Watchlist</a>
            {{--<button type="submit" class=" text-lg bg-[#C89B3C] text-white rounded hover:bg-[#b09732] transition-colors px-4 py-1">Sign in</button>--}}
        </div>
    </nav>

    <main class="flex-1 px-6 py-8">
        @yield('content')
    </main>

    <footer class="border-t border-[#3A332E] px-6 py-4 text-center text-sm text-[#8A8178]">
        ReelTrack 
    </footer>
</body>
</html>