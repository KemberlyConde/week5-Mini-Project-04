@php
    $navLinks = [
        '#home' => 'Home',
        '#features' => 'Features',
        '#pricing' => 'Pricing',
        '#testimonials' => 'Testimonials',
        '#contact' => 'Contact',
    ];
@endphp

<header class="sticky top-0 z-50 bg-[#FDF8F2]/95 backdrop-blur border-b border-dashed border-[#E7CFC0]">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="flex items-center justify-between h-20">
            <a href="#home" class="flex items-center shrink-0">
                <img src="{{ asset('images/CTG_LOGO.jpg') }}" alt="Chooks to Go" class="h-11 w-auto rounded-lg">
            </a>

            <nav class="hidden lg:flex items-center gap-9 text-sm font-medium text-[#3A3A3A]">
                @foreach ($navLinks as $href => $label)
                    <a href="{{ $href }}" class="hover:text-[#E0301E] transition-colors">{{ $label }}</a>
                @endforeach
            </nav>

            <div class="hidden sm:flex items-center gap-5">
                <x-button href="#" variant="ghost" size="sm" class="!px-0 !py-0">Sign In</x-button>
                <x-button href="#pricing" variant="primary" size="sm">Get Started</x-button>
            </div>

            <button id="menu-toggle" type="button" class="lg:hidden inline-flex items-center justify-center w-9 h-9 text-[#1A1A1A]" aria-label="Toggle menu" aria-expanded="false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <nav id="mobile-menu" class="hidden lg:hidden pb-5 flex flex-col gap-4 text-sm font-medium text-[#3A3A3A]">
            @foreach ($navLinks as $href => $label)
                <a href="{{ $href }}" class="hover:text-[#E0301E]">{{ $label }}</a>
            @endforeach
            <div class="flex items-center gap-5 pt-2 border-t border-[#E7CFC0]">
                <a href="#" class="hover:text-[#1A1A1A]">Sign In</a>
                <a href="#pricing" class="inline-flex items-center rounded-md bg-[#E0301E] px-4 py-2 text-white font-semibold">Get Started</a>
            </div>
        </nav>
    </div>
</header>
