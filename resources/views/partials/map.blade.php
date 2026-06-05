<section id="map" class="bg-white py-20 lg:py-24">

    <style>

        #jateng-map-view svg{
            width:100%;
            height:100%;
        }

        #jateng-map-view path{
            cursor:pointer;
            transition:.25s ease;
        }

        #jateng-map-view path:hover{
            fill:#0ea5e9 !important;
            fill-opacity:1 !important;
        }

        .district{
            cursor:pointer;
            transition:.25s ease;
            stroke:#fff;
            stroke-width:2;
        }

        .district.impacted{
            fill:#22c55e;
        }

        .district.coming-soon{
            fill:#cbd5e1;
        }

        .district:hover{
            fill:#0ea5e9;
        }

        #kab-tegal{
            cursor:pointer;
        }

        #kab-tegal:hover{
            fill:#0ea5e9 !important;
        }

        #tegal-map-view svg{
            width:auto;
            height:100%;
            max-width:100%;
        }

        #tegal-map-view path{
            cursor:pointer;
            transition:all .25s ease;
            transform-box:fill-box;
            transform-origin:center;
        }

        #tegal-map-view path:hover{
            fill:#0ea5e9 !important;
            transform:scale(1.08);
            filter:drop-shadow(0 8px 15px rgba(14,165,233,.45));
            stroke:#ffffff;
            stroke-width:2;
        }

        #kab-tegal{
            cursor:pointer;
            animation:
                pulseTegal 2s infinite;

        }

        @keyframes pulseTegal{
            0%{
                filter:
                drop-shadow(0 0 0 rgba(34,197,94,0));
            }
            50%{
                filter:
                drop-shadow(0 0 12px rgba(34,197,94,.8));
            }
            100%{
                filter:
                drop-shadow(0 0 0 rgba(34,197,94,0));
            }
        }

        #kab-tegal:hover{
            animation:none;
        }

    </style>

    <div class="mx-auto max-w-7xl px-6 lg:px-10">

        <div class="mx-auto mb-12 max-w-3xl text-center">
            <h2 class="text-4xl font-black tracking-tight text-slate-950 md:text-5xl">
                Peta Jejak Keberdampakan
            </h2>
        </div>

        <div class="mb-8 grid gap-4 md:grid-cols-4">

        <div class="rounded-3xl bg-white p-6 shadow">
            <div class="text-3xl font-black text-green-600">
                19
            </div>
            <div class="mt-2 text-sm text-slate-500">
                Wilayah Terintegrasi
            </div>
        </div>

        <div class="rounded-3xl bg-white p-6 shadow">
            <div class="text-3xl font-black text-slate-400">
                16
            </div>
            <div class="mt-2 text-sm text-slate-500">
                Coming Soon
            </div>
        </div>

        <div class="rounded-3xl bg-white p-6 shadow">
            <div class="text-3xl font-black text-sky-600">
                17
            </div>
            <div class="mt-2 text-sm text-slate-500">
                Kecamatan Terdampak
            </div>
        </div>

        <div class="rounded-3xl bg-white p-6 shadow">
            <div class="text-3xl font-black text-orange-500">
                1
            </div>
            <div class="mt-2 text-sm text-slate-500">
                Coming Soon di Kabupaten Tegal
            </div>
        </div>

    </div>
        <div class="mb-6 flex flex-wrap gap-6">

        <div class="flex items-center gap-2">
            <span class="h-4 w-4 rounded-full bg-green-500"></span>
            <span class="text-sm font-medium">
                Terdampak
            </span>
        </div>

        <div class="flex items-center gap-2">
            <span class="h-4 w-4 rounded-full bg-slate-300"></span>
            <span class="text-sm font-medium">
                Coming Soon
            </span>
        </div>

        <div class="flex items-center gap-2">
            <span class="h-4 w-4 rounded-full bg-sky-500"></span>
            <span class="text-sm font-medium">
                Hover Aktif
            </span>
        </div>

        <div class="mb-6">
            <div
                class="inline-flex items-center gap-3 rounded-2xl border border-green-200 bg-green-50 px-5 py-4 shadow-sm"
            >

                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-green-500 text-white">
                    ⭐
                </div>

                <div>

                    <div class="text-sm font-bold text-green-700">
                        Fokus Utama
                    </div>

                    <div class="text-sm text-slate-700">
                        Klik <strong>Kabupaten Tegal</strong> pada peta
                        untuk melihat detail tingkat kecamatan.
                    </div>

                </div>

            </div>

        </div>

    </div>
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">

            <div class="lg:col-span-8">

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
                            Kembali
                        </button>

                    </div>

                    <div class="relative h-[620px] overflow-hidden bg-[radial-gradient(circle_at_top,#f8fbff,white_60%)]">

                        {{-- JATENG --}}
                        <div
                            id="jateng-map-view"
                            class="absolute inset-0 flex items-center justify-center p-8"
                        >
                            <div class="h-full w-full max-w-[920px]">

                                {!! file_get_contents(public_path('assets/maps/JATENG_MAP.svg')) !!}

                            </div>
                        </div>

                        {{-- TEGAL --}}
                        <div
                            id="tegal-map-view"
                            class="absolute inset-0 hidden items-center justify-center p-8"
                        >
                            <div class="h-full w-full flex items-center justify-center">

                                {!! file_get_contents(
                                    public_path('assets/maps/KAB_TEGAL.svg')
                                ) !!}

                            </div>
                        </div>

                        <div
                            id="map-tooltip"
                            class="pointer-events-none absolute hidden -translate-x-1/2 -translate-y-full rounded-2xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white shadow-2xl"
                        ></div>

                    </div>

                </div>

            </div>

            <div class="lg:col-span-4">

                <div class="rounded-[32px] border border-slate-200 bg-white p-6 shadow-[0_20px_50px_rgba(15,23,42,0.06)]">

                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-sky-600">
                        Detail Wilayah
                    </p>

                    <h3
                        id="info-title"
                        class="mt-3 text-3xl font-black text-slate-950"
                    >
                        Jawa Tengah
                    </h3>

                    <div class="mt-5 space-y-3">

                        <div class="rounded-2xl bg-slate-50 p-4">
                            <div class="text-xs text-slate-500">
                                Status
                            </div>

                            <div
                                id="info-status"
                                class="mt-1 font-bold text-green-600"
                            >
                                Terintegrasi
                            </div>
                        </div>

                        <div class="rounded-2xl bg-slate-50 p-4">
                            <div class="text-xs text-slate-500">
                                Kategori
                            </div>

                            <div
                                id="info-type"
                                class="mt-1 font-bold"
                            >
                                Kabupaten / Kota
                            </div>
                        </div>

                        <div class="rounded-2xl bg-slate-50 p-4">
                            <div class="text-xs text-slate-500">
                                Program
                            </div>

                            <div class="mt-1 font-bold">
                                Senandung Asa
                            </div>
                        </div>

                    </div>

                    <div
                        id="info-description"
                        class="mt-4 rounded-2xl bg-sky-50 p-4 text-sm leading-7 text-slate-700"
                    >
                        Hover pada wilayah untuk melihat informasi keberdampakan.
                    </div>

                </div>
                <div
    id="tegal-summary"
    class="mt-5 hidden rounded-2xl bg-green-50 p-5"
