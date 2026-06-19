@props(['images' => [], 'alt' => 'Carousel image', 'interval' => 5000])

<div x-data="{
    images: {{ json_encode($images) }},
    current: 0,
    timer: null,
    interval: {{ (int) $interval }},
    touchStart: null,
    touchEnd: null,
    isRtl: @json(app()->getLocale() === 'ar'),
    init() { this.start(); },
    start() { this.stop(); this.timer = setInterval(() => this.next(), this.interval); },
    stop() { if (this.timer) { clearInterval(this.timer); this.timer = null; } },
    next() { this.current = (this.current + 1) % this.images.length; },
    prev() { this.current = (this.current - 1 + this.images.length) % this.images.length; },
    go(i) { this.current = i; },
    handleSwipe() {
        if (this.touchStart === null || this.touchEnd === null) return;
        const delta = this.touchEnd - this.touchStart;
        if (Math.abs(delta) > 50) {
            if (delta > 0) { this.prev(); } else { this.next(); }
        }
        this.touchStart = null;
        this.touchEnd = null;
    }
}
" x-init="init()" x-on:mouseenter="stop()" x-on:mouseleave="start()" x-on:touchstart="touchStart = $event.touches[0].clientX" x-on:touchend="touchEnd = $event.changedTouches[0].clientX; handleSwipe()" class="relative w-full h-80 overflow-hidden rounded-xl shadow-md border border-gray-100 touch-pan-y">
    @foreach($images as $i => $src)
        <div x-show="current === {{ $i }}" class="absolute inset-0 w-full h-full">
            <img src="{{ $src }}" alt="{{ $alt }} {{ $i + 1 }}" class="w-full h-full object-cover">
        </div>
    @endforeach

    <button x-on:click="prev()" :class="isRtl ? 'absolute right-2 top-1/2 -translate-y-1/2' : 'absolute left-2 top-1/2 -translate-y-1/2'" class="bg-white/80 hover:bg-white text-gray-800 rounded-full p-2 shadow">
        <span x-text="'‹'"></span>
    </button>
    <button x-on:click="next()" :class="isRtl ? 'absolute left-2 top-1/2 -translate-y-1/2' : 'absolute right-2 top-1/2 -translate-y-1/2'" class="bg-white/80 hover:bg-white text-gray-800 rounded-full p-2 shadow">
        <span x-text="'›'"></span>
    </button>

    <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2">
        @foreach($images as $i => $src)
            <button :class="current === {{ $i }} ? 'w-2 h-2 rounded-full bg-white/80' : 'w-2 h-2 rounded-full bg-white/40'" x-on:click="go({{ $i }})" aria-hidden="true"></button>
        @endforeach
    </div>

    <!-- Static fallback: always-visible first image so mobile users see something if JS fails -->
    @if(count($images) > 0)
        <div class="mt-4 block md:hidden">
            <div class="w-full h-48 overflow-hidden rounded-md shadow-sm">
                <img src="{{ $images[0] }}" alt="{{ $alt }} fallback" class="w-full h-full object-cover">
            </div>
            <div class="text-xs text-gray-600 mt-2">If the carousel does not appear, this is the fallback image.</div>
        </div>
    @endif
</div>
