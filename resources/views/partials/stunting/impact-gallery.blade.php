<section class="py-20 bg-sky-50 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">

            <span
                class="inline-flex items-center px-4 py-2 rounded-full bg-green-100 text-green-700 text-sm font-semibold">
                Keberdampakan Program
            </span>

            <h2 class="mt-4 text-4xl md:text-5xl font-black text-slate-900">
                Implementasi Dimsum Kelor Lele
            </h2>

            <p class="mt-4 max-w-3xl mx-auto text-slate-600">
                Dokumentasi implementasi inovasi pencegahan stunting di berbagai wilayah Jawa Tengah.
            </p>

        </div>

        <div class="relative">

            <div class="swiper impactSwiper">

                <div class="swiper-wrapper">

                    @for ($i = 1; $i <= 7; $i++)
                        <div class="swiper-slide">

                            <div
                                <div
                                    class="overflow-hidden rounded-[28px] shadow-lg hover:shadow-2xl transition">

                                <img
                                    src="{{ asset('images/stunting/impact/' . $i . '.png') }}"
                                    class="w-full h-[500px] object-contain">

                            </div>

                        </div>
                    @endfor

                </div>

            </div>

            {{-- BUTTON --}}
            <div class="flex justify-center items-center gap-4 mt-10">

                <button
                    class="impact-prev w-14 h-14 rounded-full bg-blue-600 text-white shadow-lg hover:bg-blue-700 transition flex items-center justify-center">

                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 19l-7-7 7-7" />
                    </svg>

                </button>

                <button
                    class="impact-next w-14 h-14 rounded-full bg-blue-600 text-white shadow-lg hover:bg-blue-700 transition flex items-center justify-center">

                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7" />
                    </svg>

                </button>

            </div>

        </div>

    </div>

</section>

<style>

.impactSwiper {
    overflow: hidden;
}

.impactSwiper .swiper-slide {
    height: auto;
}

.impactSwiper .swiper-slide img {
    transition: .4s ease;
}

.impactSwiper .swiper-slide:hover img {
    transform: scale(1.03);
}

</style>

@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function() {

    new Swiper('.impactSwiper', {

        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,

        navigation: {
            nextEl: '.impact-next',
            prevEl: '.impact-prev',
        },

        breakpoints: {

            0: {
                slidesPerView: 1,
            },

            768: {
                slidesPerView: 2,
            },

            1024: {
                slidesPerView: 3,
            }

        }

    });

});

</script>

@endpush