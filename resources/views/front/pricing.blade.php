@extends('front.layouts.app')
@section('title', 'Pricing - Obito LMS')

@section('content')
    <x-nav-guest />
    <main class="flex flex-1 flex-col justify-center">
        <section id="pricing" class="mt-[50px] flex flex-col items-center gap-[33px]">
            <div class="flex w-full max-w-[500px] flex-col items-center gap-[10px]">
                <p class="bg-obito-light-green flex w-fit items-center gap-[6px] rounded-full px-[14px] py-2">
                    <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="flex w-5 shrink-0" alt="icon">
                    <span class="text-sm font-bold">UNLOCK PRO JOURNEY</span>
                </p>
                <h1 class="text-center text-[28px] font-bold leading-[42px]">Pricing For Everyone</h1>
                <p class="text-obito-text-secondary text-center leading-[28px]">Harga yang kami tetapkan tergolong murah
                    namun mentor tetap memberikan kualitas standard internasional</p>
            </div>
            <div class="flex items-center gap-5">
                <div
                    class="price-card-reguler border-obito-grey flex h-fit w-full max-w-[314px] shrink-0 flex-col gap-5 rounded-[20px] border bg-white p-5">
                    <div class="flex items-center gap-[14px]">
                        <img src="{{ asset('assets/images/icons/award-black-fill.svg') }}" class="flex w-[60px] shrink-0"
                            alt="icon">
                        <h2 class="text-[22px] font-bold leading-[33px]">Beasiswa</h2>
                    </div>
                    <div class="price">
                        <p class="text-[32px] font-bold leading-[48px]">Rp 0</p>
                        <p class="text-obito-text-secondary mt-[6px]">3 months duration</p>
                    </div>
                    <hr class="border-obito-grey">
                    <div class="flex flex-col gap-4">
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" class="flex shrink-0"
                                alt="icon">
                            <span class="font-semibold">Access 100+ Online Courses</span>
                        </p>
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" class="flex shrink-0"
                                alt="icon">
                            <span class="font-semibold">Get Premium Certifications</span>
                        </p>
                    </div>
                    <hr class="border-obito-grey">
                    <a class="bg-obito-grey h-11 w-full gap-[10px] rounded-full px-5 pt-[10px] text-center">
                        <span class="text-obito-text-grey font-semibold">Sold Out</span>
                    </a>
                </div>
                @foreach ($pricing_packages as $package)
                    <div
                        class="price-card-popular border-obito-green flex h-fit w-full max-w-[314px] shrink-0 flex-col gap-5 overflow-hidden rounded-[20px] border-2 bg-white">
                        <p class="popular-badge bg-obito-green py-[6px] text-center font-semibold text-white">Most Popular
                            Package</p>
                        <div class="flex flex-col gap-5 p-5 pt-0">
                            <div class="flex items-center gap-[14px]">
                                <img src="{{ asset('assets/images/icons/cup-green-fill.svg') }}"
                                    class="flex w-[60px] shrink-0" alt="icon">
                                <h2 class="text-[22px] font-bold leading-[33px]">{{ $package->name }}</h2>
                            </div>
                            <div class="price">
                                <p class="text-[32px] font-bold leading-[48px]">Rp
                                    {{ number_format($package->price, 0, '', '.') }}</p>
                                <p class="text-obito-text-secondary mt-[6px]">{{ $package->duration }} months duration</p>
                            </div>
                            <hr class="border-obito-grey">
                            <div class="flex flex-col gap-4">
                                <p class="flex items-center gap-2">
                                    <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                        class="flex shrink-0" alt="icon">
                                    <span class="font-semibold">Access 1500+ Online Courses</span>
                                </p>
                                <p class="flex items-center gap-2">
                                    <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                        class="flex shrink-0" alt="icon">
                                    <span class="font-semibold">Get Premium Certifications</span>
                                </p>
                                <p class="flex items-center gap-2">
                                    <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                        class="flex shrink-0" alt="icon">
                                    <span class="font-semibold">High Quality Work Portfolio</span>
                                </p>
                                <p class="flex items-center gap-2">
                                    <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                        class="flex shrink-0" alt="icon">
                                    <span class="font-semibold">Career Consultation 2025</span>
                                </p>
                                <p class="flex items-center gap-2">
                                    <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                        class="flex shrink-0" alt="icon">
                                    <span class="font-semibold">Support learning 24/7</span>
                                </p>
                            </div>
                            <hr class="border-obito-grey">
                            @if ($user && $package->isSubscribedByUser($user->id))
                                <a href="#"
                                    class="bg-obito-green hover:drop-shadow-effect h-11 w-full gap-[10px] rounded-full px-5 py-[10px] text-center transition-all duration-300">
                                    <span class="font-semibold text-white">You've Subscribed</span>
                                </a>
                            @else
                                <a href="{{ route('front.checkout', $package) }}"
                                    class="bg-obito-green hover:drop-shadow-effect h-11 w-full gap-[10px] rounded-full px-5 py-[10px] text-center transition-all duration-300">
                                    <span class="font-semibold text-white">Get Pro</span>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
                <div
                    class="price-card-reguler border-obito-grey flex h-fit w-full max-w-[314px] shrink-0 flex-col gap-5 rounded-[20px] border bg-white p-5">
                    <div class="flex items-center gap-[14px]">
                        <img src="{{ asset('assets/images/icons/buildings-green-fill.svg') }}"
                            class="flex w-[60px] shrink-0" alt="icon">
                        <h2 class="text-[22px] font-bold leading-[33px]">Business</h2>
                    </div>
                    <hr class="border-obito-grey">
                    <div class="price">
                        <p class="text-lg font-bold leading-[27px]">Customizing easily without paying too much money</p>
                    </div>
                    <div class="flex flex-col gap-4">
                        <p class="text-obito-text-secondary leading-7">Kami bantu siapkan materi ajar sesuai kebutuhan
                            pertumbuhan perusahaan anda saat ini.</p>
                    </div>
                    <hr class="border-obito-grey">
                    <a href="#"
                        class="border-obito-grey hover:border-obito-green h-11 w-full gap-[10px] rounded-full border bg-white px-5 pt-[10px] text-center transition-all duration-300">
                        <span class="font-semibold">Contact Sales</span>
                    </a>
                </div>
            </div>
        </section>
        <section id="testimonials" class="mt-[50px] w-full pb-[66px]">
            <div id="testimonial-slide" class="flex w-full flex-nowrap overflow-x-hidden">
                <div class="slide-container flex animate-[slide_50s_linear_infinite] flex-nowrap gap-5 pl-5">
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/anggaphoto.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/sami.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/3rdPerson.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/anggaphoto.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/sami.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/3rdPerson.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-container flex animate-[slide_50s_linear_infinite] flex-nowrap gap-5 pl-5">
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/anggaphoto.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/sami.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/3rdPerson.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/anggaphoto.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/sami.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testimonial-card border-obito-grey flex w-[359px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
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
                        <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                            saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                        <div class="flex items-center gap-3">
                            <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ asset('assets/images/photos/3rdPerson.png') }}"
                                    class="h-full w-full object-cover" alt="photo profile">
                            </div>
                            <div>
                                <p class="font-semibold">Angga Risky</p>
                                <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
