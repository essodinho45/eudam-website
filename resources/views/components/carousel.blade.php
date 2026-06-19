@props(['images' => [], 'alt' => 'Carousel image', 'interval' => 5000])

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>

<div x-data="{
    images: {{ json_encode($images) }},
    current: 0,
    timer: null,
    interval: {{ (int) $interval }},
    init() { this.start(); },
    start() { this.stop(); this.timer = setInterval(() => this.next(), this.interval); },
    stop() { if (this.timer) { clearInterval(this.timer); this.timer = null; } },
    next() { this.current = (this.current + 1) % this.images.length; },
    prev() { this.current = (this.current - 1 + this.images.length) % this.images.length; },
    go(i) { this.current = i; }
}
" x-init="init()" x-on:mouseenter="stop()" x-on:mouseleave="start()" class="relative w-full h-80 overflow-hidden rounded-xl shadow-md border border-gray-100">
    @foreach($images as $i => $src)
        <img src="{{ $src }}" alt="{{ $alt }} {{ $i + 1 }}" :class="current === {{ $i }} ? 'opacity-100' : 'opacity-0'" data-index="{{ $i }}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0">
    @endforeach

    <button x-on:click="prev()" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 rounded-full p-2 shadow">‹</button>
    <button x-on:click="next()" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 rounded-full p-2 shadow">›</button>

    <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2">
        @foreach($images as $i => $src)
            <button :class="current === {{ $i }} ? 'w-2 h-2 rounded-full bg-white/80' : 'w-2 h-2 rounded-full bg-white/40'" x-on:click="go({{ $i }})" aria-hidden="true"></button>
        @endforeach
    </div>
</div>
