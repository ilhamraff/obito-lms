@extends('front.layouts.app')
@section('title', 'Course Learning - Obito LMS')

@section('content')
    <div class="flex h-screen">
        <aside class="border-obito-grey flex flex-col border bg-white">
            <div class="flex h-[280px] w-[260px] flex-col gap-5 px-5 pb-[20px] pt-5">
                <ul>
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <div
                                class="border-obito-grey hover:border-obito-green flex items-center gap-2 rounded-full border bg-white px-[14px] py-[10px] transition-all duration-300">
                                <img src="{{ asset('assets/images/icons/home-trend-up.svg') }}" alt="icon"
                                    class="size-[20px] shrink-0" />
                                <p>Back to Dashboard</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <header class="flex flex-col gap-[12px]">
                    <div class="flex h-[100px] w-full items-center justify-center overflow-hidden rounded-[14px]">
                        <img src="{{ Storage::url($course->thumbnail) }}" alt="image"
                            class="h-full w-full object-cover" />
                    </div>
                    <h1 class="font-bold">{{ $course->name }}</h1>
                </header>
                <hr class="border-obito-grey" />
            </div>
            <div id="lessons-container" class="h-full w-[260px] overflow-y-auto [&::-webkit-scrollbar]:hidden">
                <nav class="flex flex-col gap-5 px-5 pb-[33px]">
                    @foreach ($course->courseSections as $section)
                        <div class="lesson accordion flex flex-col gap-4">
                            <button type="button" data-expand="{{ $section->id }}"
                                class="flex items-center justify-between">
                                <h2 class="font-semibold">{{ $section->name }}</h2>
                                <img src="{{ asset('assets/images/icons/arrow-circle-down.svg') }}" alt="icon"
                                    class="size-6 shrink-0 transition-all duration-300" />
                            </button>
                            <div id="{{ $section->id }}" class="hidden">
                                <ul class="flex flex-col gap-4">
                                    @foreach ($section->sectionContents as $content)
                                        <li
                                            class="{{ $currentSection && $section->id == $currentSection->id && $currentContent->id == $content->id ? 'active' : '' }} group">
                                            <a
                                                href="{{ route('dashboard.course.learning', [
                                                    'course' => $course->slug,
                                                    'courseSection' => $section->id,
                                                    'sectionContent' => $content->id,
                                                ]) }}">
                                                <div
                                                    class="group-[&.active]:bg-obito-black border-obito-grey group-hover:bg-obito-black rounded-full border px-4 py-[10px] transition-all duration-300 group-[&.active]:border-transparent group-[&.active]:text-white">
                                                    <h3
                                                        class="text-sm font-semibold leading-[21px] transition-all duration-300 group-hover:text-white">
                                                        {{ $content->name }}</h3>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <hr class="border-obito-grey" />
                    @endforeach
                </nav>
            </div>
        </aside>
        <div class="flex-grow overflow-y-auto">
            <main class="pb-[118px] pl-[50px] pt-[30px]">
                <article>
                    <div class="content-ebook">
                        <h1 class="mb-5">{{ $currentContent->name }}</h1>
                        {!! $currentContent->content !!}
                    </div>
                </article>
            </main>
            <nav class="fixed bottom-0 left-auto right-0 z-30 mx-auto w-[calc(100%-260px)] bg-[#F8FAF9] pb-[30px] pt-5">
                <div class="px-[30px]">
                    <div
                        class="content border-obito-grey flex items-center justify-between rounded-[20px] border bg-white p-[12px]">
                        <p class="text-obito-text-secondary">Pelajari materi dengan baik, jika bingung maka tanya mentor
                            kelas</p>
                        <div class="buttons flex items-center gap-[12px]">
                            <a href="#"
                                class="border-obito-grey hover:border-obito-green rounded-full border px-5 py-[10px] transition-all duration-300">
                                <span class="font-semibold">Ask Mentor</span>
                            </a>
                            @if (!$isFinished)
                                <a href="{{ route('dashboard.course.learning', [
                                    'course' => $course->slug,
                                    'courseSection' => $nextContent->course_section_id,
                                    'sectionContent' => $nextContent->id,
                                ]) }}"
                                    class="bg-obito-green hover:drop-shadow-effect rounded-full border px-5 py-[10px] text-white transition-all duration-300">
                                    <span class="font-semibold">Next Lesson</span>
                                </a>
                            @else
                                <a href="{{ route('dashboard.course.learning.finished', $course->slug) }}"
                                    class="bg-obito-green hover:drop-shadow-effect rounded-full border px-5 py-[10px] text-white transition-all duration-300">
                                    <span class="font-semibold">Finish Learning</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>


@endsection

@push('after-styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/default.min.css">
    <link href='{{ asset('content.css') }}' rel="stylesheet">
@endpush

@push('after-scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/highlight.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('pre').forEach(pre => {
                pre.classList.add('theme-tokyo-night-dark');

                if (!pre.querySelector('code')) {
                    const code = document.createElement('code');
                    code.className = '';
                    code.textContent = pre.textContent.trim();
                    pre.innerHTML = '';
                    pre.appendChild(code);
                }
            });
            hljs.highlightAll();
        });
    </script>
@endpush
