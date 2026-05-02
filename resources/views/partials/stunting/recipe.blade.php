<section id="resep" class="bg-white py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="mx-auto max-w-3xl text-center" data-aos="fade-up">
            <span class="inline-flex items-center rounded-full border border-cyan-100 bg-cyan-50 px-4 py-2 text-sm font-semibold text-cyan-700">
                Resep
            </span>

            <h2 class="mt-5 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl md:text-5xl">
                Cara Membuat Dimsum Kelor Lele
            </h2>

            <p class="mt-4 text-base leading-7 text-slate-600 md:text-lg">
                Takaran untuk 30 pcs dimsum. Resep ini memanfaatkan ikan lele, daun kelor, dan bahan sederhana yang mudah ditemukan.
            </p>
        </div>

        <div class="mt-14 grid gap-8 lg:grid-cols-2">
            <div class="rounded-[28px] border border-slate-200 bg-slate-50 p-7 shadow-sm" data-aos="fade-right">
                <h3 class="text-2xl font-black text-slate-950">Alat</h3>

                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    @foreach ($tools as $tool)
                        <div class="rounded-2xl bg-white px-4 py-3 text-sm font-semibold text-slate-700">
                            {{ $tool }}
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="rounded-[28px] border border-slate-200 bg-slate-50 p-7 shadow-sm" data-aos="fade-left">
                <h3 class="text-2xl font-black text-slate-950">Bahan</h3>

                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    @foreach ($ingredients as $ingredient)
                        <div class="rounded-2xl bg-white px-4 py-3 text-sm font-semibold text-slate-700">
                            {{ $ingredient }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-10 rounded-[32px] border border-slate-200 bg-slate-50 p-7 shadow-sm" data-aos="fade-up">
            <h3 class="text-2xl font-black text-slate-950">Cara Pembuatan</h3>

            <div class="mt-7 space-y-4">
                @foreach ($steps as $index => $step)
                    <div class="flex gap-4 rounded-[24px] bg-white px-5 py-5">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl bg-blue-900 text-sm font-bold text-white">
                            {{ $index + 1 }}
                        </div>
                        <p class="text-sm leading-7 text-slate-600 sm:text-base">
                            {{ $step }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>