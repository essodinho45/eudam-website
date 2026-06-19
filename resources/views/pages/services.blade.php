@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-[#22386b] to-[#2da4af] py-20 shadow-inner overflow-hidden">
    <div class="container mx-auto px-6 text-center text-white">
        <h1 data-aos="fade-down" class="text-4xl font-extrabold mb-4 drop-shadow-sm">{{ __('services.page_title') }}</h1>
        <p data-aos="fade-up" data-aos-delay="100" class="text-xl max-w-3xl mx-auto drop-shadow-sm">
            {{ __('services.page_desc') }}
        </p>
    </div>
</div>

<section class="container mx-auto px-6 py-16 space-y-20 overflow-hidden">

    <div class="flex flex-col md:flex-row gap-10 items-center">
        <div class="md:w-1/2" data-aos="fade-right">
            @php
                $fttx = [
                    asset('images/services/4.webp'),
                    asset('images/services/5.webp'),
                    asset('images/services/6.webp'),
                ];
            @endphp
            <x-carousel :images="$fttx" alt="FTTX & Backbone Infrastructure" :interval="5000" />
        </div>
        <div class="md:w-1/2" data-aos="fade-left">
            <h2 class="text-3xl font-extrabold text-[#22386b] mb-4">{{ __('services.s1_title') }}</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-2 marker:text-[#2da4af]">
                <li>{{ __('services.s1_l1') }}</li>
                <li>{{ __('services.s1_l2') }}</li>
                <li>{{ __('services.s1_l3') }}</li>
            </ul>
            <h3 class="text-xl font-bold text-[#2da4af] mt-8 mb-3">{{ __('services.s1_sub') }}</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 marker:text-[#22386b]">
                <li>{{ __('services.s1_sub_l1') }}</li>
                <li>{{ __('services.s1_sub_l2') }}</li>
                <li>{{ __('services.s1_sub_l3') }}</li>
                <li>{{ __('services.s1_sub_l4') }}</li>
            </ul>
        </div>
    </div>

    <div class="flex flex-col md:flex-row-reverse gap-10 items-center">
        <div class="md:w-1/2" data-aos="fade-left">
            @php
                $field = [
                    asset('images/services/7.jpeg'),
                    asset('images/services/8.jpeg'),
                    asset('images/services/9.jpeg'),
                    asset('images/services/10.jpeg'),
                ];
            @endphp
            <x-carousel :images="$field" alt="Field Operations & Engineer" :interval="5000" />
        </div>
        <div class="md:w-1/2" data-aos="fade-right">
            <h2 class="text-3xl font-extrabold text-[#22386b] mb-4">{{ __('services.s2_title') }}</h2>
            <h3 class="text-xl font-bold text-[#2da4af] mt-4 mb-3">{{ __('services.s2_sub1') }}</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 marker:text-[#22386b]">
                <li><span class="font-bold text-[#22386b]">Real-Time Monitoring:</span> {{ __('services.s2_sub1_l1') }}</li>
                <li><span class="font-bold text-[#22386b]">Optimization:</span> {{ __('services.s2_sub1_l2') }}</li>
            </ul>
            <h3 class="text-xl font-bold text-[#2da4af] mt-8 mb-3">{{ __('services.s2_sub2') }}</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 marker:text-[#22386b]">
                <li><span class="font-bold text-[#22386b]">24/7 Response:</span> {{ __('services.s2_sub2_l1') }}</li>
                <li><span class="font-bold text-[#22386b]">Site Handover:</span> {{ __('services.s2_sub2_l2') }}</li>
                <li><span class="font-bold text-[#22386b]">Resource & Energy Efficiency:</span> {{ __('services.s2_sub2_l3') }}</li>
            </ul>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-10 items-center">
        <div class="md:w-1/2" data-aos="fade-right">
            @php
                $digital = [
                    asset('images/services/1.webp'),
                    asset('images/services/2.webp'),
                    asset('images/services/3.webp'),
                ];
            @endphp
            <x-carousel :images="$digital" alt="Digital Tech / AI Networks" :interval="5000" />
        </div>

        <div class="md:w-1/2" data-aos="fade-left">
            <h2 class="text-3xl font-extrabold text-[#22386b] mb-4">{{ __('services.s3_title') }}</h2>
            <h3 class="text-xl font-bold text-[#2da4af] mt-4 mb-3">{{ __('services.s3_sub1') }}</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 marker:text-[#22386b]">
                <li><span class="font-bold text-[#22386b]">AI & Digital Twins:</span> {{ __('services.s3_sub1_l1') }}</li>
                <li><span class="font-bold text-[#22386b]">Smart Analytics:</span> {{ __('services.s3_sub1_l2') }}</li>
            </ul>
            <h3 class="text-xl font-bold text-[#2da4af] mt-8 mb-3">{{ __('services.s3_sub2') }}</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2 marker:text-[#22386b]">
                <li><span class="font-bold text-[#22386b]">Digital Transformation:</span> {{ __('services.s3_sub2_l1') }}</li>
                <li><span class="font-bold text-[#22386b]">Cybersecurity:</span> {{ __('services.s3_sub2_l2') }}</li>
                <li><span class="font-bold text-[#22386b]">Infrastructure Consulting:</span> {{ __('services.s3_sub2_l3') }}</li>
            </ul>
        </div>
    </div>

    </section>

@endsection
