@props([
    'backgroundImage',
    'title',
    'description',
    'primaryLabel' => null,
    'primaryHref' => '#',
    'secondaryLabel' => null,
    'secondaryHref' => '#',
])

<section id="home" class="relative overflow-hidden bg-black bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $backgroundImage }}')">
    <div class="absolute inset-0 bg-gradient-to-b from-black/85 via-black/70 to-black/85"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-10 py-20 lg:py-28">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h1 class="text-4xl sm:text-5xl font-bold tracking-tight leading-[1.1] text-white">
                    {{ $title }}
                </h1>
                <p class="mt-6 text-base text-white/70 max-w-lg leading-relaxed">
                    {{ $description }}
                </p>
                <div class="mt-8 flex flex-wrap items-center gap-4">
                    @if ($primaryLabel)
                        <x-button :href="$primaryHref" variant="primary">{{ $primaryLabel }}</x-button>
                    @endif
                    @if ($secondaryLabel)
                        <x-button :href="$secondaryHref" variant="outline-light">{{ $secondaryLabel }}</x-button>
                    @endif
                </div>

                @isset($stats)
                    <ul class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-2 text-sm text-white/80">
                        {{ $stats }}
                    </ul>
                @endisset
            </div>

            <div class="flex justify-center lg:justify-end">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
