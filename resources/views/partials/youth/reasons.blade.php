<section class="bg-slate-50 py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="mx-auto max-w-3xl text-center" data-aos="fade-up">
            <span class="inline-flex items-center rounded-full border border-sky-100 bg-white px-4 py-2 text-sm font-semibold text-sky-700">
                Kenapa Remaja Dilibatkan?
            </span>

            <h2 class="mt-5 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                Remaja Bukan Hanya Objek, tetapi Subjek Perubahan
            </h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            @foreach ($reasons as $index => $reason)
                <div class="rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-lg"
                     data-aos="fade-up"
                     data-aos-delay="{{ $index * 80 }}">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-sky-50 text-lg font-black text-sky-700 ring-1 ring-sky-100">
                        {{ $index + 1 }}
                    </div>

                    <h3 class="mt-6 text-2xl font-black text-slate-950">
                        {{ $reason['title'] }}
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                        {{ $reason['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>