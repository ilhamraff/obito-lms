@extends('front.layouts.app')
@section('title', 'My Courses - Obito LMS')

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
            <li class="active group">
                <a href="#"
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
    <main class="mt-[30px] flex flex-col gap-10 pb-10">
        <section id="roadmap" class="mx-auto flex w-full max-w-[1280px] flex-col gap-4 px-[75px]">
            <h2 class="text-[22px] font-bold leading-[33px]">Popular Roadmap</h2>
            <div class="grid grid-cols-2 gap-5">
                <a href="#" class="card">
                    <div
                        class="roadmap-card border-obito-grey hover:border-obito-green flex items-center gap-4 rounded-[20px] border bg-white p-[10px] pr-4 transition-all duration-300">
                        <div
                            class="bg-obito-grey relative flex h-[150px] w-[240px] shrink-0 overflow-hidden rounded-[14px]">
                            <img src="{{ asset('assets/images/thumbnails/thumbnail-1.png') }}"
                                class="h-full w-full object-cover" alt="thumbnail">
                            <p
                                class="absolute bottom-0 m-[10px] flex w-[calc(100%-20px)] items-center gap-0.5 rounded-[14px] bg-white px-2 py-[6px]">
                                <img src="{{ asset('assets/images/icons/cup.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <span class="text-xs font-semibold leading-[18px]">Featured In AI Industry Digital</span>
                            </p>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h3 class="line-clamp-2 text-lg font-bold">Full-Stack Sr. Website JavaScript Developer 2025</h3>
                            <p class="flex items-center gap-[6px]">
                                <img src="{{ asset('assets/images/icons/briefcase-green.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <span class="text-obito-text-secondary text-sm">Rp 125.500.000/year</span>
                            </p>
                            <p class="flex items-center gap-[6px]">
                                <img src="{{ asset('assets/images/icons/menu-board-green.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <span class="text-obito-text-secondary text-sm">18,498 Courses</span>
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <div
                        class="roadmap-card border-obito-grey hover:border-obito-green flex items-center gap-4 rounded-[20px] border bg-white p-[10px] pr-4 transition-all duration-300">
                        <div
                            class="bg-obito-grey relative flex h-[150px] w-[240px] shrink-0 overflow-hidden rounded-[14px]">
                            <img src="{{ asset('assets/images/thumbnails/thumbnail-2.png') }}"
                                class="h-full w-full object-cover" alt="thumbnail">
                            <p
                                class="absolute bottom-0 m-[10px] flex w-[calc(100%-20px)] items-center gap-0.5 rounded-[14px] bg-white px-2 py-[6px]">
                                <img src="{{ asset('assets/images/icons/cup.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <span class="text-xs font-semibold leading-[18px]">Featured In AI Industry Digital</span>
                            </p>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h3 class="line-clamp-2 text-lg font-bold">Digital Marketing Enterprise User Acquisitions Level
                            </h3>
                            <p class="flex items-center gap-[6px]">
                                <img src="{{ asset('assets/images/icons/briefcase-green.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <span class="text-obito-text-secondary text-sm">Rp 125.500.000/year</span>
                            </p>
                            <p class="flex items-center gap-[6px]">
                                <img src="{{ asset('assets/images/icons/menu-board-green.svg') }}"
                                    class="flex w-5 shrink-0" alt="icon">
                                <span class="text-obito-text-secondary text-sm">18,498 Courses</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section id="catalog" class="mx-auto flex w-full max-w-[1280px] flex-col gap-4 px-[75px]">
            <h1 class="text-[22px] font-bold leading-[33px]">Course Catalog</h1>
            <div id="tabs-container" class="flex items-center gap-3">
                @foreach ($coursesByCategory as $category => $courses)
                    <button type="button" class="tab-btn {{ $loop->first ? 'active' : '' }} group"
                        data-target="{{ Str::slug($category) }}-content">
                        <p
                            class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-black rounded-full border bg-white px-4 py-2 transition-all duration-300">
                            <span
                                class="group-[.active]:font-semibold group-[.active]:text-white">{{ $category }}</span>
                        </p>
                    </button>
                @endforeach
            </div>
            <div id="tabs-content-container" class="mt-1">
                @foreach ($coursesByCategory as $category => $courses)
                    <div id="{{ Str::slug($category) }}-content" class="{{ $loop->first ? '' : 'hidden' }} tab-content grid grid-cols-4 gap-5">
                        @forelse ($courses as $course)
                            <x-course-card :course="$course"/>
                        @empty
                            <p>Belum ada Kelas pada Kategori ini</p>
                        @endforelse
                    </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection

@push('after-scripts')
    <script src="{{ asset('js/dropdown-navbar.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
@endpush
