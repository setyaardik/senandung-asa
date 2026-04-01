<section id="testimonials" class="relative overflow-hidden bg-[#f7faff] py-20 lg:py-24">
    <div class="absolute inset-0 opacity-30">
        <div class="absolute left-0 top-10 h-64 w-64 bg-[radial-gradient(circle,_rgba(2,132,199,0.08)_2px,_transparent_2px)] bg-[length:22px_22px]"></div>
        <div class="absolute right-10 top-20 h-64 w-64 bg-[radial-gradient(circle,_rgba(2,132,199,0.08)_2px,_transparent_2px)] bg-[length:22px_22px]"></div>
        <div class="absolute bottom-0 left-1/4 h-64 w-64 bg-[radial-gradient(circle,_rgba(2,132,199,0.08)_2px,_transparent_2px)] bg-[length:22px_22px]"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-10">
        <div class="mx-auto max-w-4xl text-center" data-aos="fade-up">
            <span class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-400">
                Testimonials
            </span>
            <h2 class="mt-5 text-4xl font-black tracking-tight text-blue-950 md:text-5xl lg:text-6xl">
                Kata Mereka Tentang
                <span class="block text-sky-600">Senandung Asa</span>
            </h2>
        </div>

        @php
            $testimonials = [
                [
                    'name' => 'H. Ischak Maulana Rohman, S.H.',
                    'role' => 'Bupati Kabupaten Tegal',
                    'message' => 'Saya mendukung penuh dan menjadi saksi kontribusi nyata Senandung Asa yang berdampak besar bagi remaja, khususnya di Kabupaten Tegal. Teruslah menginspirasi dan membawa semangat positif untuk seluruh remaja Provinsi Jawa Tengah.'
                ],
                [
                    'name' => 'H. Dedy Yon Supriyono, S.E., MM',
                    'role' => 'Walikota Tegal',
                    'message' => 'Senandung Asa adalah jawaban atas permasalahan anak muda zaman sekarang. Semangat dan sukses selalu untuk Duta GenRe Jawa Tengah dalam mengabdi untuk negeri!'
                ],
                [
                    'name' => 'Mak Eka Sulistia Ediningsih, SH',
                    'role' => 'Kepala Perwakilan BKKBN Jawa Tengah (2023–2025)',
                    'message' => "Remaja adalah tulang punggung bangsa. Saya mendukung penuh Duta GenRe Jawa Tengah untuk semakin mengibarkan kiprah kebermanfaatan melalui berbagai aksi nyata yang telah dilakukan."
                ],
                [
                    'name' => 'Nilna Almuna',
                    'role' => 'Bunda GenRe Kabupaten Tegal',
                    'message' => 'Remaja yang kritis dan berkarya adalah pondasi kemajuan bangsa. Melalui ekosistem ini, saya percaya kita bersama dapat mewujudkan visi Indonesia Emas 2045.'
                ],
                [
                    'name' => 'Lina Sofiani',
                    'role' => 'Emergency Specialist UNICEF Indonesia',
                    'message' => 'Senandung Asa adalah program yang berjalan secara berkelanjutan (sustainable) dan menjunjung tinggi inklusivitas, terutama melalui keterlibatannya yang aktif dalam aspek lingkungan.'
                ],
                [
                    'name' => 'Assoc. Prof. Dr. Drs. Soehardjoepri, M.Si',
                    'role' => 'Ahli Aktuaria & Statistika ITS',
                    'message' => 'Prototipe Senandung Asa adalah solusi efektif bagi penyandang disabilitas mental. Dengan kekuatan kolaborasi anak muda, alat ini harus digiatkan hingga menjangkau seluruh Indonesia.'
                ],
                [
                    'name' => 'Dr. Hendro Asmoro, SST., MSi',
                    'role' => 'Pusat Pengembangan Generasi, Kementerian Lingkungan Hidup RI',
                    'message' => 'Aksi yang sangat menginspirasi. Indonesia membutuhkan anak muda yang berani bergerak di aspek lingkungan seperti yang dijalankan oleh Senandung Asa.'
                ],
                [
                    'name' => 'Ni Made Anita Widjaja, S.S., M.Pd',
                    'role' => 'Kepala SMP Taman Rama Jimbaran, Judge of AISEEF 2026',
                    'message' => "Inovasi disabilitas ini adalah sebuah 'GONG'. Saya berharap skalabilitasnya dapat meluas secara menyeluruh untuk mendefinisikan arti inklusivitas yang sebenarnya."
                ],
                [
                    'name' => 'Ibu Laili',
                    'role' => 'Orang Tua Anak Penyandang Disabilitas Mental',
                    'message' => 'Sebagai orang tua, keterbatasan kemandirian anak dalam aktivitas sehari-hari seperti makan dan menulis adalah tantangan besar. Saya merasa sangat didukung dengan adanya alat ini dan berharap teman-teman difabel lainnya dapat merasakan manfaat yang sama.'
                ],
            ];
        @endphp

        <div class="relative mt-16" data-aos="zoom-in-up" data-aos-delay="120">
            <button id="testimonial-prev"
                class="absolute left-0 top-1/2 z-20 hidden -translate-y-1/2 rounded-full border border-slate-200 bg-white/95 p-4 text-slate-700 shadow-lg transition hover:border-sky-300 hover:text-sky-600 lg:flex">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                    <path d="M15 19l-7-7 7-7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            <button id="testimonial-next"
                class="absolute right-0 top-1/2 z-20 hidden -translate-y-1/2 rounded-full border border-slate-200 bg-white/95 p-4 text-slate-700 shadow-lg transition hover:border-sky-300 hover:text-sky-600 lg:flex">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                    <path d="M9 5l7 7-7 7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            <div class="mx-auto max-w-4xl overflow-hidden rounded-[28px] bg-white shadow-md ring-1 ring-slate-200">
                <div id="testimonial-track" class="flex transition-transform duration-500 ease-out">
                    @foreach ($testimonials as $item)
                        <article class="testimonial-slide min-w-full px-6 py-10 md:px-10 md:py-12">
                            <div class="mx-auto max-w-4xl text-center">
                                {{-- stars --}}
                                <div class="mb-8 flex items-center justify-center gap-2 text-amber-500">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                        </svg>
                                    @endfor
                                </div>

                                {{-- message --}}
                                <blockquote class="text-base leading-7 text-slate-600 md:text-lg md:leading-8">
                                    “{!! nl2br(e($item['message'])) !!}”
                                </blockquote>

                                {{-- author --}}
                                <div class="mt-10">
                                    <h3 class="mt-6 text-lg font-semibold text-slate-900">
                                        {{ $item['name'] }}
                                    </h3>
                                    <p class="mt-1 text-sm text-slate-500">
                                        {{ $item['role'] }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            {{-- mobile arrows --}}
            <div class="mt-6 flex items-center justify-center gap-3 lg:hidden">
                <button id="testimonial-prev-mobile"
                    class="rounded-full border border-slate-200 bg-white p-3 text-slate-700 shadow-sm transition hover:border-sky-300 hover:text-sky-600">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">
                        <path d="M15 19l-7-7 7-7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button id="testimonial-next-mobile"
                    class="rounded-full border border-slate-200 bg-white p-3 text-slate-700 shadow-sm transition hover:border-sky-300 hover:text-sky-600">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">
                        <path d="M9 5l7 7-7 7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

            {{-- dots --}}
            <div id="testimonial-dots" class="mt-8 flex items-center justify-center gap-3">
                @foreach ($testimonials as $index => $item)
                    <button
                        class="testimonial-dot h-3 w-3 rounded-full transition {{ $index === 0 ? 'bg-slate-900 scale-110' : 'bg-slate-300' }}"
                        data-index="{{ $index }}"
                        aria-label="Go to slide {{ $index + 1 }}"
                    ></button>
                @endforeach
            </div>
        </div>
    </div>
</section>