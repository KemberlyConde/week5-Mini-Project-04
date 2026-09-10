@extends('layouts.app')

@section('title', config('app.name', 'Chooks to Go').' - Flame-Grilled Whole Roasted Chicken')
@section('meta_description', "Flame-grilled fresh every morning, never frozen. Order ahead, skip the line, and get your bucket while it's still smoking hot.")

@section('content')

    <x-navbar />

    <x-hero
        :background-image="asset('images/1000s.jpg')"
        title="Masarap Kahit Walang Sauce"
        description="Flame-grilled fresh every morning, never frozen. Order ahead, skip the line, and get your bucket while it's still smoking hot."
        primary-label="Order Now"
        primary-href="#pricing"
        secondary-label="View Menu"
        secondary-href="#features"
    >
        <x-slot:stats>
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#E0301E]"></span>Fresh daily, never frozen</li>
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#E0301E]"></span>15-minute service</li>
            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#E0301E]"></span>200+ branches nationwide</li>
        </x-slot:stats>

        <div class="relative w-72 h-72 sm:w-80 sm:h-80 rounded-full bg-white shadow-[0_0_90px_20px_rgba(224,48,30,0.35)] overflow-hidden">
            <img src="{{ asset('images/CHOOKS.jpg') }}" alt="Chooks to Go mascot" class="w-full h-full object-cover">
        </div>
    </x-hero>

    {{-- Features --}}
    <section id="features" class="relative overflow-hidden border-t border-dashed border-[#E7CFC0] bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/MENU.jpeg') }}')">
        <div class="absolute inset-0 bg-black/75"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-10 py-20">
            <x-section-heading
                title="Why people keep coming back"
                description="Six reasons regulars order the same bucket every week."
                align="left"
                light
            />

            <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $features = [
                        ['icon' => 'flame', 'title' => 'Flame-Grilled Daily', 'desc' => 'Every bird hits the charcoal grill fresh every morning — nothing sits frozen in storage.'],
                        ['icon' => 'truck', 'title' => 'Free Delivery Nearby', 'desc' => 'Free delivery within 3km of any branch — no minimum order required.'],
                        ['icon' => 'clock', 'title' => 'Ready in 15 Minutes', 'desc' => "Order ahead through the app and it's boxed and waiting by the time you arrive."],
                        ['icon' => 'users', 'title' => 'Family-Size Bundles', 'desc' => 'Buckets built for barkada and family meals, from solo boxes to 12-piece feasts.'],
                        ['icon' => 'leaf', 'title' => '100% Fresh, No Frozen Stock', 'desc' => 'We sell out and restock daily rather than hold frozen inventory overnight.'],
                        ['icon' => 'star', 'title' => 'Loyalty Rewards App', 'desc' => 'Earn Chooks Points on every order and redeem them for free sides or a bucket.'],
                    ];
                @endphp

                @foreach ($features as $feature)
                    <x-feature-card :icon="$feature['icon']" :title="$feature['title']" :description="$feature['desc']" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- Find a branch (dark) --}}
    <section class="bg-[#0D0D0D] text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-20">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="flex justify-center lg:justify-start order-2 lg:order-1">
                    <div class="w-64 rounded-[2rem] border-4 border-[#2A2A2A] bg-white text-[#1A1A1A] shadow-2xl overflow-hidden">
                        <div class="bg-[#E0301E] text-white px-5 py-4 flex items-center gap-2">
                            <svg viewBox="0 0 24 24" class="w-4 h-4 shrink-0" fill="currentColor"><path d="M12 2C7.6 2 4 5.6 4 10c0 6 8 12 8 12s8-6 8-12c0-4.4-3.6-8-8-8zm0 11a3 3 0 110-6 3 3 0 010 6z"/></svg>
                            <p class="text-sm font-semibold">Find a Branch</p>
                        </div>
                        <div class="px-5 py-4 space-y-3">
                            <div>
                                <p class="text-sm font-semibold">Chooks to Go — Los Baños</p>
                                <p class="mt-1 text-xs text-[#6B6B6B]">National Hwy, Los Baños, Laguna</p>
                            </div>
                            <div class="flex items-center justify-between text-xs">
                                <span class="inline-flex items-center gap-1.5 font-semibold text-[#1A8917]"><span class="w-1.5 h-1.5 rounded-full bg-[#1A8917]"></span>Open Now</span>
                                <span class="text-[#6B6B6B]">9:00 AM – 9:00 PM</span>
                            </div>
                            <x-button variant="dark" size="sm" class="w-full justify-center">Get Directions</x-button>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight">Come say hi at any of our branches.</h2>
                    <p class="mt-5 text-[#B0AFAC] leading-relaxed max-w-lg">
                        With 200+ branches nationwide, there's always a Chooks to Go near you. Walk in, smell the charcoal, and watch your bucket come straight off the grill.
                    </p>
                    <ul class="mt-7 space-y-3 text-sm text-[#D9D8D5]">
                        <li class="flex items-start gap-3"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#F5B301] shrink-0"></span>Open daily, most branches from 9AM to 9PM</li>
                        <li class="flex items-start gap-3"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#F5B301] shrink-0"></span>Dine-in seating and takeout counters on-site</li>
                        <li class="flex items-start gap-3"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#F5B301] shrink-0"></span>Watch your chicken grilled fresh behind the counter</li>
                        <li class="flex items-start gap-3"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#F5B301] shrink-0"></span>Ask branch staff about walk-in bundle promos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Product Showcase / Our Menu --}}
    <section id="menu" class="bg-[#FDF8F2] border-t border-dashed border-[#E7CFC0]">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-20">
            <x-section-heading title="Our Menu" description="A closer look at what's inside every bucket and box." />

            <div class="mt-10 grid sm:grid-cols-2 gap-5">
                @php
                    $menuItems = [
                        ['name' => 'Summer Zest Whole Roasted Chicken', 'price' => '₱420.00', 'image' => 'Summer Zest Whole Roasted Chicken.jpg'],
                        ['name' => 'Sweet Whole Roasted Chicken', 'price' => '₱420.00', 'image' => 'Sweet Whole Roasted Chicken.jpg'],
                        ['name' => 'Pepper Whole Roasted Chicken', 'price' => '₱420.00', 'image' => 'Pepper Whole Roasted Chicken.jpg'],
                        ['name' => 'Hot & Spicy Whole Roasted Chicken', 'price' => '₱420.00', 'image' => 'Hot & Spicy Whole Roasted Chicken.jpg'],
                        ['name' => 'Juicy Liempo', 'price' => '₱310.00', 'image' => 'Juicy Liempo.jpg'],
                        ['name' => '1PC Fried Chicken', 'price' => '₱60.00', 'image' => '1 PC Fried Chicken.jpg'],
                    ];
                @endphp

                @foreach ($menuItems as $item)
                    <x-menu-item-card :name="$item['name']" :price="$item['price']" :image="$item['image']" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- Pricing --}}
    <section id="pricing" class="relative overflow-hidden bg-gradient-to-b from-[#FDF8F2] via-[#FCF1E4] to-[#FDF8F2]">
        <div class="absolute inset-0 opacity-[0.05]" style="background-image: radial-gradient(#1A1A1A 1px, transparent 1px); background-size: 22px 22px;"></div>
        <div class="pointer-events-none absolute -top-24 -left-24 w-80 h-80 rounded-full bg-[#F5B301]/25 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-24 -right-24 w-96 h-96 rounded-full bg-[#E0301E]/15 blur-3xl"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-10 py-20">
            <x-section-heading title="Pick your bucket" description="Whether it's a solo lunch or a company party, there's a size for it." />

            <div class="mt-14 grid md:grid-cols-3 gap-8 items-center">
                <x-pricing-card
                    name="Solo Box"
                    price="₱189"
                    period="box"
                    ctaHref="#contact"
                    :features="[
                        '1pc chicken + rice',
                        'Choice of 1 side',
                        'Free bottled water',
                        'Dine-in or takeout',
                    ]"
                />

                <x-pricing-card
                    name="Barkada Bucket"
                    price="₱899"
                    period="bucket"
                    badge="Most Popular"
                    :highlighted="true"
                    ctaHref="#contact"
                    :features="[
                        '8pc chicken',
                        'Family-size rice + gravy',
                        '2 free sides',
                        'Free delivery within 3km',
                        'Priority prep queue',
                    ]"
                />

                <x-pricing-card
                    name="Corporate Catering"
                    price="₱2,499"
                    period="package"
                    ctaHref="#contact"
                    :features="[
                        '20pc chicken',
                        'Full side spread',
                        'Disposable serveware',
                        'Dedicated account rep',
                    ]"
                />
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section id="testimonials" class="bg-[#FDF8F2] border-t border-dashed border-[#E7CFC0]">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-20">
            <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-[#1A1A1A] text-center">What regulars are saying</h2>

            <div class="mt-12 grid md:grid-cols-3 gap-6">
                @php
                    $testimonials = [
                        ['quote' => "We order the Barkada Bucket for every meeting. It's always ready on time and the chicken is genuinely fresh.", 'initials' => 'MS', 'name' => 'Marites Santos', 'role' => 'Barangay Captain, San Antonio'],
                        ['quote' => 'Switched our Friday team lunches to Chooks to Go catering. Delivery is punctual and the tracking is a nice touch.', 'initials' => 'JV', 'name' => 'Jerome Villanueva', 'role' => 'Office Manager, Los Baños'],
                        ['quote' => "The 15-minute promise actually holds up. I order on my way home and it's boxed and ready when I walk in.", 'initials' => 'AR', 'name' => 'Ana Reyes', 'role' => 'Home Cook & Regular Customer'],
                    ];
                @endphp

                @foreach ($testimonials as $t)
                    <x-testimonial-card :quote="$t['quote']" :initials="$t['initials']" :name="$t['name']" :role="$t['role']" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-[#E0301E]">
        <div class="max-w-4xl mx-auto px-6 lg:px-10 py-20 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-white">Craving something flame-grilled tonight?</h2>
            <p class="mt-4 text-white/90 max-w-xl mx-auto">Order online for pickup or delivery, or reach out for bulk and corporate catering.</p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <x-button href="#pricing" variant="dark">Start Free Trial</x-button>
                <x-button href="#contact" variant="outline-white">Contact Sales</x-button>
            </div>
        </div>
    </section>

    <x-footer />

@endsection
