<nav id="nav-guest" class="border-obito-grey flex w-full border-b bg-white">
    <div class="mx-auto flex w-[1280px] items-center justify-between px-[75px] py-5">
        <div class="flex items-center gap-[50px]">
            <a href="{{ route('front.index') }}" class="flex shrink-0">
                <img src="{{ asset('assets/images/logos/logo.svg') }}" class="flex shrink-0" alt="logo">
            </a>
            <ul class="flex items-center gap-10">
                <li
                    class="{{ request()->routeIs('front.index') ? 'font-semibold' : '' }} transition-all duration-300 hover:font-semibold">
                    <a href="{{ route('front.index') }}">Home</a>
                </li>
                <li
                    class="{{ request()->routeIs('front.pricing') ? 'font-semibold' : '' }} transition-all duration-300 hover:font-semibold">
                    <a href="{{ route('front.pricing') }}">Pricing</a>
                </li>
                <li class="transition-all duration-300 hover:font-semibold">
                    <a href="#">Features</a>
                </li>
                <li class="transition-all duration-300 hover:font-semibold">
                    <a href="#">Testimonials</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center justify-end gap-5">
            <a href="#" class="flex shrink-0">
                <img src="{{ asset('assets/images/icons/device-message.svg') }}" class="flex shrink-0" alt="icon">
            </a>
            <div class="bg-obito-grey flex h-[50px] w-px shrink-0"></div>
            <div class="flex items-center gap-3">
                <a href="{{ route('register') }}"
                    class="border-obito-grey hover:border-obito-green gap-[10px] rounded-full border bg-white px-5 py-3 transition-all duration-300">
                    <span class="font-semibold">Sign Up</span>
                </a>
                <a href="{{ route('login') }}"
                    class="bg-obito-green hover:drop-shadow-effect gap-[10px] rounded-full px-5 py-3 transition-all duration-300">
                    <span class="font-semibold text-white">My Account</span>
                </a>
            </div>
        </div>
    </div>
</nav>
