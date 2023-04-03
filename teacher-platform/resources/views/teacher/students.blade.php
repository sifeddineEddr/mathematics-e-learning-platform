<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/logo-icon.svg" type="image/x-icon">
    <title>رياضياتي</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-brand-light-ish-brown w-full h-screen">
    <x-side-bar />
    <div dir="rtl" class="h-screen abolute left-0 flex items-center justify-start flex-col sm:w-[75%] lg:w-[80%]">
        <div class="w-[80%] h-[25%] flex justify-around mt-12">
            <x-select-input label="اختار المستوى" :options="['1', '2', '3', '4']" />
            <x-select-input label="اختار القسم" :options="['1', '2', '3', '4']" />
        </div>
        <div class="w-[90%] relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                <thead
                    class="text-xs text-center text-gray-500 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            رمز مسار
                        </th>
                        <th scope="col" class="px-6 py-3">
                            الاسم الكامل
                        </th>
                        <th scope="col" class="px-6 py-3">
                            المستوى
                        </th>
                        <th scope="col" class="px-6 py-3">
                            القسم
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">معلومات إضافية</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-center text-gray-900">
                    {{-- <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">الاطلاع على
                                التقدم</a>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
