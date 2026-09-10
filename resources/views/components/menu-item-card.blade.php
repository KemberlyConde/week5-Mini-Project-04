@props(['name', 'price', 'image'])

<div class="flex items-center gap-4 rounded-xl bg-white border border-[#F0E4D6] p-4">
    <div class="w-20 h-20 sm:w-24 sm:h-24 shrink-0 rounded-lg overflow-hidden bg-white border border-[#F0E4D6]">
        <img src="{{ asset('images/'.rawurlencode($image)) }}" alt="{{ $name }}" class="w-full h-full object-cover">
    </div>
    <div class="min-w-0">
        <h4 class="font-semibold text-[#1A1A1A] truncate">{{ $name }}</h4>
        <p class="mt-1 text-sm font-bold text-[#E0301E]">{{ $price }}</p>
    </div>
</div>
