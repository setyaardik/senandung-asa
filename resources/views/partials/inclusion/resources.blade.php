<section class="py-20 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <span class="px-4 py-2 bg-sky-100 text-sky-700 rounded-full text-sm font-semibold">
                Resources & Education
            </span>

            <h2 class="mt-5 text-4xl font-black text-blue-950">
                Modul Interaktif SAHABAT
            </h2>

            <p class="mt-4 text-gray-600 max-w-3xl mx-auto leading-8">
                Panduan penggunaan alat bantu tuas anti-tremor
                untuk mendukung aktivitas harian remaja disabilitas mental.
            </p>
        </div>

        {{-- FLIPBOOK --}}
        <div class="flex justify-center">

            <div id="flipbook" class="w-full max-w-5xl h-[700px] shadow-2xl rounded-3xl overflow-hidden">
            </div>

        </div>

    </div>

    {{-- PAGEFLIP --}}
    <script src="https://cdn.jsdelivr.net/npm/page-flip/dist/js/page-flip.browser.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const pageFlip = new St.PageFlip(
                document.getElementById('flipbook'),
                {
                    width: 500,
                    height: 700,
                    size: "stretch",
                    minWidth: 300,
                    maxWidth: 1000,
                    minHeight: 400,
                    maxHeight: 1200,
                    showCover: true,
                    mobileScrollSupport: true,
                }
            );

            pageFlip.loadFromImages([
                "/images/modul/1.jpg",
                "/images/modul/2.jpg",
                "/images/modul/3.jpg",
                "/images/modul/4.jpg",
                "/images/modul/5.jpg",
                "/images/modul/6.jpg",
                "/images/modul/7.jpg",
                "/images/modul/8.jpg",
                "/images/modul/9.jpg",
                "/images/modul/10.jpg",
                "/images/modul/11.jpg",
                "/images/modul/12.jpg",
                "/images/modul/13.jpg",
                "/images/modul/14.jpg",
                "/images/modul/15.jpg",
                "/images/modul/16.jpg",
                "/images/modul/17.jpg",
                "/images/modul/18.jpg",
            ]);
        });
    </script>

    <div class="py-20 text-center mb-10">
        <a href="{{ asset('documents/modul-senandung-asa.pdf') }}"
            class="bg-blue-900 text-white px-6 py-3 rounded-full">
            Download Modul SAHABAT
        </a>
    </div>

</section>