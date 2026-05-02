<section class="bg-white py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="grid gap-10 lg:grid-cols-2 lg:gap-14">
            <div data-aos="fade-right">
                <span class="inline-flex items-center rounded-full border border-sky-100 bg-sky-50 px-4 py-2 text-sm font-semibold text-sky-700">
                    Permasalahan
                </span>

                <h2 class="mt-5 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                    Tantangan Partisipasi Remaja
                </h2>

                <p class="mt-5 text-base leading-8 text-slate-600 md:text-lg">
                    Walaupun banyak remaja ingin terlibat, masih ada berbagai tantangan seperti minimnya wadah,
                    hambatan sosial, rendahnya literasi politik, serta risiko penggunaan ruang digital.
                </p>
            </div>

            <div class="space-y-4" data-aos="fade-left">
                @foreach ($problems as $index => $problem)
                    <div class="flex items-start gap-4 rounded-[24px] border border-slate-200 bg-slate-50 px-5 py-5">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-sky-100 text-sm font-bold text-sky-700">
                            {{ $index + 1 }}
                        </div>

                        <p class="text-sm leading-7 text-slate-700 sm:text-base">
                            {{ $problem }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>