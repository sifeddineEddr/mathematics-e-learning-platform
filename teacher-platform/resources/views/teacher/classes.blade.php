<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/logo-icon.svg" type="image/x-icon">
    <title>رياضياتي</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
{{-- {{ dd($data) }} --}}
@foreach ($data as $item)
    {{-- {{ dd($item['classroom_name']) }} --}}
    {{-- {{ dd($data) }} --}}
@endforeach

<body class="bg-brand-light-ish-brown w-full h-screen">
    <x-side-bar />
    <div dir="rtl"
        class="h-screen abolute flex-wrap left-0 sm:w-[75%] lg:w-[80%] flex items-center justify-around gap-8">

        <div class="mt-8 -mb-8">
            {{-- Modals --}}
            {{-- Add Class Modal Window --}}
            <button data-modal-target="add-modal" data-modal-toggle="add-modal"
                class="text-brand-red hover:text-white border border-brand-red hover:bg-brand-red focus:ring-4 focus:outline-none focus:ring-brand-red font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                type="button">
                إضافة قسم جديد
            </button>

            <div id="add-modal" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                <div class="relative w-full h-full max-w-md md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-hide="add-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 py-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-brand-red text-center">إضافة قسم جديد</h3>
                            <form class="space-y-6" action="#" enctype="multipart/form-data" method="POST">
                                @csrf
                                <label for="year"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">المستوى</label>
                                <select id="year"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <label for="class"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">القسم</label>
                                <select id="class"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="default_size">المعلومات الخاصة بالقسم</label>
                                <input
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="default_size" type="file" dir="ltr">

                                <button type="submit"
                                    class="w-full text-white bg-brand-red hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">إضافة</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Update Class Modal Window --}}
            <button data-modal-target="update-modal" data-modal-toggle="update-modal"
                class="text-brand-red hover:text-white border border-brand-red hover:bg-brand-red focus:ring-4 focus:outline-none focus:ring-brand-red font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                type="button">
                تحديث معلومات قسم
            </button>

            <div id="update-modal" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                <div class="relative w-full h-full max-w-md md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-hide="update-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 py-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-brand-red text-center">
                                تحديث معلومات قسم
                            </h3>
                            <form class="space-y-6" action="#" enctype="multipart/form-data" method="POST">
                                @csrf
                                <label for="year"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">المستوى</label>
                                <select id="year"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <label for="class"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">القسم</label>
                                <select id="class"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="default_size">المعلومات الخاصة بالقسم</label>
                                <input
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="default_size" type="file" dir="ltr">

                                <button type="submit"
                                    class="w-full text-white bg-brand-red hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">تحديث</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Modals --}}
        </div>
        <div class="flex-flex-col">
            <div class="flex flex-wrap items-center justify-around gap-8 py-4">
                @foreach ($data as $information)
                    <x-class-layout :classYear="$information['classroom_year']" :className="$information['classroom_name']" :nbStudents="$information['countStudents']" :route="$information['id']" />
                @endforeach
            </div>
            <div dir="ltr" class="mx-auto w-[30%]">
                {{ $pagination->links() }}
            </div>
        </div>
    </div>
</body>

</html>
