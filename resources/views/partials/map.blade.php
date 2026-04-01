<section id="map" class="bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="mx-auto mb-12 max-w-3xl text-center" data-aos="fade-up">
            <h2 class="text-4xl font-black tracking-tight text-slate-950 md:text-5xl">
                Peta Jejak Keberdampakan
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">
            <div class="lg:col-span-8" data-aos="fade-right" data-aos-delay="100">
                <div class="overflow-hidden rounded-[32px] border border-slate-200 bg-slate-50 shadow-[0_20px_50px_rgba(15,23,42,0.06)]">
                    <div class="flex items-center justify-between border-b border-slate-200 bg-white px-5 py-4">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-sky-600">
                                Interaktif
                            </p>
                            <h3 id="map-title" class="mt-1 text-xl font-bold text-slate-900">
                                Peta Jawa Tengah
                            </h3>
                        </div>

                        <button
                            id="map-back-button"
                            type="button"
                            class="hidden rounded-full border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-sky-500 hover:text-sky-600"
                        >
                            Kembali ke Jawa Tengah
                        </button>
                    </div>

                    <div class="relative h-[620px] overflow-hidden bg-[radial-gradient(circle_at_top,#f8fbff,white_60%)]">
                        {{-- JAWA TENGAH --}}
                        <div id="jateng-map-view" class="map-view absolute inset-0 flex items-center justify-center p-8">
                            <svg viewBox="0 0 920 520" class="h-full w-full max-w-[900px]">
                                {{-- siluet utama jateng --}}
                                <path
                                    d="M120 278
                                       C135 240, 170 220, 220 214
                                       C256 208, 290 194, 332 186
                                       C378 176, 438 170, 500 174
                                       C558 178, 626 196, 676 214
                                       C728 232, 780 262, 810 288
                                       C834 308, 836 334, 814 352
                                       C786 372, 748 378, 720 390
                                       C694 402, 666 424, 630 428
                                       C592 432, 560 418, 530 422
                                       C494 426, 462 448, 418 448
                                       C374 448, 336 432, 296 424
                                       C256 416, 212 408, 186 394
                                       C156 378, 136 360, 126 338
                                       C116 316, 112 298, 120 278 Z"
                                    fill="#dbe6f3"
                                    stroke="#c6d3e2"
                                    stroke-width="3"
                                />

                                {{-- pantura barat --}}
                                <polygon class="region integrated" data-name="Kabupaten Brebes"
                                    points="120,268 180,248 206,268 194,300 132,302" />
                                <polygon class="region integrated region-tegal" data-name="Kabupaten Tegal"
                                    points="196,242 270,228 304,252 294,300 208,300" />
                                <polygon class="region integrated" data-name="Kota Tegal"
                                    points="204,214 236,208 246,224 226,236 198,232" />
                                <polygon class="region integrated" data-name="Kabupaten Pemalang"
                                    points="296,228 374,220 404,244 396,298 300,300" />
                                <polygon class="region integrated" data-name="Kabupaten Pekalongan"
                                    points="398,218 470,216 494,242 486,296 400,298" />
                                <polygon class="region integrated" data-name="Kabupaten Batang"
                                    points="490,220 550,222 576,246 572,292 492,296" />
                                <polygon class="region integrated" data-name="Kabupaten Kendal"
                                    points="570,226 632,230 648,258 638,296 574,292" />
                                <polygon class="region integrated" data-name="Kota Semarang"
                                    points="620,206 656,204 672,224 650,242 620,238" />
                                <polygon class="region integrated" data-name="Kabupaten Demak"
                                    points="650,236 722,246 742,284 708,312 640,296" />
                                <polygon class="region integrated" data-name="Kabupaten Jepara"
                                    points="598,146 648,136 682,156 674,192 616,190" />
                                <polygon class="region integrated" data-name="Kabupaten Pati"
                                    points="706,200 774,210 800,250 770,286 718,274" />
                                <polygon class="region integrated" data-name="Kabupaten Rembang"
                                    points="780,194 840,214 850,252 814,274 770,246" />

                                {{-- tengah dan selatan --}}
                                <polygon class="region integrated" data-name="Kabupaten Banyumas"
                                    points="180,318 256,318 260,388 192,398 168,360" />
                                <polygon class="region integrated" data-name="Kabupaten Magelang"
                                    points="408,306 480,306 482,376 420,384 398,346" />
                                <polygon class="region integrated" data-name="Kota Salatiga"
                                    points="522,310 544,310 544,332 520,332" />
                                <polygon class="region integrated" data-name="Kabupaten Grobogan"
                                    points="560,312 644,314 648,382 574,396 548,360" />
                                <polygon class="region integrated" data-name="Kota Surakarta"
                                    points="654,356 682,356 684,380 654,382" />
                                <polygon class="region integrated" data-name="Kabupaten Sukoharjo"
                                    points="640,388 704,388 706,442 648,448 628,418" />
                                <polygon class="region integrated" data-name="Kabupaten Sragen"
                                    points="706,314 784,316 792,382 720,396 680,352" />
                                <polygon class="region integrated" data-name="Kabupaten Blora"
                                    points="782,300 842,300 854,358 814,392 762,366" />

                                {{-- label hint --}}
                                <text x="248" y="266" class="svg-caption">Kabupaten Tegal</text>
                            </svg>
                        </div>

                        {{-- TEGAL KECAMATAN --}}
                        <div id="tegal-map-view" class="map-view absolute inset-0 hidden items-center justify-center p-8">
                            <svg viewBox="0 0 680 560" class="h-full w-full max-w-[620px]">
                                {{-- frame wilayah tegal --}}
                                <path
                                    d="M182 88
                                       C220 70, 302 64, 392 74
                                       C454 82, 510 106, 526 144
                                       C544 184, 534 240, 542 290
                                       C548 336, 532 384, 490 422
                                       C448 458, 390 474, 316 472
                                       C242 470, 180 452, 144 416
                                       C106 378, 100 326, 106 270
                                       C112 212, 126 162, 152 128
                                       C160 116, 170 98, 182 88 Z"
                                    fill="#eaf3fb"
                                    stroke="#c6d3e2"
                                    stroke-width="3"
                                />

                                {{-- utara --}}
                                <polygon class="district impacted" data-name="Kramat"
                                    points="212,124 286,120 292,178 218,180" />
                                <polygon class="district coming-soon" data-name="Suradadi"
                                    points="286,120 360,120 364,178 292,178" />
                                <polygon class="district impacted" data-name="Warurejo"
                                    points="360,122 432,126 432,182 364,180" />

                                {{-- pantura tengah --}}
                                <polygon class="district impacted" data-name="Dukuhturi"
                                    points="198,182 274,180 278,242 202,246" />
                                <polygon class="district impacted" data-name="Adiwerna"
                                    points="276,180 352,180 354,244 278,244" />
                                <polygon class="district impacted" data-name="Talang"
                                    points="352,180 430,182 430,248 354,244" />

                                {{-- tengah --}}
                                <polygon class="district impacted" data-name="Tarub"
                                    points="182,246 258,246 260,308 190,316 172,280" />
                                <polygon class="district impacted" data-name="Slawi"
                                    points="258,244 338,244 340,314 260,312" />
                                <polygon class="district impacted" data-name="Pangkah"
                                    points="338,246 420,248 424,320 340,314" />

                                {{-- barat - timur tengah bawah --}}
                                <polygon class="district impacted" data-name="Lebaksiu"
                                    points="170,316 246,318 248,386 178,392 158,352" />
                                <polygon class="district impacted" data-name="Dukuhwaru"
                                    points="246,314 330,314 330,388 248,386" />
                                <polygon class="district impacted" data-name="Kedungbanteng"
                                    points="330,314 412,320 408,392 330,388" />

                                {{-- selatan --}}
                                <polygon class="district impacted" data-name="Pagerbarang"
                                    points="164,390 238,392 238,450 182,454 150,428" />
                                <polygon class="district impacted" data-name="Jatinegara"
                                    points="238,388 320,388 322,458 242,454" />
                                <polygon class="district impacted" data-name="Margasari"
                                    points="320,390 398,392 396,458 320,458" />

                                {{-- barat daya --}}
                                <polygon class="district impacted" data-name="Balapulang"
                                    points="398,320 468,324 474,384 412,392" />
                                <polygon class="district impacted" data-name="Bojong"
                                    points="396,390 462,390 466,444 408,454 390,426" />
                                <polygon class="district impacted" data-name="Bumijawa"
                                    points="468,322 524,346 520,418 462,444 446,392" />

                                <text x="308" y="300" class="svg-caption">Slawi</text>
                            </svg>
                        </div>

                        <div id="map-tooltip"
                             class="pointer-events-none absolute hidden -translate-x-1/2 -translate-y-full rounded-2xl bg-slate-900 px-3 py-2 text-sm font-semibold text-white shadow-xl">
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4" data-aos="fade-left" data-aos-delay="180">
                <div class="rounded-[32px] border border-slate-200 bg-white p-6 shadow-[0_20px_50px_rgba(15,23,42,0.06)]">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-sky-600">
                        Detail Wilayah
                    </p>

                    <h3 id="info-title" class="mt-3 text-2xl font-black text-slate-950">
                        Jawa Tengah
                    </h3>

                    <p id="info-description" class="mt-4 text-base leading-7 text-slate-600">
                        Hover pada wilayah untuk melihat detail. Klik <span class="font-semibold text-slate-900">Kabupaten Tegal</span>
                        untuk masuk ke tampilan kecamatan.
                    </p>

                    <div class="mt-6 space-y-3">
                        <div class="flex items-center gap-3">
                            <span class="h-4 w-4 rounded-full bg-sky-600"></span>
                            <span class="text-sm text-slate-700">Wilayah Jawa Tengah terintegrasi</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="h-4 w-4 rounded-full bg-emerald-500"></span>
                            <span class="text-sm text-slate-700">Kecamatan terdampak di Kabupaten Tegal</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="h-4 w-4 rounded-full bg-slate-300"></span>
                            <span class="text-sm text-slate-700">Coming Soon</span>
                        </div>
                    </div>

                    <div id="info-list-wrapper" class="mt-8 rounded-2xl bg-slate-50 p-4">
                        <p class="text-sm font-semibold text-slate-900">Wilayah Terintegrasi</p>
                        <div id="info-list" class="mt-3 flex flex-wrap gap-2">
                            @foreach ($mapData['jatengIntegrated'] as $region)
                                <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-slate-700 ring-1 ring-slate-200">
                                    {{ $region }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-8 rounded-2xl border border-sky-100 bg-sky-50 p-4">
                        <p class="text-sm font-semibold text-sky-800">Fokus Kabupaten Tegal</p>
                        <p class="mt-2 text-sm leading-6 text-slate-700">
                            17 kecamatan berstatus <span class="font-semibold text-emerald-600">terdampak</span>,
                            dan <span class="font-semibold text-slate-500">Suradadi</span> berstatus coming soon.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.senandungMapData = @json($mapData);
    </script>
</section>