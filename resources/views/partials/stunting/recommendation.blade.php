<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6">

        {{-- heading --}}
        <div class="mx-auto max-w-3xl text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-400">
                Smart Nutrition
            </span>

            <h2 class="mt-4 text-4xl font-black tracking-tight text-blue-950 md:text-5xl">
                Cek Rekomendasi Dimsum Kalor Lele
            </h2>

            <p class="mt-5 text-base leading-8 text-slate-600 md:text-lg">
                Masukkan data anak untuk mengetahui rekomendasi
                konsumsi dimsum kalor lele berdasarkan kondisi pertumbuhan.
            </p>
        </div>

        <div class="mt-14 grid gap-8 lg:grid-cols-2">

            {{-- FORM --}}
            <div
                class="rounded-[32px] bg-slate-50 p-8 shadow-sm ring-1 ring-slate-200"
                data-aos="fade-right"
            >

                <div class="mb-8 flex items-center gap-4">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-sky-100 text-sky-600">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                            class="h-7 w-7">
                            <path d="M12 12c2.7 0 8 1.34 8 4v2H4v-2c0-2.66 5.3-4 8-4zm0-2a4 4 0 100-8 4 4 0 000 8z"/>
                        </svg>
                    </div>

                    <div>
                        <h3 class="text-2xl font-black text-blue-950">
                            Input Data Anak
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Smart nutrition recommendation system
                        </p>
                    </div>
                </div>

                <form
                    method="POST"
                    action="{{ route('stunting.recommendation') }}"
                    class="space-y-6"
                >
                    @csrf

                    {{-- umur --}}
                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Umur Anak (bulan)
                        </label>

                        <input
                            type="number"
                            name="umur"
                            required
                            value="{{ old('umur') }}"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-5 py-4 text-slate-700 outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-100"
                            placeholder="Contoh: 24"
                        >
                    </div>

                    {{-- tinggi badan --}}
                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Tinggi Badan (cm)
                        </label>

                        <input
                            type="number"
                            name="tb"
                            required
                            value="{{ old('tb') }}"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-5 py-4 text-slate-700 outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-100"
                            placeholder="Contoh: 85"
                        >
                    </div>

                    {{-- berat badan --}}
                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Berat Badan (kg)
                        </label>

                        <input
                            type="number"
                            step="0.1"
                            name="bb"
                            required
                            value="{{ old('bb') }}"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-5 py-4 text-slate-700 outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-100"
                            placeholder="Contoh: 10.5"
                        >
                    </div>

                    {{-- submit --}}
                    <button
                        type="submit"
                        class="inline-flex w-full items-center justify-center rounded-2xl bg-sky-600 px-6 py-4 text-sm font-semibold text-white shadow-lg shadow-sky-200 transition hover:bg-sky-700"
                    >
                        Cek Rekomendasi Nutrisi
                    </button>
                </form>
            </div>

            {{-- RESULT --}}
            <div
                class="rounded-[32px] bg-gradient-to-br from-sky-600 to-blue-900 p-8 text-white shadow-xl"
                data-aos="fade-left"
            >

                <div class="flex items-center gap-4">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white/15">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                            class="h-7 w-7">
                            <path d="M12 2l2.39 7.26H22l-6.19 4.5L18.2 21 12 16.9 5.8 21l2.39-7.24L2 9.26h7.61L12 2z"/>
                        </svg>
                    </div>

                    <div>
                        <h3 class="text-2xl font-black">
                            Hasil Rekomendasi
                        </h3>

                        <p class="mt-1 text-sm text-sky-100">
                            Personalized nutrition insight
                        </p>
                    </div>
                </div>

                @if (session('status_anak'))

                    <div class="mt-10 rounded-3xl bg-white/10 p-6 backdrop-blur-sm">

                        <div>
                            <p class="text-sm font-medium text-sky-100">
                                Status Anak
                            </p>

                            <h4 class="mt-2 text-3xl font-black">
                                {{ session('status_anak') }}
                            </h4>
                        </div>

                        <div class="mt-8">
                            <p class="text-sm font-medium text-sky-100">
                                Rekomendasi Konsumsi
                            </p>

                            <div class="mt-3 flex items-end gap-2">
                                <span class="text-6xl font-black">
                                    {{ session('jumlah_dimsum') }}
                                </span>

                                <span class="pb-2 text-lg font-medium text-sky-100">
                                    dimsum / hari
                                </span>
                            </div>
                        </div>

                        <div class="mt-8 rounded-2xl bg-white/10 p-5">
                            <p class="text-sm leading-7 text-sky-50">
                                {{ session('catatan_gizi') }}
                            </p>
                        </div>

                    </div>

                @else

                    <div class="mt-10 flex h-[350px] items-center justify-center rounded-3xl border border-dashed border-white/20">
                        <div class="max-w-sm text-center">

                            <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="h-10 w-10 text-sky-100">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12A9 9 0 1112 3a9 9 0 019 9z"/>
                                </svg>
                            </div>

                            <h4 class="mt-6 text-2xl font-bold">
                                Belum Ada Data
                            </h4>

                            <p class="mt-3 text-sm leading-7 text-sky-100">
                                Silakan isi data anak terlebih dahulu
                                untuk mendapatkan rekomendasi nutrisi.
                            </p>
                        </div>
                    </div>

                @endif

            </div>

        </div>

    </div>
</section>