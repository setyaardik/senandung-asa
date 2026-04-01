<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senandung Asa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-900 antialiased">
    @yield('content')

    {{-- Scroll To Top --}}
    <button
        id="scroll-to-top"
        type="button"
        class="pointer-events-none fixed bottom-6 right-6 z-[999] flex h-14 w-14 translate-y-4 items-center justify-center rounded-full bg-blue-900 text-white opacity-0 shadow-[0_18px_35px_rgba(30,64,175,0.28)] transition duration-300 hover:-translate-y-0.5 hover:bg-sky-600"
        aria-label="Kembali ke atas"
    >
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
            <path d="M12 19V5M12 5L6 11M12 5L18 11" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
</body>
</html>