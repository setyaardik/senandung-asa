@extends('layouts.app')

@section('content')

@include('partials.navbar')

<section class="bg-gradient-to-b from-slate-50 to-white pt-24 pb-20">
<div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-12 gap-10">

        {{-- CONTENT --}}
        <div class="lg:col-span-8">

            {{-- CATEGORY --}}
            <div class="mb-5">
                <span
                    class="inline-flex px-4 py-2 rounded-full bg-sky-100 text-sky-700 text-sm font-bold uppercase">
                    {{ $article['category'] }}
                </span>
            </div>

            {{-- TITLE --}}
            <h1
                class="text-4xl md:text-6xl font-black leading-tight text-slate-950">
                {{ $article['title'] }}
            </h1>

            {{-- META --}}
            <div
                class="mt-8 flex flex-wrap items-center gap-5 text-sm text-slate-500">
                <span>
                    ✍ {{ $article['author'] }}
                </span>
                <span>
                    📅 {{ $article['date'] }}
                </span>
                <span>
                    ⏱ 5 Menit Baca
                </span>
            </div>

            {{-- HERO IMAGE --}}
            <div
                class="mt-10 overflow-hidden rounded-[36px] shadow-2xl">
                <img
                    src="{{ asset($article['image']) }}"
                    class="w-full h-[550px] object-cover">
            </div>

            {{-- SUMMARY --}}
            <div
                class="mt-10 rounded-[32px] border border-sky-100 bg-sky-50 p-8">
                <div
                    class="flex items-center gap-3 mb-4">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full bg-sky-600 text-white">
                        💡
                    </div>
                    <div>
                        <h3
                            class="font-black text-sky-900 text-xl">
                            Kesimpulan Utama
                        </h3>
                    </div>
                </div>
                <p
                    class="text-lg leading-8 text-slate-700">
                    {{ $article['summary'] }}
                </p>
            </div>

            {{-- CONTENT --}}
            <article
                class="mt-12 bg-white rounded-[36px] p-10 shadow-sm border border-slate-200">
                <div
                    class="prose prose-lg max-w-none prose-headings:text-slate-900 prose-p:text-slate-700 prose-p:leading-9">
                    {!! nl2br(e($article['content'])) !!}
                </div>
            </article>

            {{-- CTA --}}
            <div
                class="mt-10 rounded-[32px] bg-slate-900 p-8 text-white">
                <h3
                    class="text-2xl font-black">
                    Bersama Mewujudkan Inklusi yang Bermakna
                </h3>
                <p
                    class="mt-4 text-slate-300 leading-8">
                    Setiap langkah kecil dalam memahami dan mendampingi
                    remaja dengan disabilitas mental adalah kontribusi
                    besar menuju masyarakat yang lebih inklusif.
                </p>
            </div>

            {{-- BACK BUTTON --}}
            <div class="mt-10">
                <a
                    href="{{ url('/ruang-inklusi') }}"
                    class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-sky-700 text-white font-bold hover:bg-sky-800 transition">
                    ← Kembali ke Ruang Inklusi
                </a>
            </div>
        </div>

        {{-- SIDEBAR --}}
        <div class="lg:col-span-4">
            <div class="sticky top-28 space-y-6">

                {{-- INFO --}}
                <div
                    class="rounded-[32px] bg-white border border-slate-200 p-8 shadow-sm">
                    <h3
                        class="text-2xl font-black text-slate-950">
                        Tentang Artikel
                    </h3>
                    <div
                        class="mt-6 space-y-4">
                        <div>
                            <div
                                class="text-xs uppercase tracking-widest text-slate-400">
                                Kategori
                            </div>
                            <div
                                class="font-bold text-slate-900">
                                {{ $article['category'] }}
                            </div>
                        </div>
                        <div>
                            <div
                                class="text-xs uppercase tracking-widest text-slate-400">
                                Penulis
                            </div>
                            <div
                                class="font-bold text-slate-900">
                                {{ $article['author'] }}
                            </div>
                        </div>
                        <div>
                            <div
                                class="text-xs uppercase tracking-widest text-slate-400">
                                Publikasi
                            </div>
                            <div
                                class="font-bold text-slate-900">
                                {{ $article['date'] }}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- RUANG INKLUSI --}}
                <div
                    class="rounded-[32px] bg-sky-700 p-8 text-white">
                    <h3
                        class="text-3xl font-black">
                        Ruang Inklusi
                    </h3>
                    <p
                        class="mt-4 leading-8 text-sky-100">
                        Media edukasi yang mendukung caregiver,
                        keluarga, dan masyarakat dalam membangun
                        lingkungan yang lebih inklusif bagi remaja
                        dengan disabilitas mental.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

@include('partials.footer')

@endsection
