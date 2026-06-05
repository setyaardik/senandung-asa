<section class="py-20 bg-gradient-to-b from-slate-50 to-white">

    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-16">

            <span
                class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-sky-100 text-sky-700 font-semibold text-sm">
                Pusat Edukasi
            </span>

            <h2 class="mt-6 text-5xl font-black text-slate-950">
                Artikel Ruang Inklusi
            </h2>

            <p class="mt-5 text-lg text-slate-600 max-w-3xl mx-auto leading-8">
                Kumpulan artikel edukatif untuk caregiver, keluarga,
                pendamping, guru, dan masyarakat dalam mendukung
                remaja dengan disabilitas mental secara lebih inklusif.
            </p>

        </div>

        {{-- SEARCH --}}
        <div class="mb-14">

            <div
                class="max-w-3xl mx-auto flex overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-lg">

                <input
                    id="article-search"
                    type="text"
                    placeholder="Cari artikel..."
                    class="w-full px-6 py-5 text-lg outline-none">

                <button
                    class="bg-sky-600 px-8 text-white font-bold hover:bg-sky-700 transition">
                    🔍
                </button>

            </div>

        </div>

        {{-- FEATURED ARTICLE --}}
        @if(isset($articles[0]))

        <div
            class="mb-14 overflow-hidden rounded-[40px] bg-slate-950 text-white shadow-2xl">

            <div class="grid lg:grid-cols-2">

                <div class="h-[400px]">

                    <img
                        src="{{ asset($articles[0]['image']) }}"
                        class="w-full h-full object-cover">

                </div>

                <div class="p-10 lg:p-14 flex flex-col justify-center">

                    <span
                        class="inline-flex w-fit px-4 py-2 rounded-full bg-sky-500 text-sm font-bold">

                        Artikel Unggulan

                    </span>

                    <h3 class="mt-6 text-4xl font-black leading-tight">

                        {{ $articles[0]['title'] }}

                    </h3>

                    <p class="mt-6 text-slate-300 leading-8">

                        {{ $articles[0]['excerpt'] }}

                    </p>

                    <a
                        href="{{ route('inclusion.article.show', $articles[0]['slug']) }}"
                        class="mt-8 inline-flex items-center gap-2 font-bold text-sky-300">

                        Baca Artikel →

                    </a>

                </div>

            </div>

        </div>

        @endif

        {{-- GRID --}}
        <div
            id="article-container"
            class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

            @foreach($articles as $article)

            <article
                class="article-card group bg-white rounded-[32px] overflow-hidden border border-slate-200 shadow-sm hover:shadow-2xl transition duration-300 hover:-translate-y-2">

                {{-- IMAGE --}}
                <div class="h-60 overflow-hidden">

                    <img
                        src="{{ asset($article['image']) }}"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                </div>

                <div class="p-7">

                    {{-- CATEGORY --}}
                    <span
                        class="inline-flex px-3 py-1 rounded-full bg-sky-100 text-sky-700 text-xs font-bold uppercase">

                        {{ $article['category'] }}

                    </span>

                    {{-- TITLE --}}
                    <h3
                        class="mt-5 text-2xl font-black text-slate-950 leading-tight">

                        {{ $article['title'] }}

                    </h3>

                    {{-- META --}}
                    <div
                        class="mt-4 flex items-center gap-4 text-sm text-slate-400">

                        <span>{{ $article['author'] }}</span>
                        <span>{{ $article['date'] }}</span>

                    </div>

                    {{-- SUMMARY --}}
                    <div
                        class="mt-5 rounded-2xl bg-sky-50 border border-sky-100 p-4">

                        <p
                            class="text-sm font-bold text-sky-700 mb-2">

                            Kesimpulan Utama

                        </p>

                        <p
                            class="text-slate-700 leading-7">

                            {{ $article['excerpt'] }}

                        </p>

                    </div>

                    {{-- BUTTON --}}
                    <a
                        href="{{ route('inclusion.article.show', $article['slug']) }}"
                        class="mt-6 inline-flex items-center gap-2 font-bold text-sky-700 hover:text-blue-900">

                        Baca Artikel
                        →

                    </a>

                </div>

            </article>

            @endforeach

        </div>

    </div>

</section>

<script>

document.addEventListener('DOMContentLoaded',()=>{

    const searchInput =
    document.getElementById('article-search');

    searchInput.addEventListener('keyup',function(){

        const keyword =
        this.value.toLowerCase();

        document
        .querySelectorAll('.article-card')
        .forEach(card=>{

            const text =
            card.innerText.toLowerCase();

            card.style.display =
            text.includes(keyword)
            ? 'block'
            : 'none';

        });

    });

});

</script>