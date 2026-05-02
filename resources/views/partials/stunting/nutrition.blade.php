<section class="bg-slate-50 py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="mx-auto max-w-3xl text-center" data-aos="fade-up">
            <span class="inline-flex items-center rounded-full border border-emerald-100 bg-white px-4 py-2 text-sm font-semibold text-emerald-700">
                Nilai Gizi
            </span>
            <h2 class="mt-5 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                Intip Nilai Gizi Ikan Lele dan Daun Kelor
            </h2>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-2">
            <div class="overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-sm" data-aos="fade-right">
                <div class="bg-emerald-50 px-6 py-5">
                    <h3 class="text-xl font-black text-slate-950">Kandungan Zat Gizi Daun Kelor</h3>
                    <p class="mt-1 text-sm text-slate-500">Per 100 gram</p>
                </div>

                <div class="divide-y divide-slate-100">
                    @foreach ($moringaNutrition as $item)
                        <div class="flex items-center justify-between px-6 py-4">
                            <span class="text-sm font-semibold text-slate-700">{{ $item['name'] }}</span>
                            <span class="text-sm text-slate-600">{{ $item['value'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-sm" data-aos="fade-left">
                <div class="bg-cyan-50 px-6 py-5">
                    <h3 class="text-xl font-black text-slate-950">Kandungan Gizi Ikan Lele</h3>
                    <p class="mt-1 text-sm text-slate-500">Per 100 gram</p>
                </div>

                <div class="divide-y divide-slate-100">
                    @foreach ($catfishNutrition as $item)
                        <div class="flex items-center justify-between px-6 py-4">
                            <span class="text-sm font-semibold text-slate-700">{{ $item['name'] }}</span>
                            <span class="text-sm text-slate-600">{{ $item['value'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>