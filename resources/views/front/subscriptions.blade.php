@extends('front.layouts.app')
@section('title', 'My Subscriptions - Obito LMS')

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
                    <img src="{{ asset('assets/images/icons/note-favorite.svg') }}" class="flex w-5 shrink-0"
                        alt="icon">
                    <span>Courses</span>
                </a>
            </li>
            <li class="group">
                <a href="#"
                    class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-light-green group-[.active]:border-obito-light-green flex items-center gap-2 rounded-full border bg-white px-[14px] py-2 transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/message-programming.svg') }}" class="flex w-5 shrink-0"
                        alt="icon">
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
    <main class="relative flex h-full flex-1">
        <div id="background-banner" class="absolute right-0 flex h-full w-1/2 shrink-0 overflow-hidden">
            <img src="{{ asset('assets/images/backgrounds/banner-subscription.png') }}" class="h-full w-full object-cover"
                alt="banner">
        </div>
        <section id="subscriptions-list"
            class="relative mx-auto mt-[50px] flex w-full max-w-[1280px] flex-col gap-5 px-[75px] py-5">
            <h1 class="text-[28px] font-bold leading-[42px]">My Subscriptions</h1>
            <div id="list-container" class="flex w-full max-w-[800px] flex-col gap-5">
                @forelse ($transactions as $transaction)
                    <div
                        class="subscription-card border-obito-grey flex items-center justify-between gap-8 rounded-[20px] border bg-white px-4 py-5">
                        <div class="flex flex-1 items-center gap-[14px]">
                            <div class="flex size-[50px] shrink-0">
                                <img src="{{ asset('assets/images/icons/cup-green-fill.svg') }}"
                                    class="flex size-[50px] shrink-0" alt="icon">
                            </div>
                            <div>
                                <p class="text-lg font-bold">{{ $transaction->pricing->name }}</p>
                                <p class="text-obito-text-secondary">{{ $transaction->pricing->duration }} months duration
                                </p>
                            </div>
                        </div>
                        <div class="flex w-[100px] shrink-0 flex-col gap-1">
                            <div class="flex items-center gap-1">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <p class="text-sm">Price</p>
                            </div>
                            <p class="text-sm font-semibold">Rp
                                {{ number_format($transaction->sub_total_amount, 0, '', '.') }}</p>
                        </div>
                        <div class="flex w-[150px] shrink-0 flex-col gap-1">
                            <div class="flex items-center gap-1">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <p class="text-sm">Started At</p>
                            </div>
                            <p class="text-sm font-semibold">{{ $transaction->started_at->format('d M, Y') }}</p>
                        </div>
                        @if ($transaction->isActive())
                            <div class="flex w-[75px] shrink-0 items-center justify-center">
                                <span
                                    class="text-obito-green badge bg-obito-light-green w-fit gap-[6px] rounded-full px-[10px] py-[6px] text-xs font-bold">ACTIVE</span>
                            </div>
                        @else
                            <div class="flex w-[75px] shrink-0 items-center justify-center">
                                <span
                                    class="text-obito-red badge bg-obito-light-red w-fit gap-[6px] rounded-full px-[10px] py-[6px] text-xs font-bold">EXPIRED</span>
                            </div>
                        @endif
                        <a href="{{ route('dashboard.subscriptions.details', $transaction) }}"
                            class="border-obito-grey hover:border-obito-green gap-[10px] rounded-full border bg-white px-5 py-[10px] transition-all duration-300">
                            <span class="font-semibold">Details</span>
                        </a>
                    </div>
                @empty
                    <p>No packages have been purchased yet</p>
                @endforelse
            </div>
        </section>
    </main>
@endsection

@push('after-scripts')
    <script src="{{ asset('js/dropdown-navbar.js') }}"></script>
@endpush
