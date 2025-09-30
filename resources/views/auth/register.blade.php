@extends('front.layouts.app')
@section('title', 'Register - Obito LMS')

@section('content')
    <x-nav-guest />
    <main class="relative flex h-full flex-1">
        <section class="flex flex-1 items-center px-5 py-5 pl-[calc(((100%-1280px)/2)+75px)]">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                class="border-obito-grey flex h-fit w-[510px] shrink-0 flex-col gap-4 rounded-[20px] border bg-white p-5">
                @csrf
                <h1 class="text-[22px] font-bold leading-[33px]">Upgrade Your Skills</h1>
                <label class="relative flex items-center gap-3">
                    <button id="upload-photo" type="button"
                        class="border-obito-grey focus:ring-obito-green relative flex h-[90px] w-[90px] overflow-hidden rounded-full border transition-all duration-300">
                        <span
                            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform text-sm font-semibold">
                            Add <br>Photo
                        </span>
                        <img id="photo-preview" src="" class="hidden h-full w-full object-cover" alt="photo">
                    </button>
                    <button id="delete-photo" type="button"
                        class="bg-obito-light-red text-obito-red hidden w-fit rounded-full px-[10px] py-[6px] text-xs font-bold">DELETE
                        PHOTO</button>
                    <input name="photo" id="hidden-input" type="file" accept="image/*"
                        class="absolute -z-10 opacity-0">
                </label>
                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                <div class="flex flex-col gap-2">
                    <p>Complete Name</p>
                    <label class="group relative">
                        <input name="name" type="text"
                            class="border-obito-grey placeholder:text-obito-text-secondary group-focus-within:border-obito-green w-full appearance-none rounded-full border px-5 py-[14px] pl-12 font-semibold outline-none transition-all duration-300 placeholder:font-normal"
                            placeholder="Type your complete name">
                        <img src="{{ asset('assets/images/icons/profile.svg') }}"
                            class="absolute left-5 top-1/2 flex size-5 shrink-0 -translate-y-1/2 transform" alt="icon">
                    </label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="flex flex-col gap-2">
                    <p>Occupation</p>
                    <label class="group relative">
                        <input name="occupation" type="text"
                            class="border-obito-grey placeholder:text-obito-text-secondary group-focus-within:border-obito-green w-full appearance-none rounded-full border px-5 py-[14px] pl-12 font-semibold outline-none transition-all duration-300 placeholder:font-normal"
                            placeholder="Type your ocupation">
                        <img src="{{ asset('assets/images/icons/briefcase.svg') }}"
                            class="absolute left-5 top-1/2 flex size-5 shrink-0 -translate-y-1/2 transform" alt="icon">
                    </label>
                    <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
                </div>
                <div class="flex flex-col gap-2">
                    <p>Email Address</p>
                    <label class="group relative">
                        <input name="email" type="email"
                            class="border-obito-grey placeholder:text-obito-text-secondary group-focus-within:border-obito-green w-full appearance-none rounded-full border px-5 py-[14px] pl-12 font-semibold outline-none transition-all duration-300 placeholder:font-normal"
                            placeholder="Type your valid email address">
                        <img src="{{ asset('assets/images/icons/sms.svg') }}"
                            class="absolute left-5 top-1/2 flex size-5 shrink-0 -translate-y-1/2 transform" alt="icon">
                    </label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="flex flex-col gap-2">
                    <p>Password</p>
                    <label class="group relative">
                        <input name="password" type="password"
                            class="border-obito-grey placeholder:text-obito-text-secondary group-focus-within:border-obito-green w-full appearance-none rounded-full border px-5 py-[14px] pl-12 font-semibold outline-none transition-all duration-300 placeholder:font-normal"
                            placeholder="Type your password">
                        <img src="{{ asset('assets/images/icons/shield-security.svg') }}"
                            class="absolute left-5 top-1/2 flex size-5 shrink-0 -translate-y-1/2 transform" alt="icon">
                    </label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="flex flex-col gap-2">
                    <p>Confirm Password</p>
                    <label class="group relative">
                        <input name="password_confirmation" type="password"
                            class="border-obito-grey placeholder:text-obito-text-secondary group-focus-within:border-obito-green w-full appearance-none rounded-full border px-5 py-[14px] pl-12 font-semibold outline-none transition-all duration-300 placeholder:font-normal"
                            placeholder="Type your password">
                        <img src="{{ asset('assets/images/icons/shield-security.svg') }}"
                            class="absolute left-5 top-1/2 flex size-5 shrink-0 -translate-y-1/2 transform" alt="icon">
                    </label>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <button type="submit"
                    class="bg-obito-green hover:drop-shadow-effect flex items-center justify-center gap-[10px] rounded-full px-5 py-[14px] transition-all duration-300">
                    <span class="font-semibold text-white">Create My Account</span>
                </button>
            </form>
        </section>
        <div class="relative flex w-1/2 shrink-0">
            <div id="background-banner" class="absolute flex h-full w-full overflow-hidden">
                <img src="{{ asset('assets/images/backgrounds/banner-subscription.png') }}"
                    class="h-full w-full object-cover" alt="banner">
            </div>
        </div>
    </main>

    <script src="{{ asset('js/photo-upload.js') }}"></script>
@endsection
