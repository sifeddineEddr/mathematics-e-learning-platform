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
            <form action="" method="get" id="form">
                <x-select-input label="اختار المستوى" :options="$classrooms_data" />
            </form>
        </div>
        <div class="w-[90%] relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-gray-500">
                <thead class="text-xs text-center text-gray-500 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            رمز مسار
                        </th>
                        <th scope="col" class="px-6 py-3">
                            الاسم الشخصي
                        </th>
                        <th scope="col" class="px-6 py-3">
                            الاسم العائلي
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
                    @foreach ($students as $student)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $student->massar_code }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $student->first_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $student->last_name }}
                            </td>
                            <td class="px-6 py-4">
                                @foreach ($classrooms_data as $item)
                                    {{ $item }}
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-brand-red hover:underline">الاطلاع على
                                    التقدم</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const dropdown = document.getElementById("select");
        dropdown.addEventListener("change", function() {
            document.getElementById("form").submit();
        });
    </script>
</body>

</html>
