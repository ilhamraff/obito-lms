@extends('front.layouts.app')
@section('title', 'Checkout - Obito LMS')

@section('content')
    <x-navigation-auth />
    <div id="path" class="border-obito-grey flex w-full border-b bg-white py-[14px]">
        <div class="mx-auto flex w-full max-w-[1280px] items-center gap-5 px-[75px]">
            <a href="{{ route('front.index') }}" class="last-of-type:font-semibold">Home</a>
            <div class="bg-obito-grey h-10 w-px"></div>
            <a href="{{ route('front.pricing') }}" class="last-of-type:font-semibold">Pricing Packages</a>
            <span class="text-obito-grey">/</span>
            <a href="#" class="last-of-type:font-semibold">Checkout Subscription</a>
        </div>
    </div>
    <main class="flex flex-1 items-center justify-center py-5">
        <div class="border-obito-grey flex !h-fit w-[1000px] items-center gap-[40px] rounded-[20px] border bg-white p-5">
            <form id="checkout-details" action="success-checkout.html" class="flex w-full flex-col gap-5">
                <h1 class="text-[22px] font-bold leading-[33px]">Checkout Pro</h1>
                <section id="give-access-to" class="flex flex-col gap-2">
                    <h2 class="font-semibold">Give Access to</h2>
                    <div class="border-obito-grey flex items-center justify-between rounded-[20px] border p-[14px]">
                        <div class="profile flex items-center gap-[14px]">
                            <div class="flex size-[50px] items-center justify-center overflow-hidden rounded-full">
                                <img src="{{ Storage::url($user->photo) }}" alt="image" class="size-full object-cover" />
                            </div>
                            <div class="desc flex flex-col gap-[3px]">
                                <h3 class="font-semibold">{{ $user->name }}</h3>
                                <p class="text-obito-text-secondary text-sm leading-[21px]">{{ $user->name }}</p>
                            </div>
                        </div>
                        <a href="#">
                            <p class="text-obito-green text-sm leading-[21px] hover:underline">Change Account</p>
                        </a>
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
                            <strong class="font-semibold">Rp {{ number_format($pricing->price, 0, '', '.') }}</strong>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-5 shrink-0" />
                                <p>Access Duration</p>
                            </div>
                            <strong class="font-semibold">{{ $pricing->duration }} Months</strong>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-5 shrink-0" />
                                <p>Started At</p>
                            </div>
                            <strong class="font-semibold">{{ $started_at->format('d M, Y') }}</strong>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-5 shrink-0" />
                                <p>Ended At</p>
                            </div>
                            <strong class="font-semibold">{{ $ended_at->format('d M, Y') }}</strong>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-5 shrink-0" />
                                <p>PPN 11%</p>
                            </div>
                            <strong class="font-semibold">Rp {{ number_format($total_tax_amount, 0, '', '.') }}</strong>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-5 shrink-0" />
                                <p class="whitespace-nowrap">Grand Total</p>
                            </div>
                            <strong class="text-obito-green text-[22px] font-bold leading-[33px]">Rp
                                {{ number_format($grand_total_amount, 0, '', '.') }}</strong>
                        </div>
                    </div>
                </section>
                <div class="grid grid-cols-2 gap-[14px]">
                    <a href="pricing.html">
                        <div
                            class="border-obito-grey hover:border-obito-green flex items-center justify-center rounded-full border py-[10px] transition-all duration-300">
                            <p class="font-semibold">Cancel</p>
                        </div>
                    </a>
                    <button type="submit"
                        class="bg-obito-green hover:drop-shadow-effect flex items-center justify-center rounded-full py-[10px] text-white transition-all duration-300">
                        <p class="font-semibold">Pay Now</p>
                    </button>
                </div>
                <hr class="border-obito-grey" />
                <p class="text-obito-text-secondary text-center text-sm leading-[21px] hover:underline">Pahami Terms &
                    Conditions Platform Kami</p>
            </form>
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
                            <h3 class="text-[18px] font-bold leading-[27px]">{{ $pricing->name }}</h3>
                            <p class="text-obito-text-secondary">{{ $pricing->duration }} months duration</p>
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
