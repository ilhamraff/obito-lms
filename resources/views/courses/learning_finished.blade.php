@extends('front.layouts.app')
@section('title', 'Course Finished - Obito LMS')

@section('content')
    <div class="relative flex justify-center">
        <div id="backgroundImage" class="absolute left-0 right-0 top-0">
            <img src="{{ asset('assets/images/backgrounds/learning-finished.png') }}" alt="image"
                class="h-[777px] w-full object-cover object-bottom" />
        </div>
        <main
            class="border-obito-grey relative mt-[178px] flex w-[560px] flex-col gap-[30px] rounded-[20px] border bg-white p-[30px]">
            <img src="{{ asset('assets/images/icons/cup-green-fill.svg') }}" alt="icon" class="mx-auto size-[60px] shrink-0" />
            <div class="mx-auto flex w-[500px] flex-col items-center gap-[10px]">
                <h1 class="text-center text-[28px] font-bold leading-[42px]">What a Day! Now<br>You’re Ready to Work</h1>
                <p class="text-obito-text-secondary text-center leading-[28px]">Anda telah menyelesaikan materi kelas dengan
                    baik selanjutnya dapat membuat portfolio dan mengikuti magang</p>
            </div>
            <div id="card"
                class="border-obito-grey flex items-center gap-4 rounded-[20px] border pb-[10px] pl-[10px] pr-4 pt-[10px]">
                <div class="flex h-[130px] w-[180px] shrink-0 items-center justify-center overflow-hidden rounded-[14px]">
                    <img src="{{ Storage::url($course->thumbnail) }}" alt="image" class="h-full w-full object-cover" />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h2 class="font-bold">{{ $course->name }}</h2>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/crown-green.svg') }}" alt="icon" class="size-5 shrink-0" />
                        <p class="text-obito-text-secondary text-sm leading-[21px]">{{ $course->category->name }}</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="{{ asset('assets/images/icons/menu-board-green.svg') }}" alt="icon" class="size-5 shrink-0" />
                        <p class="text-obito-text-secondary text-sm leading-[21px]">{{ $course->content_count }} Lessons</p>
                    </div>
                </div>
            </div>
            <div class="buttons grid grid-cols-2 gap-[12px]">
                <a href="#"
                    class="border-obito-grey hover:border-obito-green flex items-center justify-center rounded-full border py-[10px] transition-all duration-300">
                    <span class="font-semibold">Get My Certificate</span>
                </a>
                <a href="{{ route('dashboard') }}"
                    class="bg-obito-green hover:drop-shadow-effect flex items-center justify-center rounded-full py-[10px] text-white transition-all duration-300">
                    <span class="font-semibold">Explore Courses</span>
                </a>
            </div>
        </main>
    </div>
@endsection
