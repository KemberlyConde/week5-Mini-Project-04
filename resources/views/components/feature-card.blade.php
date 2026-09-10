@props(['icon', 'title', 'description'])

<div class="group rounded-2xl bg-white/10 backdrop-blur-md p-6 shadow-lg shadow-black/30 border border-white/15 hover:bg-white/15 hover:border-white/25 transition-colors">
    <div class="flex items-center justify-center w-11 h-11 rounded-full bg-gradient-to-br from-[#F5B301] to-[#E0301E] text-white shadow-md shadow-black/20 group-hover:scale-105 transition-transform">
        @switch($icon)
            @case('flame')
                <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor"><path d="M12.5 2c.4 2.4-1 3.7-2.1 4.9-1.2 1.3-2.1 2.6-2.1 4.5 0 1.6.8 2.7 1.7 3.4-.5-1.4-.2-2.7.6-3.7.1 1 .6 1.8 1.4 2.3-.2-1 .1-1.9.8-2.7.9 1 1.4 2.1 1.4 3.3 0 .8-.2 1.5-.6 2.1 1.6-.6 3.4-2.1 3.4-4.7 0-2.1-1.2-3.4-2.3-4.7C13.6 5.4 12.7 4 12.5 2z"/></svg>
                @break
            @case('truck')
                <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7h11v8H3zM14 10h4l3 3v2h-7zM6.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM17.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/></svg>
                @break
            @case('clock')
                <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="8.5"/><path stroke-linecap="round" d="M12 8v4.2l3 2"/></svg>
                @break
            @case('users')
                <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="8" r="3"/><path stroke-linecap="round" d="M2.5 19c.7-3 3-5 6.5-5s5.8 2 6.5 5"/><circle cx="17" cy="9" r="2.5"/><path stroke-linecap="round" d="M15.5 14.2c2.6.4 4.2 2 4.8 4.3"/></svg>
                @break
            @case('leaf')
                <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M20 4C10 4 4 10 4 18c0 .6.4 1 1 1 8 0 14-6 14-15 0 0 0 0 1 0z"/><path stroke-linecap="round" d="M5 19c3-4 6-7 12-11"/></svg>
                @break
            @case('star')
                <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor"><path d="M12 2.5l2.9 6 6.6.7-4.9 4.5 1.3 6.5L12 16.9 6.1 20.2l1.3-6.5-4.9-4.5 6.6-.7z"/></svg>
                @break
        @endswitch
    </div>
    <h3 class="mt-5 font-semibold text-white">{{ $title }}</h3>
    <p class="mt-2 text-sm text-white/70 leading-relaxed">{{ $description }}</p>
</div>
