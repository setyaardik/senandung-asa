<section id="faq" class="bg-[linear-gradient(180deg,#f8fbff_0%,#f8fafc_100%)] py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-5xl px-6 lg:px-10">
        <div class="mx-auto max-w-3xl text-center" data-aos="fade-up">
            <span class="inline-flex items-center rounded-full border border-sky-100 bg-white px-4 py-2 text-sm font-semibold text-sky-700 shadow-sm">
                FAQ
            </span>
            <h2 class="mt-5 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl md:text-5xl">
                Mengenal Lebih Dekat
            </h2>
            <p class="mt-4 text-base leading-7 text-slate-600 md:text-lg">
                Pertanyaan umum seputar GenRe dan Senandung Asa.
            </p>
        </div>

        <div class="mt-14 space-y-4" id="faq-container">
            @foreach ($faqs as $index => $faq)
                <div class="faq-item group overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-[0_14px_40px_rgba(15,23,42,0.05)] transition duration-300 hover:shadow-[0_18px_50px_rgba(15,23,42,0.08)] {{ $index === 0 ? 'is-open border-sky-200 ring-1 ring-sky-100' : '' }}"
                     data-aos="fade-up"
                     data-aos-delay="{{ $index * 70 }}">
                    <button
                        class="faq-question flex w-full items-center justify-between gap-4 px-4 py-4 text-left sm:px-6 sm:py-5 md:px-7 md:py-6"
                        type="button"
                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                    >
                        <div class="flex items-start gap-4">
                            <div class="mt-1 flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl bg-sky-50 text-sky-600 ring-1 ring-sky-100">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 18h.01M9.09 9a3 3 0 1 1 5.82 1c0 2-3 2-3 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                            <span class="text-base font-semibold leading-7 text-slate-900 md:text-lg">
                                {{ $faq->question }}
                            </span>
                        </div>

                        <span class="faq-icon flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-slate-50 text-sky-600 ring-1 ring-slate-200 transition duration-300 sm:h-11 sm:w-11">
                            <svg class="faq-icon-svg h-5 w-5 transition duration-300 {{ $index === 0 ? 'rotate-45' : '' }}" viewBox="0 0 24 24" fill="none">
                                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </button>

                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-out" style="{{ $index === 0 ? 'max-height: 260px;' : 'max-height: 0;' }}">
                        <div class="px-6 pb-6 md:px-7 md:pb-7">
                            <div class="ml-0 rounded-2xl bg-slate-50 px-4 py-4 text-sm leading-7 text-slate-600 ring-1 ring-slate-100 sm:ml-14 sm:px-5 md:text-base">
                                {!! $faq->answer !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>