@props(['title', 'description' => null, 'light' => false, 'align' => 'center'])

<div class="max-w-2xl {{ $align === 'center' ? 'mx-auto text-center' : '' }}">
    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight {{ $light ? 'text-white' : 'text-[#1A1A1A]' }}">
        {{ $title }}
    </h2>
    @if ($description)
        <p class="mt-3 {{ $light ? 'text-white/75' : 'text-[#6B6B6B]' }}">{{ $description }}</p>
    @endif
</div>
