<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">

        {{-- heading --}}
        <div class="mx-auto mb-14 max-w-3xl text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-400">
                Galeri Inovasi & Demonstrasi
            </span>

            <h2 class="mt-4 text-4xl font-black tracking-tight text-blue-950 md:text-5xl">
                Komponen Visual & Inovasi
            </h2>

            <p class="mt-5 text-base leading-8 text-slate-600 md:text-lg">
                Menampilkan implementasi alat, proses penggunaan,
                serta inovasi visual yang mendukung inklusivitas
                penyandang disabilitas mental.
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-2">

            {{-- VIDEO SECTION --}}
            <div
                class="overflow-hidden rounded-[32px] bg-white shadow-md ring-1 ring-slate-200"
                data-aos="fade-right"
            >

                <div class="border-b border-slate-100 px-8 py-6">
                    <div class="flex items-center gap-3">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-sky-100 text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                class="h-6 w-6">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="text-2xl font-black text-blue-900">
                                Video Demo Penggunaan
                            </h3>

                            <p class="mt-1 text-sm text-slate-500">
                                Demonstrasi penggunaan alat secara langsung
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="overflow-hidden rounded-3xl bg-slate-100 shadow-inner">

                        {{-- VIDEO --}}
                        <video
                            controls
                            class="h-full w-full object-cover"
                            poster="{{ asset('images/showcase/video-thumbnail.jpg') }}"
                        >
                            <source src="{{ asset('videos/demo.mp4') }}" type="video/mp4">
                            Browser Anda tidak mendukung video.
                        </video>

                    </div>

                    <p class="mt-6 text-base leading-8 text-slate-600">
                        Menampilkan fleksibilitas alat untuk aktivitas makan,
                        menulis, dan kebersihan diri secara mandiri
                        guna mendukung peningkatan kualitas hidup pengguna.
                    </p>
                </div>
            </div>

            {{-- IMAGE GALLERY --}}
            <div
                class="overflow-hidden rounded-[32px] bg-white shadow-md ring-1 ring-slate-200"
                data-aos="fade-left"
            >

                <div class="border-b border-slate-100 px-8 py-6">
                    <div class="flex items-center gap-3">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-sky-100 text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                class="h-6 w-6">
                                <path d="M4 5a2 2 0 012-2h12a2 2 0 012 2v14l-4-4H6a2 2 0 01-2-2V5z"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="text-2xl font-black text-blue-900">
                                Galeri Alat Inovasi
                            </h3>

                            <p class="mt-1 text-sm text-slate-500">
                                Dokumentasi visual alat dan implementasi
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 p-6">

                    {{-- image 1 --}}
                    <div class="group overflow-hidden rounded-3xl">
                        <img
                            src="{{ asset('images/showcase/alat-1.jpg') }}"
                            alt="Alat 1"
                            class="h-56 w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                    </div>

                    {{-- image 2 --}}
                    <div class="group overflow-hidden rounded-3xl">
                        <img
                            src="{{ asset('images/showcase/alat-2.jpg') }}"
                            alt="Alat 2"
                            class="h-56 w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                    </div>

                    {{-- image 3 --}}
                    <div class="group overflow-hidden rounded-3xl">
                        <img
                            src="{{ asset('images/showcase/alat-3.jpg') }}"
                            alt="Alat 3"
                            class="h-56 w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                    </div>

                    {{-- image 4 --}}
                    <div class="group overflow-hidden rounded-3xl">
                        <img
                            src="{{ asset('images/showcase/alat-4.jpg') }}"
                            alt="Alat 4"
                            class="h-56 w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                    </div>

                </div>

                <div class="px-6 pb-8">
                    <p class="text-base leading-8 text-slate-600">
                        Pendekatan stimulasi sensorik membantu meningkatkan
                        stabilitas motorik dan kontrol genggaman pengguna
                        melalui desain alat yang ergonomis dan adaptif.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>