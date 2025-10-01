<a href="{{ route('dashboard.course.details', $course->slug) }}" class="card">
    <div
        class="course-card border-obito-grey hover:border-obito-green flex flex-col overflow-hidden rounded-[20px] border bg-white transition-all duration-300">
        <div class="thumbnail-container p-[10px]">
            <div class="bg-obito-grey relative h-[150px] w-full overflow-hidden rounded-[14px]">
                <img src="{{ Storage::url($course->thumbnail) }}" class="h-full w-full object-cover" alt="thumbnail">
                <p
                    class="absolute right-[10px] top-[10px] z-10 flex h-fit w-fit flex-col items-center gap-0.5 rounded-[14px] bg-white px-[10px] py-[6px]">
                    <img src="{{ asset('assets/images/icons/like.svg') }}" class="h-5 w-5" alt="icon">
                    <span class="text-xs font-semibold">4.8</span>
                </p>
            </div>
        </div>
        <div class="flex flex-col gap-[13px] p-4 pt-0">
            <h3 class="line-clamp-2 text-lg font-bold">{{ $course->name }}</h3>
            <p class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="flex w-5 shrink-0" alt="icon">
                <span class="text-obito-text-secondary text-sm">{{ $course->category->name }}</span>
            </p>
            <p class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/menu-board-green.svg') }}" class="flex w-5 shrink-0"
                    alt="icon">
                <span class="text-obito-text-secondary text-sm">{{ $course->content_count }} Lessons</span>
            </p>
            <p class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/briefcase-green.svg') }}" class="flex w-5 shrink-0"
                    alt="icon">
                <span class="text-obito-text-secondary text-sm">Ready to Work</span>
            </p>
        </div>
    </div>
</a>
