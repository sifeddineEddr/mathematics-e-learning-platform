{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo"> --}}
{{-- <x-authentication-card-logo /> --}}
{{-- <img src="/images/logo-icon.svg" alt="logo-icon">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="flex items-center gap-8">
                <img class="w-12" src="/images/login-icon.svg" alt="login-icon">
                <x-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')"
                    required autofocus autocomplete="username" />
            </div>

            <div class="mt-12 flex items-center gap-8">
                <img class="w-12" src="/images/pwd-icon.svg" alt="pwd-icon">
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('تسجيل الدخول') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/logo-icon.svg" type="image/x-icon">
    <title>رياضياتي</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-brand-light-ish-brown flex flex-col items-center h-screen w-full gap-y-24">
    <img src="/images/logo-icon.svg" alt="logo-icon" class="mx-auto mt-8">
    <p class="text-gray-800 text-3xl font-black lg:text-5xl">تسجيل الدخول</p>
    <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    <form {{ route('login') }} method="post" class="flex flex-col gap-y-8 pb-8 lg:gap-y-16">
        @csrf
        <div class="flex w-full gap-6 justify-center items-center lg:gap-24">
            <input type="text" name="login" placeholder="اسم المستخدم"
                class="h-[37px] rounded-2xl border-black text-right lg:h-[50px] lg:w-[571px] lg:rounded-3xl lg:text-xl">
            <img src="/images/login-icon.svg" alt="login-icon" class="h-[37px] w-auto lg:h-[70px]">
        </div>
        <div class="flex w-full gap-6  items-center items-center lg:gap-24">
            <input type="password" name="pwd" placeholder="رمز المرور"
                class="h-[37px] rounded-2xl border-black lg:h-[50px] lg:w-[571px] text-right lg:rounded-3xl lg:text-xl">
            <img src="/images/pwd-icon.svg" alt="pwd-icon" class="h-[21px] w-auto lg:h-[38px]">
        </div>
        <button type="submit"
            class="bg-brand-red text-white w-[104px] h-[35px] rounded-xl text-xl font-black hover:cursor-pointer mt-4 lg:w-[140px] lg:h-[50px] lg:rounded-2xl lg:text-3xl">دخول</button>
    </form>
</body>
</html>