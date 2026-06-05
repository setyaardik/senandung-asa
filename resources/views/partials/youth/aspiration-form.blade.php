<section id="aspirasi" class="bg-white py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="grid gap-10 lg:grid-cols-2 lg:gap-14">

            <div data-aos="fade-right">
                <span class="inline-flex items-center rounded-full border border-sky-100 bg-sky-50 px-4 py-2 text-sm font-semibold text-sky-700">
                    Layanan Pengaduan dan Aspirasi
                </span>

                <h2 class="mt-5 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                    Yuk Berdampak, Suarakan Aspirasimu!
                </h2>

                <p class="mt-5 text-base leading-8 text-slate-600 md:text-lg">
                    Buat kamu remaja di Jawa Tengah, sampaikan aspirasi atau pengaduanmu untuk membangun Jawa Tengah
                    yang lebih baik. Aspirasi yang dihimpun akan menjadi bahan masukan dalam mendukung pembangunan
                    yang lebih responsif terhadap kebutuhan generasi muda.
                </p>

                <div class="mt-6 rounded-[24px] border border-sky-100 bg-sky-50 p-5">
                    <p class="text-sm leading-7 text-slate-700">
                        Kami berkomitmen menjaga kerahasiaan data. Nama dapat diisi menggunakan inisial apabila
                        tidak ingin menampilkan identitas pribadi.
                    </p>
                </div>
            </div>

            <form
                method="POST"
                action="{{ route('aspirations.store') }}"
                class="rounded-[32px] border border-slate-200 bg-slate-50 p-6 shadow-sm sm:p-8"
                data-aos="fade-left"
            >
                @csrf

                @if(session('success'))
                    <div class="mb-5 rounded-2xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="grid gap-5">

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Nama/Inisial
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Boleh diisi nama atau inisial"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-100"
                        >
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Usia
                        </label>

                        <input
                            type="number"
                            name="age"
                            value="{{ old('age') }}"
                            placeholder="Contoh: 17"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-100"
                        >
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Jenis Kelamin
                        </label>

                        <select
                            name="gender"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-100"
                        >
                            <option value="">Pilih jenis kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Tidak ingin menyebutkan">Tidak ingin menyebutkan</option>
                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Asal Daerah
                        </label>

                        <input
                            type="text"
                            name="region"
                            value="{{ old('region') }}"
                            placeholder="Kabupaten/Kota"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-100"
                        >
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">
                            Aspirasi/Pengaduan <span class="text-red-500">*</span>
                        </label>

                        <textarea
                            name="message"
                            rows="5"
                            required
                            placeholder="Tulis aspirasi atau pengaduanmu di sini"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-100"
                        >{{ old('message') }}</textarea>

                        @error('message')
                            <p class="mt-2 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="inline-flex justify-center rounded-full bg-blue-900 px-6 py-3 text-sm font-semibold text-white shadow-lg transition hover:-translate-y-0.5 hover:bg-sky-600"
                    >
                        Kirim Aspirasi
                    </button>

                </div>
            </form>

        </div>
    </div>
</section>