@extends('front.layouts.app')
@section('title', 'Login - Obito LMS')

@section('content')
    <main class="relative flex h-full flex-1">
        <section class="flex flex-1 items-center px-5 py-5 pl-[calc(((100%-1280px)/2)+75px)]">
            <form method="POST" action="{{ route('login') }}"
                class="border-obito-grey flex h-fit w-[510px] shrink-0 flex-col gap-5 rounded-[20px] border bg-white p-5">
                @csrf
                <h1 class="mb-5 text-[22px] font-bold leading-[33px]">Welcome Back, <br>Let’s Upgrade Skills</h1>
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
                <div class="flex flex-col gap-3">
                    <p>Password</p>
                    <label class="group relative">
                        <input name="password" type="password"
                            class="border-obito-grey placeholder:text-obito-text-secondary group-focus-within:border-obito-green w-full appearance-none rounded-full border px-5 py-[14px] pl-12 font-semibold outline-none transition-all duration-300 placeholder:font-normal"
                            placeholder="Type your password">
                        <img src="{{ asset('assets/images/icons/shield-security.svg') }}"
                            class="absolute left-5 top-1/2 flex size-5 shrink-0 -translate-y-1/2 transform" alt="icon">
                    </label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <a href="#" class="text-obito-green text-sm hover:underline">Forgot My Password</a>
                </div>
                <button type="submit"
                    class="bg-obito-green hover:drop-shadow-effect flex items-center justify-center gap-[10px] rounded-full px-5 py-[14px] transition-all duration-300">
                    <span class="font-semibold text-white">Sign In to My Account</span>
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
@endsection
