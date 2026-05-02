@extends('layouts.app')

@section('content')

    @include('partials.navbar')

    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6">

            {{-- CATEGORY --}}
            <div class="mb-6">
                <span class="px-4 py-2 bg-sky-100 text-sky-700 rounded-full text-sm font-semibold uppercase tracking-wide">
                    {{ $article['category'] }}
                </span>
            </div>

            {{-- TITLE --}}
            <h1 class="text-5xl md:text-6xl font-black leading-tight text-blue-950">
                {{ $article['title'] }}
            </h1>

            {{-- META --}}
            <div class="mt-8 flex flex-wrap gap-6 text-slate-400 text-sm">
                <span>{{ $article['author'] }}</span>
                <span>{{ $article['date'] }}</span>
            </div>

            {{-- IMAGE --}}
            <div class="mt-12 overflow-hidden rounded-[32px] shadow-2xl">
                <img src="{{ asset($article['image']) }}" class="w-full h-[500px] object-cover">
            </div>

            {{-- CONTENT --}}
            <div class="mt-14 prose prose-lg max-w-none leading-9 text-slate-700">
                {!! nl2br(e($article['content'])) !!}
            </div>

            {{-- BACK BUTTON --}}
            <div class="mt-16">
                <a href="{{ url('/ruang-inklusi') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-blue-900 text-white font-semibold hover:bg-sky-700 transition">
                    ← Kembali ke Ruang Inklusi
                </a>
            </div>

        </div>
    </section>

    @include('partials.footer')

@endsection