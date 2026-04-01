<section id="partners" class="bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="mx-auto max-w-3xl text-center" data-aos="fade-up">
            <span class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-400">
                Our Partner
            </span>
            <h2 class="mt-4 text-4xl font-black tracking-tight text-slate-950 md:text-5xl">
                Mitra Kolaborasi
            </h2>
        </div>

        @php
            $partners = [
                ['name' => 'BKKBN JATENG', 'file' => 'bkkbn-jateng.png'],
                ['name' => 'DP3AP2&KB JATENG', 'file' => 'dp3ap2kb-jateng.png'],
                ['name' => 'UNICEF INDONESIA', 'file' => 'unicef-indonesia.png'],
                ['name' => 'GREENERATION FOUNDATION', 'file' => 'greeneration-foundation.png'],
                ['name' => 'HEALME.ID', 'file' => 'healmeid.png'],
                ['name' => 'RUMAH SAKIT HAWARI ESSA', 'file' => 'rs-hawari-essa.png'],
                ['name' => 'IPEKB KABUPATEN TEGAL', 'file' => 'ipekb-kabupaten-tegal.png'],
                ['name' => 'FORUM GENRE JAWA TENGAH', 'file' => 'forum-genre-jateng.png'],
            ];
        @endphp

        <div class="mt-14 grid grid-cols-2 gap-5 md:grid-cols-3 xl:grid-cols-4">
            @foreach ($partners as $partner)
                <div class="group rounded-[28px] border border-slate-200 bg-white p-5 shadow-[0_12px_35px_rgba(15,23,42,0.05)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_20px_45px_rgba(15,23,42,0.08)]" data-aos="fade-up" data-aos-delay="{{ $loop->index * 60 }}">
                    <div class="flex h-[140px] items-center justify-center rounded-2xl bg-slate-50 ring-1 ring-slate-100">
                        {{-- Nanti ganti sendiri logonya --}}
                        <img
                            src="{{ asset('images/partners/' . $partner['file']) }}"
                            alt="{{ $partner['name'] }}"
                            class="max-h-[72px] max-w-[160px] object-contain"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        {{-- fallback placeholder --}}
                        <div class="hidden h-full w-full items-center justify-center px-4 text-center">
                            <span class="text-sm font-semibold uppercase tracking-[0.14em] text-slate-400">
                                Logo {{ $partner['name'] }}
                            </span>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <h3 class="text-sm font-semibold leading-6 text-slate-800 md:text-base">
                            {{ $partner['name'] }}
                        </h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>