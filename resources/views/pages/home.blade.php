@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center text-white overflow-hidden" style="background-image: url('{{ asset('images/hero-bg.jpeg') }}');">
    <div class="absolute inset-0 bg-gradient-to-br from-[#22386b]/90 via-[#244b7d]/80 to-[#2da4af]/70 mix-blend-multiply"></div>
    <div class="relative container mx-auto px-6 py-32 z-10">
        <h1 data-aos="fade-down" class="text-5xl font-extrabold mb-4 drop-shadow-md">{{ __('home.hero_title') }}</h1>
        <p data-aos="fade-up" data-aos-delay="100" class="text-xl max-w-2xl leading-relaxed mb-8 drop-shadow-md">
            {{ __('home.hero_desc') }}
        </p>
        <div data-aos="zoom-in" data-aos-delay="200">
            <a href="{{ route('services') }}" class="inline-block bg-[#2da4af] text-white px-8 py-3 rounded-full font-bold shadow-lg hover:bg-white hover:text-[#22386b] transition-all duration-300">{{ __('home.btn_services') }}</a>
        </div>
    </div>
</section>

<section class="container mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 overflow-hidden">
    <div data-aos="fade-right" class="bg-white p-10 rounded-lg shadow-lg border-t-4 border-[#22386b] hover:shadow-xl transition-shadow duration-300">
        <h2 class="text-3xl font-bold text-[#22386b] mb-4">{{ __('home.vision_title') }}</h2>
        <p class="text-gray-700 leading-relaxed">
            {{ __('home.vision_desc') }}
        </p>
    </div>
    <div data-aos="fade-left" class="bg-white p-10 rounded-lg shadow-lg border-t-4 border-[#2da4af] hover:shadow-xl transition-shadow duration-300">
        <h2 class="text-3xl font-bold text-[#2da4af] mb-4">{{ __('home.mission_title') }}</h2>
        <p class="text-gray-700 leading-relaxed mb-4">
            {{ __('home.mission_desc_1') }}
        </p>
        <p class="text-gray-700 leading-relaxed">
            {{ __('home.mission_desc_2') }}
        </p>
    </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6">
        <h2 data-aos="fade-up" class="text-4xl font-bold text-center text-[#22386b] mb-12">{{ __('home.why_title') }}</h2>

        <div class="grid md:grid-cols-4 gap-8">
            <div data-aos="fade-up" data-aos-delay="100" class="text-center group">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-[#22386b] to-[#2da4af] text-white flex items-center justify-center rounded-2xl mb-4 font-bold shadow-md transform group-hover:scale-105 transition-transform duration-300 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#22386b] mb-2">{{ __('home.why_1_title') }}</h3>
                <p class="text-gray-600 text-sm">{{ __('home.why_1_desc') }}</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" class="text-center group">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-[#22386b] to-[#2da4af] text-white flex items-center justify-center rounded-2xl mb-4 font-bold shadow-md transform group-hover:scale-105 transition-transform duration-300 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z" />
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#22386b] mb-2">{{ __('home.why_2_title') }}</h3>
                <p class="text-gray-600 text-sm">{{ __('home.why_2_desc') }}</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="300" class="text-center group">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-[#22386b] to-[#2da4af] text-white flex items-center justify-center rounded-2xl mb-4 font-bold shadow-md transform group-hover:scale-105 transition-transform duration-300 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M12 5.25c1.213 0 2.415.046 3.605.135a3.256 3.256 0 0 1 3.01 3.01c.044.583.077 1.17.1 1.759L17.03 8.47a.75.75 0 1 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l3-3a.75.75 0 0 0-1.06-1.06l-1.752 1.751c-.023-.65-.06-1.296-.108-1.939a4.756 4.756 0 0 0-4.392-4.392 49.422 49.422 0 0 0-7.436 0A4.756 4.756 0 0 0 3.89 8.282c-.017.224-.033.447-.046.672a.75.75 0 1 0 1.497.092c.013-.217.028-.434.044-.651a3.256 3.256 0 0 1 3.01-3.01c1.19-.09 2.392-.135 3.605-.135Zm-6.97 6.22a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.752-1.751c.023.65.06 1.296.108 1.939a4.756 4.756 0 0 0 4.392 4.392 49.413 49.413 0 0 0 7.436 0 4.756 4.756 0 0 0 4.392-4.392c.017-.223.032-.447.046-.672a.75.75 0 0 0-1.497-.092c-.013.217-.028.434-.044.651a3.256 3.256 0 0 1-3.01 3.01 47.953 47.953 0 0 1-7.21 0 3.256 3.256 0 0 1-3.01-3.01 47.759 47.759 0 0 1-.1-1.759L6.97 15.53a.75.75 0 0 0 1.06-1.06l-3-3Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#22386b] mb-2">{{ __('home.why_3_title') }}</h3>
                <p class="text-gray-600 text-sm">{{ __('home.why_3_desc') }}</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="400" class="text-center group">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-[#22386b] to-[#2da4af] text-white flex items-center justify-center rounded-2xl mb-4 font-bold shadow-md transform group-hover:scale-105 transition-transform duration-300 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036-.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0 1 16.5 15Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#22386b] mb-2">{{ __('home.why_4_title') }}</h3>
                <p class="text-gray-600 text-sm">{{ __('home.why_4_desc') }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
