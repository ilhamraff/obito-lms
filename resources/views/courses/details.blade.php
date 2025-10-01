@extends('front.layouts.app')
@section('title', 'Details - Obito LMS')

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
    <main class="mt-[30px] flex flex-col gap-[30px] pb-10">
        <header
            class="border-obito-grey mx-auto flex w-full max-w-[1000px] items-center gap-[30px] rounded-[20px] border bg-white p-5">
            <div id="thumbnail-container"
                class="bg-obito-grey relative flex h-[350px] w-[500px] shrink-0 overflow-hidden rounded-[14px]">
                <img src="{{ Storage::url($course->thumbnail) }}" class="h-full w-full object-cover" alt="thumbnail">
                <p
                    class="absolute bottom-[10px] left-[10px] z-10 z-10 flex h-fit w-fit flex-col items-center gap-0.5 rounded-[14px] bg-white px-[10px] py-[6px]">
                    <img src="{{ asset('assets/images/icons/like.svg') }}" class="h-5 w-5" alt="icon">
                    <span class="text-xs font-semibold">4.8</span>
                </p>
                {{-- <button type="button" class="absolute left-1/2 top-1/2 z-10 -translate-x-1/2 -translate-y-1/2 transform">
                    <img src="{{ asset('assets/images/icons/video-circle-green-fill.svg') }}"
                        class="flex h-[60px] w-[60px] shrink-0" alt="icon">
                </button> --}}
            </div>
            <div id="course-info" class="flex flex-col justify-center gap-[30px]">
                <div class="flex flex-col gap-[10px]">
                    @if ($course->is_popular)
                        <p id="badge"
                            class="bg-custom-gradient flex w-fit items-center gap-[6px] rounded-[14px] px-2 py-[6px]">
                            <img src="{{ asset('assets/images/icons/cup-white.svg') }}" class="flex w-5 shrink-0"
                                alt="icon">
                            <span class="text-xs font-semibold text-white">This Course is Popular This Year</span>
                        </p>
                    @endif
                    <h1 class="text-[28px] font-bold leading-[42px]">{{ $course->name }}</h1>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-4">
                        <p class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="flex w-6 shrink-0"
                                alt="icon">
                            <span class="text-sm font-semibold leading-[21px]">{{ $course->category->name }}</span>
                        </p>
                        <p class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/menu-board-green.svg') }}" class="flex w-6 shrink-0"
                                alt="icon">
                            <span class="text-sm font-semibold leading-[21px]">1{{ $course->content_count }} Lessons</span>
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/briefcase-green.svg') }}" class="flex w-6 shrink-0"
                                alt="icon">
                            <span class="text-sm font-semibold leading-[21px]">Ready to Work</span>
                        </p>
                        <p class="flex items-center gap-[6px]">
                            <img src="{{ asset('assets/images/icons/briefcase-green.svg') }}" class="flex w-6 shrink-0"
                                alt="icon">
                            <span class="text-sm font-semibold leading-[21px]">Beginner Level</span>
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <a href="{{ route('dashboard.course.join', $course->slug) }}"
                        class="bg-obito-green hover:drop-shadow-effect gap-[10px] rounded-full px-5 py-[10px] transition-all duration-300">
                        <span class="font-semibold text-white">Start Learning Now</span>
                    </a>
                    <a href="#"
                        class="border-obito-grey hover:border-obito-green gap-[10px] rounded-full border bg-white px-5 py-[10px] transition-all duration-300">
                        <span class="font-semibold">Add to Bookmark</span>
                    </a>
                </div>
            </div>
        </header>
        <section id="details" class="mx-auto flex w-full max-w-[1000px] flex-col gap-4">
            <h2 class="text-[22px] font-bold leading-[33px]">Upgrade Your Skills</h2>
            <div id="contents" class="flex flex-col gap-5">
                <div id="tabs-container" class="flex items-center gap-3">
                    <button type="button" class="tab-btn active group" data-target="about-content">
                        <p
                            class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-black rounded-full border bg-white px-4 py-2 transition-all duration-300">
                            <span class="font-semibold group-[.active]:text-white">About</span>
                        </p>
                    </button>
                    <button type="button" class="tab-btn group" data-target="lessons-content">
                        <p
                            class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-black rounded-full border bg-white px-4 py-2 transition-all duration-300">
                            <span class="font-semibold group-[.active]:text-white">Lessons</span>
                        </p>
                    </button>
                    <button type="button" class="tab-btn group" data-target="testimonials-content">
                        <p
                            class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-black rounded-full border bg-white px-4 py-2 transition-all duration-300">
                            <span class="font-semibold group-[.active]:text-white">Testimonials</span>
                        </p>
                    </button>
                    <button type="button" class="tab-btn group" data-target="example">
                        <p
                            class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-black rounded-full border bg-white px-4 py-2 transition-all duration-300">
                            <span class="font-semibold group-[.active]:text-white">Portfolios</span>
                        </p>
                    </button>
                    <button type="button" class="tab-btn group" data-target="example">
                        <p
                            class="border-obito-grey hover:border-obito-green group-[.active]:bg-obito-black rounded-full border bg-white px-4 py-2 transition-all duration-300">
                            <span class="font-semibold group-[.active]:text-white">Rewards</span>
                        </p>
                    </button>
                </div>
                <div id="tabs-content-container">
                    <div id="about-content" class="tab-content flex flex-col gap-[30px]">
                        <div id="description" class="flex w-full max-w-[844px] flex-col gap-4 leading-7">
                            <p>{{ $course->about }}</p>
                        </div>
                        <div id="what-you-learn" class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold">What Will You Learn</h3>
                            <div class="grid w-full max-w-[700px] grid-cols-2 gap-x-[30px] gap-y-4">
                                @foreach ($course->benefits as $benefit)
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                            class="flex w-6 shrink-0" alt="icon">
                                        <p>{{ $benefit->name }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="instructors"
                            class="border-obito-grey flex w-full max-w-[900px] flex-col gap-4 rounded-[20px] border bg-white p-5">
                            <h3 class="text-lg font-semibold">Course Instructors</h3>
                            <div class="grid grid-cols-2 gap-5">
                                @foreach ($course->courseMentors as $mentor)
                                    <div
                                        class="instructors-card border-obito-grey flex flex-col gap-4 rounded-[20px] border bg-white p-5">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-3">
                                                <div class="flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                                    <img src="{{ Storage::url($mentor->mentor->photo) }}"
                                                        class="h-full w-full object-cover" alt="photo">
                                                </div>
                                                <div>
                                                    <p class="font-semibold">{{ $mentor->mentor->name }}</p>
                                                    <p class="text-obito-text-secondary text-sm">
                                                        {{ $mentor->mentor->occupation }}</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                    class="flex w-5 shrink-0" alt="icon">
                                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                    class="flex w-5 shrink-0" alt="icon">
                                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                    class="flex w-5 shrink-0" alt="icon">
                                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                    class="flex w-5 shrink-0" alt="icon">
                                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                    class="flex w-5 shrink-0" alt="icon">
                                            </div>
                                        </div>
                                        <hr class="border-obito-grey">
                                        <p class="leading-7">{{ $mentor->about }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="lessons-content" class="tab-content flex hidden w-full max-w-[650px] flex-col gap-5">
                        @foreach ($course->courseSections as $section)
                            <div
                                class="accordion border-obito-grey flex flex-col gap-4 rounded-[20px] border bg-white p-5">
                                <button type="button" id="accordion-btn" data-expand="{{ $section->id }}"
                                    class="flex items-center justify-between">
                                    <p class="text-lg font-semibold">{{ $section->name }}</p>
                                    <img src="{{ asset('assets/images/icons/arrow-circle-down.svg') }}" alt="icon"
                                        class="size-6 shrink-0 -rotate-180 transition-all duration-300" />
                                </button>
                                <div id="{{ $section->id }}" class="">
                                    <div class="flex flex-col gap-4">
                                        @foreach ($section->sectionContents as $content)
                                            <div
                                                class="border-obito-grey flex items-center gap-[10px] rounded-[50px] border bg-white px-4 py-3">
                                                <img src="{{ asset('assets/images/icons/menu-board.svg') }}"
                                                    class="flex size-6 shrink-0" alt="icon">
                                                <p class="font-semibold">{{ $content->name }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="testimonials-content" class="tab-content grid hidden w-full max-w-[860px] grid-cols-2 gap-5">
                        <div
                            class="testimonial-card border-obito-grey flex flex-col gap-4 rounded-[20px] border bg-white p-5">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                            </div>
                            <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                                saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                            <div class="flex items-center gap-3">
                                <div class="flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                    <img src="{{ asset('assets/images/photos/sami.png') }}"
                                        class="h-full w-full object-cover" alt="photo">
                                </div>
                                <div>
                                    <p class="font-semibold">Angga Risky</p>
                                    <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="testimonial-card border-obito-grey flex flex-col gap-4 rounded-[20px] border bg-white p-5">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                            </div>
                            <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                                saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                            <div class="flex items-center gap-3">
                                <div class="flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                    <img src="{{ asset('assets/images/photos/4thPerson.png') }}"
                                        class="h-full w-full object-cover" alt="photo">
                                </div>
                                <div>
                                    <p class="font-semibold">Angga Risky</p>
                                    <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="testimonial-card border-obito-grey flex flex-col gap-4 rounded-[20px] border bg-white p-5">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                            </div>
                            <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                                saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                            <div class="flex items-center gap-3">
                                <div class="flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                    <img src="{{ asset('assets/images/photos/anggaphoto.png') }}"
                                        class="h-full w-full object-cover" alt="photo">
                                </div>
                                <div>
                                    <p class="font-semibold">Angga Risky</p>
                                    <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="testimonial-card border-obito-grey flex flex-col gap-4 rounded-[20px] border bg-white p-5">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                            </div>
                            <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                                saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                            <div class="flex items-center gap-3">
                                <div class="flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                    <img src="{{ asset('assets/images/photos/sami.png') }}"
                                        class="h-full w-full object-cover" alt="photo">
                                </div>
                                <div>
                                    <p class="font-semibold">Angga Risky</p>
                                    <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="testimonial-card border-obito-grey flex flex-col gap-4 rounded-[20px] border bg-white p-5">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                            </div>
                            <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                                saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                            <div class="flex items-center gap-3">
                                <div class="flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                    <img src="{{ asset('assets/images/photos/5thPerson.png') }}"
                                        class="h-full w-full object-cover" alt="photo">
                                </div>
                                <div>
                                    <p class="font-semibold">Angga Risky</p>
                                    <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="testimonial-card border-obito-grey flex flex-col gap-4 rounded-[20px] border bg-white p-5">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                            </div>
                            <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                                saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                            <div class="flex items-center gap-3">
                                <div class="flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                    <img src="{{ asset('assets/images/photos/anggaphoto.png') }}"
                                        class="h-full w-full object-cover" alt="photo">
                                </div>
                                <div>
                                    <p class="font-semibold">Angga Risky</p>
                                    <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="testimonial-card border-obito-grey flex flex-col gap-4 rounded-[20px] border bg-white p-5">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                                <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex w-5 shrink-0"
                                    alt="icon">
                            </div>
                            <p class="leading-7">Asik banget belajar di sini dapat contoh kasus sesuai kebutuhan perusahaan
                                saat ini proses adaptasi jadi lebih cepat dan produktif.</p>
                            <div class="flex items-center gap-3">
                                <div class="flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                                    <img src="{{ asset('assets/images/photos/3rdPerson.png') }}"
                                        class="h-full w-full object-cover" alt="photo">
                                </div>
                                <div>
                                    <p class="font-semibold">Angga Risky</p>
                                    <p class="text-obito-text-secondary text-sm">Full Stack Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="example" class="tab-content hidden">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, sapiente?</p>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection

@push('after-scripts')
    <script src="{{ asset('js/dropdown-navbar.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
@endpush
