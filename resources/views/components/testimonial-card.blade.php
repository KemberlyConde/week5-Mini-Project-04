@props(['quote', 'initials', 'name', 'role'])

<div class="rounded-2xl bg-white border border-[#F0E4D6] p-7">
    <p class="text-sm text-[#4A4A4A] italic leading-relaxed">&ldquo;{{ $quote }}&rdquo;</p>
    <div class="mt-6 flex items-center gap-3">
        <span class="flex items-center justify-center w-9 h-9 rounded-full bg-[#E0301E] text-white text-xs font-semibold shrink-0">{{ $initials }}</span>
        <div>
            <p class="text-sm font-semibold text-[#1A1A1A]">{{ $name }}</p>
            <p class="text-xs text-[#6B6B6B]">{{ $role }}</p>
        </div>
    </div>
</div>
