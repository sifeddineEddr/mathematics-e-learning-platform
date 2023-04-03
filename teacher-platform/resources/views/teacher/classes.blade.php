<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/logo-icon.svg" type="image/x-icon">
    <title>رياضياتي</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-brand-light-ish-brown w-full h-screen">
    <x-side-bar />
    <div dir="rtl" class="pb-4 h-screen abolute flex-wrap left-0 sm:w-[75%] lg:w-[80%] flex items-center justify-around gap-8">
        <div class="flex flex-wrap items-center justify-around gap-y-8">
            {{-- <x-class-layout /> --}}
        </div>
        <div class="flex justify-around w-[70%]">
            {{-- <x-button-component :route = "">slot</x-button-component> --}}
        </div>
    </div>
</body>

</html>
