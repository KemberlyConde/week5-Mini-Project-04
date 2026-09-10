@props([
    'name',
    'price',
    'period' => null,
    'features' => [],
    'highlighted' => false,
    'badge' => null,
    'ctaLabel' => 'Subscribe',
    'ctaHref' => '#',
])

@php
    $cardClasses = $highlighted
        ? 'relative rounded-2xl bg-[#141414] text-white p-8 shadow-2xl md:-translate-y-4'
        : 'rounded-2xl bg-white border border-[#F0E4D6] p-8';
    $nameClasses = $highlighted ? 'font-semibold' : 'font-semibold text-[#1A1A1A]';
    $periodClasses = $highlighted ? 'text-[#B0AFAC] text-sm' : 'text-[#6B6B6B] text-sm';
    $checkClasses = $highlighted ? 'text-[#F5B301]' : 'text-[#1A1A1A]';
    $listClasses = $highlighted ? 'text-[#D9D8D5]' : 'text-[#4A4A4A]';
@endphp

<div class="{{ $cardClasses }}">
    @if ($badge)
        <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-[#F5B301] text-[#1A1A1A] text-xs font-semibold px-3 py-1">{{ $badge }}</span>
    @endif

    <h3 class="{{ $nameClasses }}">{{ $name }}</h3>

    <p class="mt-4">
        <span class="text-3xl font-bold">{{ $price }}</span>
        @if ($period)
            <span class="{{ $periodClasses }}">/{{ $period }}</span>
        @endif
    </p>

    <ul class="mt-6 space-y-3 text-sm {{ $listClasses }}">
        @foreach ($features as $feature)
            <li class="flex items-center gap-2"><span class="{{ $checkClasses }}">✓</span>{{ $feature }}</li>
        @endforeach
    </ul>

    <x-button :href="$ctaHref" :variant="$highlighted ? 'primary' : 'outline'" class="mt-8 w-full justify-center">
        {{ $ctaLabel }}
    </x-button>
</div>
