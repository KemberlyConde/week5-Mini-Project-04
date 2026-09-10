@props([
    'href' => null,
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
])

@php
    $sizes = [
        'sm' => 'rounded-md px-4 py-2 text-sm',
        'md' => 'rounded-lg px-6 py-3 text-sm',
    ];

    $variants = [
        'primary' => 'bg-[#E0301E] text-white hover:bg-[#B82415]',
        'dark' => 'bg-[#1A1A1A] text-white hover:bg-black',
        'outline' => 'border border-[#1A1A1A]/15 bg-white text-[#1A1A1A] hover:bg-[#F5EEE5]',
        'outline-light' => 'border border-white/30 bg-white/10 text-white hover:bg-white/20',
        'outline-white' => 'border border-white text-white hover:bg-white/10',
        'ghost' => 'text-[#3A3A3A] hover:text-[#1A1A1A]',
    ];

    $classes = 'inline-flex items-center justify-center font-semibold transition-colors '
        .($sizes[$size] ?? $sizes['md']).' '
        .($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
