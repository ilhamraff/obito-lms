@extends('front.layouts.app')
@section('title', 'Obito LMS')

@section('content')
    <x-nav-guest />
    <main class="flex flex-1 items-center py-[70px]">
        <div class="flex w-full items-center justify-between gap-[77px] pl-[calc(((100%-1280px)/2)+75px)]">
            <div class="flex max-w-[500px] flex-col gap-[50px]">
                <div class="flex flex-col gap-[30px]">
                    <p class="bg-obito-light-green flex w-fit items-center gap-[6px] rounded-full px-[14px] py-2">
                        <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="flex w-5 shrink-0" alt="icon">
                        <span class="text-sm font-bold">TRUSTED BY 500 FORTUNE ANGGA COMPANIES</span>
                    </p>
                    <div>
                        <h1 class="text-[50px] font-extrabold leading-[65px]">Upgrade Skills, <br>Get Higher Salary</h1>
                        <p class="text-obito-text-secondary mt-[10px] leading-7">Materi terbaru disusun oleh professional
                            dan perusahaan besar agar lebih sesuai kebutuhan dan anda lorem dolorsi.</p>
                    </div>
                    <div class="flex items-center gap-[18px]">
                        <a href="{{ route('register') }}"
                            class="bg-obito-green hover:drop-shadow-effect flex h-[67px] items-center gap-[10px] rounded-full px-[30px] py-5 transition-all duration-300">
                            <span class="text-lg font-semibold text-white">Get Started</span>
                        </a>
                        <a href="#"
                            class="border-obito-grey hover:border-obito-green flex h-[67px] items-center gap-[10px] rounded-full border bg-white px-[30px] py-5 transition-all duration-300">
                            <img src="{{ asset('assets/images/icons/play-circle-fill.svg') }}" class="flex size-8 shrink-0"
                                alt="icon">
                            <span class="text-lg font-semibold">How It Works</span>
                        </a>
                    </div>
                </div>
                <div class="flex items-center gap-[14px]">
                    <img src="{{ asset('assets/images/photos/group.png') }}" class="flex h-[50px] shrink-0"
                        alt="group photo">
                    <div>
                        <div class="flex items-center gap-1">
                            <div class="flex">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="star">
                            </div>
                            <span class="font-bold">5.0</span>
                        </div>
                        <p class="mt-1 font-bold">Join Millions Developer</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex h-[590px] w-[666px] shrink-0 justify-end">
            <img src="{{ asset('assets/images/backgrounds/hero-image.png') }}" alt="hero-image">
        </div>
    </main>
@endsection
