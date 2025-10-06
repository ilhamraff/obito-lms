<nav id="nav-auth" class="border-obito-grey flex w-full border-b bg-white">
    <div class="mx-auto flex w-[1280px] items-center justify-between px-[75px] py-5">
        <div class="flex items-center gap-[30px]">
            <a href="{{ route('front.index') }}" class="flex shrink-0">
                <img src="{{ asset('assets/images/logos/logo.svg') }}" class="flex shrink-0" alt="logo">
            </a>
            <form method="GET" action="{{ route('dashboard.search.courses') }}" class="relative">
                <label class="group">
                    <input type="text" name="search" id=""
                        class="ring-obito-grey placeholder:text-obito-text-secondary group-focus-within:ring-obito-green w-[400px] appearance-none rounded-full bg-white px-5 py-[14px] pr-[50px] font-bold outline-none ring-1 transition-all duration-300 placeholder:font-normal"
                        placeholder="Search course by name">
                    <button type="submit"
                        class="absolute right-0 top-0 flex h-[52px] w-[52px] shrink-0 items-center justify-center">
                        <img src="{{ asset('assets/images/icons/search-normal-green-fill.svg') }}"
                            class="flex h-10 w-10 shrink-0" alt="">
                    </button>
                </label>
            </form>
        </div>
        <div class="flex items-center justify-end gap-5">
            <a href="#" class="flex shrink-0">
                <img src="{{ asset('assets/images/icons/device-message.svg') }}" class="flex shrink-0" alt="icon">
            </a>
            <a href="#" class="flex shrink-0">
                <img src="{{ asset('assets/images/icons/category.svg') }}" class="flex shrink-0" alt="icon">
            </a>
            <a href="#" class="flex shrink-0">
                <img src="{{ asset('assets/images/icons/notification.svg') }}" class="flex shrink-0" alt="icon">
            </a>
            <div class="bg-obito-grey flex h-[50px] w-px shrink-0"></div>
            <div id="profile-dropdown" class="relative flex items-center gap-[14px]">
                <div class="bg-obito-grey flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                    <img src="{{ Storage::url($user->photo) }}" class="h-full w-full object-cover" alt="photo">
                </div>
                <div>
                    <p class="text-lg font-semibold">{{ $user->name }}</p>
                    <p class="text-obito-text-secondary text-sm">{{ $user->occupation }}</p>
                </div>
                <button id="dropdown-opener" class="flex h-6 w-6 shrink-0">
                    <img src="{{ asset('assets/images/icons/arrow-circle-down.svg') }}" class="h-6 w-6" alt="icon">
                </button>
                <div id="dropdown"
                    class="border-obito-grey absolute right-0 top-full z-10 mt-[7px] hidden h-fit w-[170px] rounded-xl border bg-white px-5 py-4 shadow-[0px_10px_30px_0px_#B8B8B840]">
                    <ul class="flex flex-col gap-[14px]">
                        <li class="hover:text-obito-green transition-all duration-300">
                            <a href="{{ route('dashboard') }}">My Courses</a>
                        </li>
                        <li class="hover:text-obito-green transition-all duration-300">
                            <a href="#">Certificates</a>
                        </li>
                        <li class="hover:text-obito-green transition-all duration-300">
                            <a href="{{ route('dashboard.subscriptions') }}">Subscriptions</a>
                        </li>
                        <li class="hover:text-obito-green transition-all duration-300">
                            <a href="#">Settings</a>
                        </li>
                        <li class="hover:text-obito-green transition-all duration-300">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
