@extends('front.layouts.app')
@section('title', 'Subscriptions Details - Obito LMS')

@section('content')
    <div id="path" class="border-obito-grey flex w-full border-b bg-white py-[14px]">
        <div class="mx-auto flex w-full max-w-[1280px] items-center gap-5 px-[75px]">
            <a href="{{ route('dashboard') }}" class="last-of-type:font-semibold">Dashboard</a>
            <div class="bg-obito-grey h-10 w-px"></div>
            <a href="{{ route('dashboard.subscriptions') }}" class="last-of-type:font-semibold">My Subscriptions</a>
            <span class="text-obito-grey">/</span>
            <a href="#" class="last-of-type:font-semibold">Details Subscription</a>
        </div>
    </div>
    <main class="flex flex-1 items-center justify-center py-5">
        <div class="border-obito-grey flex !h-fit w-[1000px] items-center gap-[40px] rounded-[20px] border bg-white p-5">
            <div id="details" class="flex w-full flex-col gap-5">
                <h1 class="text-[22px] font-bold leading-[33px]">Details Subscription</h1>
                <section id="give-access-to" class="flex flex-col gap-2">
                    <div class="border-obito-grey flex items-center justify-between rounded-[20px] border p-[14px]">
                        <div class="profile flex items-center gap-[14px]">
                            <img src="{{ asset('assets/images/icons/security-user-green-fill.svg') }}" alt="icon"
                                class="size-[50px] shrink-0" />
                            <div class="desc flex flex-col gap-[3px]">
                                <h3 class="text-obito-text-secondary text-sm leading-[21px]">Booking TRX ID</h3>
                                <p class="font-semibold">{{ $transaction->booking_trx_id }}</p>
                            </div>
                        </div>
                        <div class="status flex items-center gap-[14px]">
                            @if ($transaction->isActive())
                                <span
                                    class="text-obito-green badge bg-obito-light-green w-fit gap-[6px] rounded-full px-[10px] py-[6px] text-xs font-bold">ACTIVE</span>
                            @else
                                <span
                                    class="text-obito-red badge bg-obito-light-red w-fit gap-[6px] rounded-full px-[10px] py-[6px] text-xs font-bold">EXPIRED</span>
                            @endif
                        </div>
                    </div>
                </section>
                <section id="transaction-details" class="flex flex-col gap-[12px]">
                    <h2 class="font-semibold">Transaction Details</h2>
                    <div class="flex flex-col gap-[12px]">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-5 shrink-0" />
                                <p>Subscription Package</p>
                            </div>
                            <strong class="font-semibold">Rp {{ number_format($transaction->sub_total_amount, 0, '', '.') }}</strong>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-5 shrink-0" />
                                <p>Access Duration</p>
                            </div>
                            <strong class="font-semibold">{{ $transaction->pricing->duration }} Months</strong>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-5 shrink-0" />
                                <p>Started At</p>
                            </div>
                            <strong class="font-semibold">{{ $transaction->started_at->format('d M, Y') }}</strong>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-5 shrink-0" />
                                <p>Ended At</p>
                            </div>
                            <strong class="font-semibold">{{ $transaction->ended_at->format('d M, Y') }}</strong>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-5 shrink-0" />
                                <p>PPN 11%</p>
                            </div>
                            <strong class="font-semibold">Rp {{ number_format($transaction->total_tax_amount, 0, '', '.') }}</strong>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-5 shrink-0" />
                                <p class="whitespace-nowrap">Grand Total</p>
                            </div>
                            <strong class="text-obito-green text-[22px] font-bold leading-[33px]"> Rp {{ number_format($transaction->grand_total_amount, 0, '', '.') }} </strong>
                        </div>
                    </div>
                </section>
                <section id="access given-to" class="flex flex-col gap-2">
                    <h2 class="font-semibold">Access Given to</h2>
                    <div class="profile border-obito-grey flex items-center gap-[14px] rounded-[20px] border p-[14px]">
                        <div class="flex size-[50px] items-center justify-center overflow-hidden rounded-full">
                            <img src="{{ Storage::url($transaction->student->photo) }}" alt="image"
                                class="size-full object-cover" />
                        </div>
                        <div class="desc flex flex-col gap-[3px]">
                            <h3 class="font-semibold">{{ $transaction->student->name }}</h3>
                            <p class="text-obito-text-secondary text-sm leading-[21px]">{{ $transaction->student->occupation }}</p>
                        </div>
                    </div>
                </section>
            </div>
            <div id="benefits" class="w-[420px] shrink-0 overflow-hidden rounded-[20px] bg-[#F8FAF9]">
                <section id="thumbnails"
                    class="relative flex h-[250px] w-full items-center justify-center overflow-hidden rounded-t-[14px]">
                    <img src="{{ asset('assets/images/thumbnails/checkout.png') }}" alt="image"
                        class="size-full object-cover" />
                </section>
                <section id="points" class="relative flex flex-col gap-4 px-5 pb-5 pt-[61px]">
                    <div
                        class="card border-obito-grey absolute -top-[47px] left-[30px] right-[30px] flex items-center gap-[14px] rounded-[20px] border bg-white p-4 shadow-[0px_10px_30px_0px_#B8B8B840]">
                        <img src="{{ asset('assets/images/icons/cup-green-fill.svg') }}" alt="icon"
                            class="size-[50px] shrink-0" />
                        <div>
                            <h3 class="text-[18px] font-bold leading-[27px]">{{ $transaction->pricing->name }}</h3>
                            <p class="text-obito-text-secondary">{{ $transaction->pricing->duration }} months duration</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" alt="icon"
                            class="size-6 shrink-0" />
                        <p class="font-semibold">Access 1500+ Online Courses</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" alt="icon"
                            class="size-6 shrink-0" />
                        <p class="font-semibold">Get Premium Certifications</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" alt="icon"
                            class="size-6 shrink-0" />
                        <p class="font-semibold">High Quality Work Portfolio</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" alt="icon"
                            class="size-6 shrink-0" />
                        <p class="font-semibold">Career Consultation 2025</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" alt="icon"
                            class="size-6 shrink-0" />
                        <p class="font-semibold">Support learning 24/7</p>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection

@push('after-scripts')
    <script src="{{ asset('js/dropdown-navbar.js') }}"></script>
@endpush
