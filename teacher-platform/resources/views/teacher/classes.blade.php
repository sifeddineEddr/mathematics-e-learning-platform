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
        <div class="flex flex-wrap items-center justify-around gap-8">
            <x-class-layout className="4" nbStudents="4" route />
        </div>
        <div class="flex justify-around w-[70%]">
            <a href=""class="text-brand-red hover:text-white border border-brand-red hover:bg-brand-red focus:ring-4 focus:outline-none focus:ring-brand-red font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">-</a>
        </div>
    </div>
</body>

</html>
