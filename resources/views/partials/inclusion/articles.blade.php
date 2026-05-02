# resources/views/partials/inclusion/articles.blade.php

```blade
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <span class="px-4 py-2 bg-sky-100 text-sky-700 rounded-full text-sm font-semibold">
                Artikel & Edukasi
            </span>

            <h2 class="mt-5 text-4xl font-black text-blue-950">
                Artikel Ruang Inklusi
            </h2>

            <p class="mt-4 text-gray-600 max-w-3xl mx-auto leading-8">
                Kumpulan artikel edukatif mengenai disabilitas mental,
                caregiver support, inovasi alat bantu, dan meaningful inclusion.
            </p>
        </div>


        <div class="grid lg:grid-cols-3 gap-8 items-start">

            {{-- LEFT CONTENT --}}
            <div class="lg:col-span-2">

                {{-- SEARCH MOBILE --}}
                <div class="lg:hidden mb-8">
                    <div class="bg-slate-100 rounded-3xl p-6 shadow-sm">

                        <h3 class="text-3xl font-black text-slate-900 mb-6">
                            Search
                        </h3>

                        <div class="flex overflow-hidden rounded-2xl border border-slate-200 bg-white">
                            <input type="text" placeholder="Search..."
                                class="w-full px-5 py-4 outline-none text-slate-700">

                            <button class="bg-red-600 px-6 text-white font-bold">
                                🔍
                            </button>
                        </div>
                    </div>
                </div>


                {{-- ARTICLE GRID --}}
                <div class="grid md:grid-cols-2 gap-8">

                    @foreach ($articles as $article)

                        <article
                            class="group rounded-[32px] border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-2xl">

                            {{-- IMAGE --}}
                            <div class="overflow-hidden rounded-3xl mb-6">
                                <img src="{{ asset($article['image']) }}"
                                    class="w-full h-[260px] object-cover transition duration-500 group-hover:scale-105">
                            </div>

                            {{-- CATEGORY --}}
                            <span
                                class="inline-block px-3 py-1 bg-slate-100 rounded-lg text-xs font-semibold tracking-wide text-slate-600 uppercase">
                                {{ $article['category'] }}
                            </span>

                            {{-- TITLE --}}
                            <h3
                                class="mt-5 text-4xl font-black leading-tight text-slate-950 transition group-hover:text-sky-700">
                                {{ $article['title'] }}
                            </h3>

                            {{-- META --}}
                            <div class="mt-6 flex items-center gap-5 text-sm text-slate-400">
                                <span>{{ $article['author'] }}</span>
                                <span>{{ $article['date'] }}</span>
                            </div>

                            {{-- DESC --}}
                            <p class="mt-6 text-slate-600 leading-8 text-lg">
                                {{ $article['excerpt'] }}
                            </p>

                            {{-- BUTTON --}}
                            <div class="mt-8">
                                <a href="{{ route('inclusion.article.show', $article['slug']) }}"
                                    class="inline-flex items-center gap-2 text-sky-700 font-bold hover:text-blue-900 transition">
                                    Baca Selengkapnya
                                    <span>→</span>
                                </a>
                            </div>

                        </article>

                    @endforeach

                </div>
            </div>


            {{-- SIDEBAR --}}
            <div class="space-y-8 sticky top-28 hidden lg:block">

                {{-- SEARCH --}}
                <div class="bg-slate-100 rounded-[32px] p-8 shadow-sm">

                    <h3 class="text-5xl font-black text-slate-950 mb-8">
                        Search
                    </h3>

                    <div class="flex overflow-hidden rounded-2xl border border-slate-200 bg-white">

                        <input type="text" placeholder="Search..." class="w-full px-5 py-4 outline-none text-slate-700">

                        <button class="bg-red-600 px-6 text-white font-bold hover:bg-red-700 transition">
                            🔍
                        </button>
                    </div>
                </div>


                {{-- INFO CARD --}}
                <div class="bg-slate-100 rounded-[32px] p-10 shadow-sm text-center">

                    <div class="flex justify-center mb-8">
                        <img src="{{ asset('images/logo-genre.png') }}" class="w-40 object-contain">
                    </div>

                    <h3 class="text-5xl font-black text-slate-950 leading-tight">
                        Ruang
                        <br>
                        Inklusi
                    </h3>

                    <p class="mt-8 text-slate-600 leading-9 text-lg">
                        Ruang edukasi dan inovasi yang mendukung
                        kemandirian remaja disabilitas mental melalui
                        pendekatan suportif, aman, dan meaningful inclusion.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>