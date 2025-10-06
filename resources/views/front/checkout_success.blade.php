@extends('front.layouts.app')
@section('title', 'Success Checkout - Obito LMS')

@section('content')
    <nav id="bottom-nav" class="border-obito-grey flex w-full border-b bg-white py-[14px]">
        <ul class="mx-auto flex w-full max-w-[1280px] gap-3 px-[75px]">
            <li class="group">
                <a href="#"
                    class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-light-green group-[.active]:border-obito-light-green flex items-center gap-2 rounded-full border bg-white px-[14px] py-2 transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/home-trend-up.svg') }}" class="flex w-5 shrink-0" alt="icon">
                    <span>Overview</span>
                </a>
            </li>
            <li class="group">
                <a href="{{ route('dashboard') }}"
                    class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-light-green group-[.active]:border-obito-light-green flex items-center gap-2 rounded-full border bg-white px-[14px] py-2 transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/note-favorite.svg') }}" class="flex w-5 shrink-0" alt="icon">
                    <span>Courses</span>
                </a>
            </li>
            <li class="group">
                <a href="#"
                    class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-light-green group-[.active]:border-obito-light-green flex items-center gap-2 rounded-full border bg-white px-[14px] py-2 transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/message-programming.svg') }}" class="flex w-5 shrink-0" alt="icon">
                    <span>Quizzess</span>
                </a>
            </li>
            <li class="group">
                <a href="#"
                    class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-light-green group-[.active]:border-obito-light-green flex items-center gap-2 rounded-full border bg-white px-[14px] py-2 transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/cup.svg') }}" class="flex w-5 shrink-0" alt="icon">
                    <span>Certificates</span>
                </a>
            </li>
            <li class="group">
                <a href="#"
                    class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-light-green group-[.active]:border-obito-light-green flex items-center gap-2 rounded-full border bg-white px-[14px] py-2 transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/ruler&pen.svg') }}" class="flex w-5 shrink-0" alt="icon">
                    <span>Portfolios</span>
                </a>
            </li>
        </ul>
    </nav>
    <main class="flex flex-1 items-center justify-center py-5">
        <div class="flex w-[500px] flex-col gap-[30px]">
            <div class="flex flex-col gap-[10px]">
                <div class="bg-obito-light-green mx-auto flex !w-fit items-center gap-[6px] rounded-full px-[14px] py-2">
                    <img src="{{ asset('assets/images/icons/crown-green.svg') }}" alt="icon" class="size-[20px] shrink-0" />
                    <p class="text-sm font-bold leading-[21px]">PRO UNLOCKED</p>
                </div>
                <h1 class="text-center text-[28px] font-bold leading-[42px]">Payment Successful</h1>
                <p class="text-obito-text-secondary text-center leading-[28px]">Anda telah memiliki akses kelas materi
                    terbaru sebagai persiapan bekerja di era digital industri saat ini, yay!</p>
            </div>
            <section id="card"
                class="border-obito-grey relative flex items-center gap-4 rounded-[20px] border bg-white p-[10px]">
                <div class="flex h-[130px] w-[180px] items-center justify-center overflow-hidden rounded-[14px]">
                    <img src="{{ asset('assets/images/thumbnails/succes-checkout.png') }}" alt="image"
                        class="h-full w-full object-cover" />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h2 class="font-bold">
                        Subscription Active: <br />
                        {{ $pricing->name }}
                    </h2>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/calendar-green.svg') }}" alt="icon" class="size-[20px] shrink-0" />
                        <p class="text-obito-text-secondary text-sm leading-[21px]">{{ $pricing->duration }} Months Access</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/briefcase-green.svg') }}" alt="icon" class="size-[20px] shrink-0" />
                        <p class="text-obito-text-secondary text-sm leading-[21px]">Job-Ready Skills</p>
                    </div>
                </div>
                <img src="{{ asset('assets/images/icons/cup-green-fill.svg') }}" alt="icon"
                    class="absolute right-0 top-1/2 size-[50px] shrink-0 -translate-y-1/2 translate-x-1/2" />
            </section>
            <div class="mx-auto flex items-center gap-[14px]">
                <a href="{{ route('dashboard.subscriptions') }}">
                    <div
                        class="border-obito-grey hover:border-obito-green flex items-center justify-center rounded-full border bg-white px-5 py-[10px] transition-all duration-300">
                        <p class="font-semibold">My Transactions</p>
                    </div>
                </a>
                <a href="{{ route('dashboard') }}">
                    <div
                        class="bg-obito-green hover:drop-shadow-effect flex items-center justify-center rounded-full px-5 py-[10px] text-white transition-all duration-300">
                        <p class="font-semibold">Start Learning</p>
                    </div>
                </a>
            </div>
        </div>
    </main>
@endsection

@push('after-scripts')
    <script src="{{ asset('js/dropdown-navbar.js') }}"></script>
@endpush
