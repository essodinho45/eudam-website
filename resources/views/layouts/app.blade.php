<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EuDam Technical Solutions</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>

    <style>
        body {
            font-family: Tajawal, sans-serif;
        }
    </style>
</head>
<body class="text-gray-800 antialiased bg-gray-50 flex flex-col min-h-screen">

    <nav class="bg-white shadow-md py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">

            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/logos/logo.png') }}" alt="EuDam Technical Solutions" class="h-12 w-auto object-contain">
            </a>

            <div class="flex items-center gap-6 md:gap-8">

                <div class="flex items-center gap-6 text-lg font-semibold">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-[#2da4af]' : 'text-gray-800' }} hover:text-[#2da4af] transition-colors">{{ __('site.home') }}</a>
                    <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-[#2da4af]' : 'text-gray-800' }} hover:text-[#2da4af] transition-colors">{{ __('site.services') }}</a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-[#2da4af]' : 'text-gray-800' }} hover:text-[#2da4af] transition-colors">{{ __('site.contact') }}</a>
                </div>

                <div class="border-s border-gray-300 ps-6">
                    @if(app()->getLocale() == 'en')
                        <a href="{{ route('lang.switch', 'ar') }}" class="text-sm font-bold text-gray-500 hover:text-[#2da4af] transition-colors">العربية</a>
                    @else
                        <a href="{{ route('lang.switch', 'en') }}" class="text-sm font-bold text-gray-500 hover:text-[#2da4af] transition-colors">English</a>
                    @endif
                </div>

            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-10 mt-12">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between">
            <div class="mb-6 md:mb-0">
                <img src="{{ asset('images/logos/logo-light.png') }}" alt="EuDam Technical Solutions" class="h-10 w-auto object-contain mb-4">
                <p class="text-gray-400 max-w-sm">
                    {{ __('site.desc') }}
                </p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">{{ __('site.contact') }}</h3>
                <p class="text-gray-400">{{ __('site.email') }}: Info@eudam.net</p>
                <p class="text-gray-400">{{ __('site.web') }}: www.eudam.net</p>
            </div>
        </div>
        <div class="text-center text-gray-500 mt-8 border-t border-gray-700 pt-4">
            &copy; {{ date('Y') }} EuDam Technical Solutions. {{ __('site.rights') }}
        </div>
    </footer>

</body>
</html>
