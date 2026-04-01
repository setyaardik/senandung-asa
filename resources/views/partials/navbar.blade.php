@php
    $currentPath = request()->path();
    $isHomePage = request()->is('/');
    $isProgramPage = request()->is('ruang-program');
@endphp

<header class="sticky top-0 z-50 border-b border-slate-200/70 bg-white/80 backdrop-blur-xl">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-10">
        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <div class="flex h-11 w-11 items-center justify-center overflow-hidden rounded-xl border border-slate-200 bg-slate-100 shadow-sm">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Senandung Asa" class="h-full w-full object-cover">
            </div>

            <span class="text-lg font-bold tracking-tight text-blue-950">
                Senandung Asa
            </span>
        </a>

        {{-- DESKTOP --}}
        <nav class="hidden items-center gap-10 md:flex">
            @if ($isHomePage)
                {{-- Home with dropdown only on home page --}}
                <div class="relative" id="home-dropdown">
                    <button
                        id="home-dropdown-button"
                        type="button"
                        class="relative flex items-center gap-2 text-sm font-medium text-sky-600 transition"
                    >
                        <span>Home</span>
                        <svg id="home-dropdown-icon" class="h-4 w-4 transition duration-200" viewBox="0 0 20 20" fill="none">
                            <path d="M5 8L10 13L15 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="absolute -bottom-2 left-0 h-[2px] w-full rounded-full bg-sky-500"></span>
                    </button>

                    <div
                        id="home-dropdown-menu"
                        class="invisible absolute left-1/2 top-full z-50 mt-3 w-56 -translate-x-1/2 translate-y-2 rounded-2xl border border-slate-200 bg-white p-2 opacity-0 shadow-[0_18px_45px_rgba(15,23,42,0.08)] transition duration-200"
                    >
                        <a href="#stats" class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-sky-50 hover:text-sky-700">Stats</a>
                        <a href="#map" class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-sky-50 hover:text-sky-700">Peta</a>
                        <a href="#faq" class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-sky-50 hover:text-sky-700">FAQ</a>
                        <a href="#testimonials" class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-sky-50 hover:text-sky-700">Testi</a>
                        <a href="#partners" class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-sky-50 hover:text-sky-700">Partners</a>
                    </div>
                </div>
            @else
                {{-- Home becomes normal link on other pages --}}
                <a href="{{ url('/') }}"
                   class="relative text-sm font-medium transition {{ $isHomePage ? 'text-sky-600' : 'text-slate-700 hover:text-sky-600' }}">
                    Home

                    @if ($isHomePage)
                        <span class="absolute -bottom-2 left-0 h-[2px] w-full rounded-full bg-sky-500"></span>
                    @endif
                </a>
            @endif

            <a href="{{ url('/ruang-program') }}"
               class="relative text-sm font-medium transition {{ $isProgramPage ? 'text-sky-600' : 'text-slate-700 hover:text-sky-600' }}">
                Ruang Program

                @if ($isProgramPage)
                    <span class="absolute -bottom-2 left-0 h-[2px] w-full rounded-full bg-sky-500"></span>
                @endif
            </a>
        </nav>

        {{-- MOBILE BUTTON --}}
        <button
            id="mobile-menu-button"
            class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-700 md:hidden"
            type="button"
            aria-label="Open menu"
        >
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">
                <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
    </div>

    {{-- MOBILE MENU --}}
    <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white md:hidden">
        <div class="space-y-1 px-4 py-4">
            @if ($isHomePage)
                <p class="px-3 pb-2 text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">Home</p>
                <a href="#stats" class="block rounded-xl px-3 py-3 text-sm font-medium text-slate-700 hover:bg-sky-50 hover:text-sky-700">Stats</a>
                <a href="#map" class="block rounded-xl px-3 py-3 text-sm font-medium text-slate-700 hover:bg-sky-50 hover:text-sky-700">Peta</a>
                <a href="#faq" class="block rounded-xl px-3 py-3 text-sm font-medium text-slate-700 hover:bg-sky-50 hover:text-sky-700">FAQ</a>
                <a href="#testimonials" class="block rounded-xl px-3 py-3 text-sm font-medium text-slate-700 hover:bg-sky-50 hover:text-sky-700">Testi</a>
                <a href="#partners" class="block rounded-xl px-3 py-3 text-sm font-medium text-slate-700 hover:bg-sky-50 hover:text-sky-700">Partners</a>
                <div class="my-2 h-px bg-slate-200"></div>
            @else
                <a href="{{ url('/') }}"
                   class="block rounded-xl px-3 py-3 text-sm font-medium text-slate-700 hover:bg-sky-50 hover:text-sky-700">
                    Home
                </a>
            @endif

            <a href="{{ url('/ruang-program') }}"
               class="block rounded-xl px-3 py-3 text-sm font-medium transition {{ $isProgramPage ? 'bg-sky-50 text-sky-600' : 'text-slate-700 hover:bg-sky-50 hover:text-sky-700' }}">
                Ruang Program
            </a>
        </div>
    </div>
</header>