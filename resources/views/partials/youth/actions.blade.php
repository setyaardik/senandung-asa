<section class="bg-[linear-gradient(180deg,#f8fbff_0%,#eff6ff_100%)] py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="mx-auto max-w-3xl text-center" data-aos="fade-up">
            <span class="inline-flex items-center rounded-full border border-sky-100 bg-white px-4 py-2 text-sm font-semibold text-sky-700">
                Aksi Duta Genre
            </span>

            <h2 class="mt-5 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                Senandung Asa sebagai Ruang Partisipasi Remaja
            </h2>

            <p class="mt-4 text-base leading-7 text-slate-600 md:text-lg">
                Duta Genre hadir sebagai akselerator dan penghubung antara suara remaja dengan pemangku kebijakan.
            </p>
        </div>

        <div class="mt-14 grid gap-6 lg:grid-cols-3">
            @foreach ($actions as $index => $action)
                <div class="rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-lg"
                     data-aos="fade-up"
                     data-aos-delay="{{ $index * 80 }}">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-900 text-lg font-black text-white">
                        {{ $index + 1 }}
                    </div>

                    <h3 class="mt-6 text-2xl font-black text-slate-950">
                        {{ $action['title'] }}
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                        {{ $action['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>