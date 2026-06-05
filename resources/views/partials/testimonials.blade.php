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
                    'image' => asset('images/testimonials/ischak.jpg'),
                    'message' => 'Saya mendukung penuh dan menjadi saksi kontribusi nyata Senandung Asa yang berdampak besar bagi remaja, khususnya di Kabupaten Tegal. Teruslah menginspirasi dan membawa semangat positif untuk seluruh remaja Provinsi Jawa Tengah.'
                ],
                [
                    'name' => 'H. Dedy Yon Supriyono, S.E., MM',
                    'role' => 'Walikota Tegal',
                    'image' => asset('images/testimonials/dedy.jpg'),
                    'message' => 'Senandung Asa adalah jawaban atas permasalahan anak muda zaman sekarang. Semangat dan sukses selalu untuk Duta GenRe Jawa Tengah dalam mengabdi untuk negeri!'
                ],
                [
                    'name' => 'Mak Eka Sulistia Ediningsih, SH',
                    'role' => 'Kepala Perwakilan BKKBN Jawa Tengah (2023–2025)',
                    'image' => asset('images/testimonials/mak-eka.jpg'),
                    'message' => "Remaja adalah tulang punggung bangsa. Saya mendukung penuh Duta GenRe Jawa Tengah untuk semakin mengibarkan kiprah kebermanfaatan melalui berbagai aksi nyata yang telah dilakukan."
                ],
                [
                    'name' => 'Nilna Almuna',
                    'role' => 'Bunda GenRe Kabupaten Tegal',
                    'image' => asset('images/testimonials/nilna.jpg'),
                    'message' => 'Remaja yang kritis dan berkarya adalah pondasi kemajuan bangsa. Melalui ekosistem ini, saya percaya kita bersama dapat mewujudkan visi Indonesia Emas 2045.'
                ],
                [
                    'name' => 'Lina Sofiani',
                    'role' => 'Emergency Specialist UNICEF Indonesia',
                    'image' => asset('images/testimonials/lina.jpg'),
                    'message' => 'Senandung Asa adalah program yang berjalan secara berkelanjutan (sustainable) dan menjunjung tinggi inklusivitas, terutama melalui keterlibatannya yang aktif dalam aspek lingkungan.'
                ],
                [
                    'name' => 'Assoc. Prof. Dr. Drs. Soehardjoepri, M.Si',
                    'role' => 'Ahli Aktuaria & Statistika ITS',
                    'image' => asset('images/testimonials/soe.jpg'),
                    'message' => 'Prototipe Senandung Asa adalah solusi efektif bagi penyandang disabilitas mental. Dengan kekuatan kolaborasi anak muda, alat ini harus digiatkan hingga menjangkau seluruh Indonesia.'
                ],
                [
                    'name' => 'Dr. Hendro Asmoro, SST., MSi',
                    'role' => 'Pusat Pengembangan Generasi, Kementerian Lingkungan Hidup RI',
                    'image' => asset('images/testimonials/hendro.jpg'),
                    'message' => 'Aksi yang sangat menginspirasi. Indonesia membutuhkan anak muda yang berani bergerak di aspek lingkungan seperti yang dijalankan oleh Senandung Asa.'
                ],
                [
                    'name' => 'Ni Made Anita Widjaja, S.S., M.Pd',
                    'role' => 'Kepala SMP Taman Rama Jimbaran, Judge of AISEEF 2026',
                    'image' => asset('images/testimonials/anita.jpg'),
                    'message' => "Inovasi disabilitas ini adalah sebuah 'GONG'. Saya berharap skalabilitasnya dapat meluas secara menyeluruh untuk mendefinisikan arti inklusivitas yang sebenarnya."
                ],
                [
                    'name' => 'Dra. Ema Rachmawati, M.Hum.',
                    'role' => 'Kepala DP3AP2&KB Provinsi Jawa Tengah',
                    'image' => asset('images/testimonials/ema.jpg'),
                    'message' => 'Senandung Asa adalah sebuah inovasi yang kreatif, inklusif, dan sangat relevan dengan kebutuhan teman-teman penyandang disabilitas mental. Harapan besar saya, langkah ini tidak hanya berhenti di Jawa Tengah, melainkan terus tumbuh dan meluas hingga membawa dampak nyata bagi seluruh Indonesia.'
                ],

                [
                    'name' => 'Dr. Mohammad Saleh, S.T., S.H., M.En.',
                    'role' => 'Wakil Ketua DPRD Provinsi Jawa Tengah',
                    'image' => asset('images/testimonials/saleh.jpg'),
                    'message' => 'Prototipe Senandung Asa sangat layak untuk mendapatkan dukungan penuh dari berbagai pihak. Harapan besarnya, inisiatif luar biasa dari anak muda Jawa Tengah ini dapat berjalan secara berkelanjutan (sustainable) dan kehadirannya mampu memberikan manfaat yang semakin luas bagi masyarakat.'
                ],

                [
                    'name' => 'Ny. Dyah Afif Nurhidayat, S.STP.',
                    'role' => 'Ibu Bupati Kabupaten Wonosobo',
                    'image' => asset('images/testimonials/dyah.jpg'),
                    'message' => 'Sebuah program yang mungkin terlihat sederhana, namun justru inovasi esensial inilah yang paling dibutuhkan oleh anak-anak dengan disabilitas mental. Senandung Asa memberikan dampak yang luar biasa nyata. Semoga inovasi ini semakin sukses dan terus menebar manfaat bagi sesama.'
                ],

                [
                    'name' => 'Astrid Widayani, S.S., S.E., M.M., DBA',
                    'role' => "Wakil Walikota Surakarta | Rektor UNSA '23-'25",
                    'image' => asset('images/testimonials/astrid.jpg'),
                    'message' => 'Langkah yang sangat apik dari pemuda Jawa Tengah. Program unggulan Senandung Asa tidak hanya menciptakan dampak sosial yang nyata, tetapi juga menjadi wujud penguatan partisipasi bermakna anak muda dalam merealisasikan prinsip Generasi Berencana: mewujudkan remaja yang sehat, cerdas, dan ceria.'
                ],

                [
                    'name' => 'Hj. Laila Saidah Witiarso Utomo, S.H., M.Kn.',
                    'role' => 'Ibu Bupati Kabupaten Jepara',
                    'image' => asset('images/testimonials/laila.jpg'),
                    'message' => 'Semangat selalu untuk Mas Arya! Kami sangat mendukung langkah-langkah baik ini agar terus berdampak positif. Inisiatif dan berbagai advokasi inklusif yang telah dan akan dilakukan oleh generasi muda Jawa Tengah ini patut kita apresiasi dan dukung sepenuhnya.'
                ],

                [
                    'name' => 'Faelasufa, S.IP., M.PP.',
                    'role' => 'Ibu Bupati Kabupaten Batang',
                    'image' => asset('images/testimonials/faela.jpg'),
                    'message' => 'Sangat bangga dan bersyukur melihat anak muda yang memiliki jiwa advokasi luar biasa. Senandung Asa lahir sebagai langkah hebat untuk semakin menguatkan peran pemuda di Indonesia. Semangat dan sukses selalu, terutama dalam melangkah menuju Apresiasi Duta GenRe Tingkat Nasional.'
                ],

                [
                    'name' => 'Raja Thifal Mazaya Izzati, S.I.Kom.',
                    'role' => 'Ketua TP PKK Kabupaten Purworejo (2025-2030)',
                    'image' => asset('images/testimonials/raja.jpg'),
                    'message' => 'Langkah yang sangat berdampak dari Ananda Arya bersama GenRe Provinsi Jawa Tengah melalui berbagai advokasi inklusifnya. Semoga pengabdian tulus yang telah didedikasikan untuk Jawa Tengah ini akan selalu membawa keberkahan dan kebaikan yang lebih luas lagi ke depannya.'
                ],
            ];
        @endphp

        <div class="relative mt-16" data-aos="zoom-in-up" data-aos-delay="120">

            {{-- desktop arrows --}}
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
                        <article class="testimonial-slide min-w-full px-6 py-12 md:px-12 md:py-14">
                            <div class="mx-auto max-w-4xl text-center">

                                {{-- avatar --}}
                                <div class="mx-auto mb-8 h-20 w-20 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-sky-100 md:h-24 md:w-24">
                                    <img
                                        src="{{ $item['image'] }}"
                                        alt="{{ $item['name'] }}"
                                        class="h-full w-full object-cover"
                                    >
                                </div>

                                {{-- quote icon --}}
                                <div class="mb-6 flex justify-center text-sky-500">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 24 24"
                                        class="h-10 w-10 opacity-20">
                                        <path d="M7.17 6A5.001 5.001 0 002 11v7h7v-7H5.08A3.001 3.001 0 017.17 8H9V6H7.17zm10 0A5.001 5.001 0 0012 11v7h7v-7h-3.92A3.001 3.001 0 0117.17 8H19V6h-1.83z"/>
                                    </svg>
                                </div>

                                {{-- message --}}
                                <blockquote class="text-base leading-7 text-slate-600 md:text-lg md:leading-8">
                                    “{!! nl2br(e($item['message'])) !!}”
                                </blockquote>

                                {{-- author --}}
                                <div class="mt-10">
                                    <h3 class="text-lg font-semibold text-slate-900">
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