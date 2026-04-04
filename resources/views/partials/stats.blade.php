<section id="stats" class="bg-[#f4f6fb] py-16 sm:py-18 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="mx-auto mb-14 max-w-3xl text-center" data-aos="fade-up">
            <h2 class="text-3xl font-black tracking-tight text-slate-950 sm:text-4xl md:text-5xl">
                Senandung Asa dalam Angka
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-5 md:grid-cols-12">
            @foreach ($stats as $index => $stat)
                @php
                    $theme = $stat->theme === 'blue' ? 'bg-blue-800' : 'bg-sky-600';

                    $colClass = match($index) {
                        0 => 'md:col-span-2',
                        1 => 'md:col-span-3',
                        2 => 'md:col-span-4',
                        3 => 'md:col-span-3',
                        4 => 'md:col-span-8',
                        default => 'md:col-span-4',
                    };

                    $cardClass = $index >= 4 ? 'stat-card stat-card-wide' : 'stat-card stat-card-top';
                    $numberClass = $index === 2 ? 'stat-number-long' : ($index >= 4 ? ($index === 4 ? 'stat-number-wide' : 'stat-number-medium') : 'stat-number');
                    $labelClass = $index >= 4 ? 'stat-label-center' : 'stat-label';
                    $innerClass = $index >= 4 ? 'stat-card-inner-center' : 'stat-card-inner';
                @endphp

                <div class="{{ $colClass }}" data-aos="zoom-in-up" data-aos-delay="{{ $index * 70 }}">
                    <div class="{{ $cardClass }} {{ $theme }}">
                        <div class="{{ $innerClass }}">
                            <div class="{{ $numberClass }}"
                                 data-counter
                                 data-target="{{ $stat->value }}"
                                 data-suffix="{{ $stat->suffix }}">
                                0{{ $stat->suffix }}
                            </div>

                            <p class="{{ $labelClass }}">
                                {{ $stat->label }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>