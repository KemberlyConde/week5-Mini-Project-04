@php
    $quickLinks = [
        '#home' => 'Home',
        '#features' => 'Features',
        '#pricing' => 'Pricing',
        '#testimonials' => 'Testimonials',
    ];
@endphp

<footer id="contact" class="bg-[#0D0D0D] text-[#B0AFAC]">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 py-16">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <div>
                <a href="#home" class="flex items-center">
                    <img src="{{ asset('images/CTG_LOGO.jpg') }}" alt="Chooks to Go" class="h-11 w-auto rounded-lg">
                </a>
                <p class="mt-4 text-sm leading-relaxed max-w-xs">Flame-grilled chicken, fresh off the charcoal every day. Fast, honest, no-frills good food.</p>
            </div>

            <div>
                <h4 class="text-sm font-semibold text-white">Quick Links</h4>
                <ul class="mt-4 space-y-3 text-sm">
                    @foreach ($quickLinks as $href => $label)
                        <li><a href="{{ $href }}" class="hover:text-white transition-colors">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-semibold text-white">Contact</h4>
                <ul class="mt-4 space-y-3 text-sm">
                    <li>Los Baños, Laguna</li>
                    <li>(049) 555-0182</li>
                    <li>hello@chookstogo.ph</li>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-semibold text-white">Follow Us</h4>
                <div class="mt-4 flex items-center gap-3">
                    <a href="#" aria-label="Facebook" class="flex items-center justify-center w-9 h-9 rounded-full bg-[#1F1F1F] hover:bg-[#E0301E] transition-colors">
                        <svg viewBox="0 0 24 24" class="w-4 h-4" fill="currentColor"><path d="M13.5 21v-8h2.7l.4-3.1h-3.1V8c0-.9.3-1.5 1.6-1.5h1.6V3.7C15.9 3.6 15 3.5 14 3.5c-2.4 0-4 1.5-4 4.1v2.3H7.3V13H10v8h3.5z"/></svg>
                    </a>
                    <a href="#" aria-label="Instagram" class="flex items-center justify-center w-9 h-9 rounded-full bg-[#1F1F1F] hover:bg-[#E0301E] transition-colors">
                        <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3.5" y="3.5" width="17" height="17" rx="4.5"/><circle cx="12" cy="12" r="4"/><circle cx="17" cy="7" r="0.8" fill="currentColor"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-14 pt-6 border-t border-[#1F1F1F] text-center text-xs text-[#7A7975]">
            &copy; {{ date('Y') }} Chooks to Go. All rights reserved.
        </div>
    </div>
</footer>