>

    <h4 class="font-bold text-green-700">
        Fokus Program Kabupaten Tegal
    </h4>

    <ul class="mt-3 space-y-2 text-sm">

        <li>🟢 17 Kecamatan Terdampak</li>
        <li>⚪ Suradadi (Coming Soon)</li>

    </ul>

</div>
            </div>

        </div>

    </div>

<script>

document.addEventListener('DOMContentLoaded',()=>{

    const tooltip =
    document.getElementById('map-tooltip');

    const infoTitle =
    document.getElementById('info-title');

    const infoDescription =
    document.getElementById('info-description');

    const infoStatus =
    document.getElementById('info-status');

    const infoType =
    document.getElementById('info-type');

    const tegalSummary =
    document.getElementById('tegal-summary');

    const jatengView =
    document.getElementById('jateng-map-view');

    const tegalView =
    document.getElementById('tegal-map-view');

    const backButton =
    document.getElementById('map-back-button');

    const mapTitle =
    document.getElementById('map-title');

    function bindMapEvents(){

        document
        .querySelectorAll('#jateng-map-view path, #tegal-map-view path')
        .forEach((region)=>{

            region.addEventListener('mousemove',(e)=>{

                const regionName =
                region.dataset.name ??
                'Belum Ada Data';

                const regionStatus =
                region.dataset.status ??
                'Terintegrasi';

                if(region.dataset.name === 'Kabupaten Tegal'){

                    tooltip.innerHTML = `
                        <div class="font-bold">
                            ⭐ Kabupaten Tegal
                        </div>

                        <div class="mt-1 text-xs">
                            Klik untuk melihat detail kecamatan
                        </div>
                    `;

                }
                else{

                    tooltip.innerHTML = `
                        <div class="font-bold">
                            ${regionName}
                        </div>

                        <div class="text-xs opacity-80">
                            ${regionStatus}
                        </div>
                    `;

                }

                tooltip.classList.remove('hidden');

                tooltip.style.left =
                e.pageX + 'px';

                tooltip.style.top =
                (e.pageY - 20) + 'px';

            });

            region.addEventListener('mouseleave',()=>{

                tooltip.classList.add('hidden');

            });

            region.addEventListener('mouseenter',()=>{

                const regionName =
                region.dataset.name ??
                'Belum Ada Data';

                const regionStatus =
                region.dataset.status ??
                'Terintegrasi';

                infoTitle.innerHTML =
                regionName;

                infoStatus.innerHTML =
                regionStatus;

                if(
                    regionStatus === 'Terintegrasi' ||
                    regionStatus === 'Terdampak'
                ){

                    infoStatus.className =
                    'mt-1 font-bold text-green-600';

                }
                else{

                    infoStatus.className =
                    'mt-1 font-bold text-slate-500';

                }

                if(tegalView.classList.contains('hidden')){

                    infoType.innerHTML =
                    'Kabupaten / Kota';

                }else{

                    infoType.innerHTML =
                    'Kecamatan';

                }

                if(regionStatus === 'Coming Soon'){

                    infoDescription.innerHTML =
                    'Wilayah akan menjadi area pengembangan berikutnya dalam ekosistem Senandung Asa.';

                }else{

                    if(regionStatus === 'Terintegrasi'){

    infoDescription.innerHTML =
    'Wilayah telah terintegrasi dalam ekosistem Senandung Asa.';

}
else if(regionStatus === 'Belum Terintegrasi'){

    infoDescription.innerHTML =
    'Wilayah belum terintegrasi dalam ekosistem Senandung Asa.';

}
else if(regionStatus === 'Terdampak'){

    infoDescription.innerHTML =
    'Wilayah telah menerima manfaat program Senandung Asa.';

}
else if(regionStatus === 'Coming Soon'){

    infoDescription.innerHTML =
    'Wilayah akan menjadi area pengembangan berikutnya.';

}

                }

            });

        });

    }

    bindMapEvents();
    
    const kabTegal =
    document.getElementById('kab-tegal');

    kabTegal?.addEventListener('click',()=>{

        jatengView.classList.add('hidden');

        tegalView.classList.remove('hidden');
        tegalView.classList.add('flex');

        backButton.classList.remove('hidden');

        mapTitle.innerHTML =
        'Kabupaten Tegal';

        infoTitle.innerHTML =
        'Kabupaten Tegal';

        infoStatus.innerHTML =
        'Fokus Program';

        infoStatus.className =
        'mt-1 font-bold text-green-600';

        infoType.innerHTML =
        'Kabupaten';

        infoDescription.innerHTML =
        '17 Kecamatan terdampak dan 1 Kecamatan Coming Soon dalam ekosistem Senandung Asa.';

        tegalSummary?.classList.remove('hidden');

    });

    backButton?.addEventListener('click',()=>{

        tegalView.classList.add('hidden');
        tegalView.classList.remove('flex');

        jatengView.classList.remove('hidden');

        backButton.classList.add('hidden');

        mapTitle.innerHTML =
        'Peta Jawa Tengah';

        infoTitle.innerHTML =
        'Jawa Tengah';

        infoStatus.innerHTML =
        'Terintegrasi';

        infoStatus.className =
        'mt-1 font-bold text-green-600';

        infoType.innerHTML =
        'Kabupaten / Kota';

        infoDescription.innerHTML =
        'Hover pada wilayah untuk melihat informasi keberdampakan.';

        tegalSummary?.classList.add('hidden');

    });

});

</script>

</section>
        