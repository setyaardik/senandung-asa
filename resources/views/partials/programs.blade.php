<section id="ruang-program" class="relative overflow-hidden bg-white py-16 sm:py-20 lg:py-24">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -left-20 top-20 h-64 w-64 rounded-full bg-sky-100/50 blur-3xl"></div>
        <div class="absolute right-0 top-1/3 h-72 w-72 rounded-full bg-blue-100/50 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="mx-auto max-w-4xl text-center" data-aos="fade-up">
            <span class="inline-flex items-center rounded-full border border-sky-100 bg-sky-50 px-4 py-2 text-sm font-semibold uppercase tracking-[0.2em] text-sky-700">
                Ruang Program
            </span>

            <h2 class="mt-5 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl md:text-5xl">
                Pilar Senandung Asa
            </h2>
        </div>

        <div class="mt-14 space-y-14 sm:space-y-16 lg:mt-16 lg:space-y-24">
            @foreach ($programs as $index => $program)
                <div class="grid items-center gap-8 lg:grid-cols-12 lg:gap-12">
                    @if ($index % 2 === 0)
                        <div class="lg:col-span-6" data-aos="fade-right">
                            <div class="inline-flex items-center gap-3 rounded-full bg-slate-50 px-4 py-2 ring-1 ring-slate-200">
                                <span class="text-sm font-semibold text-sky-700">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span>
                                <span class="text-sm font-semibold text-slate-700">{{ $program->short_title ?: $program->title }}</span>
                            </div>

                            <h3 class="mt-5 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">
                                {{ $program->title }}
                            </h3>

                            @if ($program->headline)
                                <p class="mt-4 text-base font-medium text-sky-700 sm:text-lg">
                                    {{ $program->headline }}
                                </p>
                            @endif

                            <div class="mt-5 text-sm leading-7 text-slate-600 sm:text-base sm:leading-8 whitespace-pre-line">
                                {{ $program->description }}
                            </div>
                        </div>

                        <div class="lg:col-span-6" data-aos="fade-left" data-aos-delay="120">
                            <div class="group overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-[0_18px_50px_rgba(15,23,42,0.08)]">
                                <div class="relative">
                                    @if ($program->image)
                                        <img
                                            src="{{ asset('storage/' . $program->image) }}"
                                            alt="{{ $program->title }}"
                                            class="h-[260px] w-full object-cover transition duration-500 group-hover:scale-[1.03] sm:h-[340px] lg:h-[420px]"
                                        >
                                    @else
                                        <div class="flex h-[260px] w-full items-center justify-center bg-slate-100 px-6 text-center text-slate-400 sm:h-[340px] lg:h-[420px]">
                                            Tambahkan foto program di admin panel
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="order-2 lg:order-1 lg:col-span-6" data-aos="fade-right" data-aos-delay="120">
                            <div class="group overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-[0_18px_50px_rgba(15,23,42,0.08)]">
                                <div class="relative">
                                    @if ($program->image)
                                        <img
                                            src="{{ asset('storage/' . $program->image) }}"
                                            alt="{{ $program->title }}"
                                            class="h-[260px] w-full object-cover transition duration-500 group-hover:scale-[1.03] sm:h-[340px] lg:h-[420px]"
                                        >
                                    @else
                                        <div class="flex h-[260px] w-full items-center justify-center bg-slate-100 px-6 text-center text-slate-400 sm:h-[340px] lg:h-[420px]">
                                            Tambahkan foto program di admin panel
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="order-1 lg:order-2 lg:col-span-6" data-aos="fade-left">
                            <div class="inline-flex items-center gap-3 rounded-full bg-slate-50 px-4 py-2 ring-1 ring-slate-200">
                                <span class="text-sm font-semibold text-sky-700">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span>
                                <span class="text-sm font-semibold text-slate-700">{{ $program->short_title ?: $program->title }}</span>
                            </div>

                            <h3 class="mt-5 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">
                                {{ $program->title }}
                            </h3>

                            @if ($program->headline)
                                <p class="mt-4 text-base font-medium text-sky-700 sm:text-lg">
                                    {{ $program->headline }}
                                </p>
                            @endif

                            <div class="mt-5 text-sm leading-7 text-slate-600 sm:text-base sm:leading-8 whitespace-pre-line">
                                {{ $program->description }}
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>