@extends('layouts.app')

@section('content')
<!-- Added overflow-hidden to the header container -->
<div class="bg-gradient-to-r from-[#22386b] to-[#2da4af] py-20 shadow-inner overflow-hidden">
    <div class="container mx-auto px-6 text-center text-white">
        <h1 data-aos="fade-down" class="text-4xl font-extrabold mb-4 drop-shadow-sm">{{ __('contact.page_title') }}</h1>
        <p data-aos="fade-up" data-aos-delay="100" class="text-xl max-w-3xl mx-auto drop-shadow-sm">
            {{ __('contact.page_desc') }}
        </p>
    </div>
</div>

<!-- Added overflow-hidden to the main section to prevent horizontal scrolling during side animations -->
<section class="container mx-auto px-6 py-16 overflow-hidden">

    @if(session('success'))
        <div data-aos="fade-down" class="mb-8 p-4 bg-green-100 border-l-4 border-green-500 text-green-800 rounded-r-lg shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex flex-col lg:flex-row gap-12">

        <!-- Form slides in from the left -->
        <div data-aos="fade-right" class="lg:w-2/3 bg-white p-8 md:p-10 rounded-xl shadow-lg border-t-4 border-[#2da4af]">
            <h2 class="text-3xl font-extrabold text-[#22386b] mb-8">{{ __('contact.form_title') }}</h2>

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">{{ __('contact.name') }}</label>
                        <input type="text" name="name" id="name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#2da4af] focus:border-transparent transition-shadow">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">{{ __('contact.email') }}</label>
                        <input type="email" name="email" id="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#2da4af] focus:border-transparent transition-shadow">
                    </div>
                </div>

                <div>
                    <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">{{ __('contact.subject') }}</label>
                    <input type="text" name="subject" id="subject" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#2da4af] focus:border-transparent transition-shadow">
                </div>

                <div>
                    <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">{{ __('contact.message') }}</label>
                    <textarea name="message" id="message" rows="5" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#2da4af] focus:border-transparent transition-shadow"></textarea>
                </div>

                <button type="submit" class="w-full md:w-auto bg-[#2da4af] text-white px-8 py-3 rounded-lg font-bold shadow-md hover:bg-[#22386b] transition-colors duration-300">
                    {{ __('contact.submit') }}
                </button>
            </form>
        </div>

        <!-- Contact info slides in from the right -->
        <div data-aos="fade-left" class="lg:w-1/3 space-y-8">
            <div class="bg-gradient-to-br from-[#22386b] to-[#244b7d] text-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold mb-6 border-b border-[#2da4af] pb-3">{{ __('contact.info_title') }}</h3>

                <div class="space-y-6">
                    <!-- Added individual staggered fade-ups for each contact detail -->
                    <div data-aos="fade-up" data-aos-delay="100" class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-[#2da4af] rounded-full flex items-center justify-center shrink-0 font-bold text-white shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036-.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0 1 16.5 15Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">{{ __('contact.address') }}</h4>
                            <p class="text-gray-200 mt-1">{{ __('contact.address_val') }}</p>
                        </div>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="200" class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-[#2da4af] rounded-full flex items-center justify-center shrink-0 font-bold text-white shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">{{ __('contact.email_lbl') }}</h4>
                            <p class="text-gray-200 mt-1">Info@eudam.net</p>
                        </div>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="300" class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-[#2da4af] rounded-full flex items-center justify-center shrink-0 font-bold text-white shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477ZM21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">{{ __('contact.web_lbl') }}</h4>
                            <p class="text-gray-200 mt-1">www.eudam.net</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
