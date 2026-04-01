<footer class="text-white relative overflow-hidden"
    style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #2563eb 100%);">

    {{-- glow effect --}}
    <div class="absolute -top-20 -left-20 h-72 w-72 rounded-full bg-sky-400/20 blur-3xl"></div>
    <div class="absolute -bottom-20 -right-20 h-72 w-72 rounded-full bg-blue-600/20 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 py-14 lg:px-10">

        <div class="grid gap-12 md:grid-cols-3 items-start">

            {{-- BRAND --}}
            <div>
                <div class="flex items-center gap-3">
                    <div class="h-12 w-12 overflow-hidden rounded-xl bg-white shadow">
                        <img src="{{ asset('images/logo.png') }}" class="h-full w-full object-cover">
                    </div>

                    <h2 class="text-lg font-bold">
                        Senandung Asa
                    </h2>
                </div>

                <p class="mt-4 text-sm text-sky-200">
                    Melangitkan Harapan, Membumikan Kebermanfaatan.
                </p>
            </div>

            {{-- NAVIGASI --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-widest text-sky-200">
                    Navigasi
                </h3>

                <ul class="mt-4 space-y-2 text-sm">

                    <li><a href="/" class="hover:text-white transition">Beranda</a></li>
                    <li><a href="/#stats" class="hover:text-white transition">Statistik</a></li>
                    <li><a href="/#map" class="hover:text-white transition">Peta</a></li>
                    <li><a href="/#faq" class="hover:text-white transition">FAQ</a></li>
                    <li><a href="/#testimonials" class="hover:text-white transition">Testimoni</a></li>
                    <li><a href="/#partners" class="hover:text-white transition">Mitra</a></li>

                    <li class="pt-2">
                        <a href="/ruang-program" class="font-semibold text-white hover:text-sky-200 transition">
                            Ruang Program →
                        </a>
                    </li>

                </ul>
            </div>

            {{-- SOSIAL --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-widest text-sky-200">
                    Sosial Media
                </h3>

                <div class="mt-4 flex items-center gap-3">

                    <a href="https://www.instagram.com/aryafatikh/"
                       target="_blank"
                       class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 hover:bg-pink-500/30 transition backdrop-blur">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm5 4a6 6 0 110 12 6 6 0 010-12zm0 2a4 4 0 100 8 4 4 0 000-8zm5.5-2.8a1.3 1.3 0 110 2.6 1.3 1.3 0 010-2.6z"/>
                        </svg>
                    </a>

                    <a href="https://www.tiktok.com/@aryafatikh"
                       target="_blank"
                       class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 hover:bg-sky-400/30 transition backdrop-blur">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 2c.3 2.2 1.8 3.7 4 4v3c-1.2 0-2.4-.3-3.5-.9v6.5a5.6 5.6 0 11-4.8-5.5v3.1a2.5 2.5 0 102.1 2.5V2h2.2z"/>
                        </svg>
                    </a>

                </div>
            </div>

        </div>

        {{-- COPYRIGHT --}}
        <div class="mt-12 border-t border-white/10 pt-6 text-center text-xs text-sky-200">
            © 2026 Senandung Asa — Arya Fatikh Izzan Juweri
        </div>

    </div>
</footer>