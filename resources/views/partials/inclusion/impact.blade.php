<section class="py-20 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <span class="px-4 py-2 bg-sky-100 text-sky-700 rounded-full text-sm font-semibold">
                Impact Documentation
            </span>

            <h2 class="mt-5 text-4xl font-black text-blue-950">
                Bukti Keberdampakan
            </h2>

            <p class="mt-4 text-gray-600 max-w-3xl mx-auto leading-8">
                Dokumentasi implementasi menunjukkan perubahan perilaku,
                peningkatan kemandirian, serta dukungan positif dari caregiver.
            </p>
        </div>

        {{-- SLIDER --}}
        <div class="swiper impactSwiper">

            <div class="swiper-wrapper">

                @foreach ($gallery as $img)

                    <div class="swiper-slide">
                        <div class="overflow-hidden rounded-[32px] shadow-xl">
                            <img src="{{ asset($img) }}"
                                class="w-full h-[420px] object-cover hover:scale-105 transition duration-500">
                        </div>
                    </div>

                @endforeach

            </div>

            {{-- NAVIGATION --}}
            <div class="flex justify-center items-center gap-4 mt-10">

                <button class="impact-prev w-14 h-14 rounded-full bg-slate-100 hover:bg-sky-100 transition">
                    ←
                </button>

                <button class="impact-next w-14 h-14 rounded-full bg-slate-100 hover:bg-sky-100 transition">
                    →
                </button>

            </div>

        </div>

    </div>

    {{-- SWIPER CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- SWIPER JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            new Swiper('.impactSwiper', {

                slidesPerView: 1,
                spaceBetween: 24,

                navigation: {
                    nextEl: '.impact-next',
                    prevEl: '.impact-prev',
                },

                breakpoints: {

                    768: {
                        slidesPerView: 2,
                    },

                    1024: {
                        slidesPerView: 3,
                    },
                }
            });

        });
    </script>
</section>