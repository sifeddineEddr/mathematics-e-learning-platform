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

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <div class="flex flex-col items-center gap-16">
        <x-validation-errors class="" />

        <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-y-8 pb-8 lg:gap-y-16">
            @csrf
            <div class="flex w-full gap-6 justify-center items-center lg:gap-24">
                <x-input id="login" placeholder="اسم المستخدم"
                    class="h-[37px] rounded-2xl border-black text-right lg:h-[50px] lg:w-[571px] lg:rounded-3xl lg:text-xl"
                    type="text" name="login" :value="old('login')" required autofocus />
                <img src="/images/login-icon.svg" alt="login-icon" class="h-[37px] w-auto lg:h-[70px]">
            </div>
            <div class="flex w-full gap-6 items-center lg:gap-24">
                {{-- <input type="password" name="pwd" placeholder="رمز المرور"
                class="h-[37px] rounded-2xl border-black lg:h-[50px] lg:w-[571px] text-right lg:rounded-3xl lg:text-xl"> --}}
                <x-input placeholder="رمز المرور" id="password" class="block mt-1 w-full" type="password"
                    name="password" required autocomplete="current-password"
                    class="h-[37px] rounded-2xl border-black lg:h-[50px] lg:w-[571px] text-right lg:rounded-3xl lg:text-xl" />
                <img src="/images/pwd-icon.svg" alt="pwd-icon" class="h-[21px] w-auto lg:h-[38px]">
            </div>
            <button type="submit"
                class="bg-brand-red text-white w-[104px] h-[35px] rounded-xl text-xl font-black hover:cursor-pointer mt-4 lg:w-[140px] lg:h-[50px] lg:rounded-2xl lg:text-3xl">دخول</button>
        </form>
    </div>

</body>

</html>
