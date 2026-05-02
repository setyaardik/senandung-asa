<section class="bg-slate-50 py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="mx-auto max-w-3xl text-center" data-aos="fade-up">
            <span class="inline-flex items-center rounded-full border border-cyan-100 bg-white px-4 py-2 text-sm font-semibold text-cyan-700">
                Penyebab
            </span>
            <h2 class="mt-5 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                Apa Saja Penyebab Stunting?
            </h2>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($causes as $index => $cause)
                <div class="rounded-[26px] border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg"
                     data-aos="fade-up"
                     data-aos-delay="{{ $index * 60 }}">
                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-cyan-50 text-sm font-black text-cyan-700">
                        {{ $index + 1 }}
                    </div>
                    <p class="mt-5 text-sm leading-7 text-slate-600 sm:text-base">
                        {{ $cause }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>