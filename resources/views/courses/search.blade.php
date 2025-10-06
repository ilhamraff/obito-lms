@extends('front.layouts.app')
@section('title', 'Search Courses - Obito LMS')

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
    <main class="mt-[50px] flex flex-col gap-10 pb-10">
        <div class="mx-auto flex w-full max-w-[500px] flex-col items-center gap-[10px]">
            <p class="bg-obito-light-green flex w-fit items-center gap-[6px] rounded-full px-[14px] py-2">
                <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="flex w-5 shrink-0" alt="icon">
                <span class="text-sm font-bold">GROW CAREER</span>
            </p>
            <h1 class="text-center text-[28px] font-bold leading-[42px]">Explore Our Greatest Courses</h1>
            <form method="GET" action="{{ route('dashboard.search.courses') }}" class="relative">
                <label class="group">
                    <input type="text" name="search" id=""
                        class="ring-obito-grey placeholder:text-obito-text-secondary group-focus-within:ring-obito-green w-[550px] appearance-none rounded-full bg-white px-5 py-[14px] pr-[50px] font-bold outline-none ring-1 transition-all duration-300 placeholder:font-normal"
                        placeholder="Search course by name">
                    <button type="submit"
                        class="absolute right-0 top-0 flex h-[52px] w-[52px] shrink-0 items-center justify-center">
                        <img src="{{ asset('assets/images/icons/search-normal-green-fill.svg') }}" class="flex h-10 w-10 shrink-0"
                            alt="">
                    </button>
                </label>
            </form>
        </div>
        <section id="result" class="mx-auto flex w-full max-w-[1280px] flex-col gap-5 px-[75px]">
            <h2 class="text-[22px] font-bold leading-[33px]">Search Result: {{ $keyword ? e($keyword) : 'All Courses' }}</h2>
            <div id="result-list" class="tab-content grid grid-cols-4 gap-5">
                @forelse ($courses as $course)
                    <x-course-card :course="$course"/>
                @empty
                    <p>No course available in this keyword</p>
                @endforelse
            </div>
        </section>
    </main>
@endsection

@push('after-scripts')
    <script src="{{ asset('js/dropdown-navbar.js') }}"></script>
@endpush
