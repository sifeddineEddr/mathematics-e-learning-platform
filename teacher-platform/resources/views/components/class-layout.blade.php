<div
    class="flex flex-col items-center justify-around border-2 max-w-sm p-6 bg-white rounded-lg shadow border-brand-red h-[200px] w-[350px]">
    <div class="flex gap-4">
        <img src="/images/my-classes-active.svg" alt="class-icon">
        <p class="text-2xl text-brand-red mb-2 text-2xl font-bold tracking-tight">
            {{-- الخامس ابتدائي - 1 --}}
            {{ $className }}
        </p>
    </div>
    <p class="mb-3 font-normal text-2xl text-center">
        {{-- 324 --}}
        {{ $nbStudents }}
        تلميذ
    </p>
    <a {{-- href=" ?classroom_id={{ $route }}" --}} href={{ route('teacher.students', "$id") }}
        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-brand-red rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
        الاطلاع على المزيد
    </a>
</div>
