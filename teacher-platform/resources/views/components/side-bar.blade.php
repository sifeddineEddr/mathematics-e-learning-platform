<div class="h-screen absolute right-0 pt-8 flex flex-col items-center gap-24 sm:w-[25%] lg:w-[20%]">
    <img src="/images/logo-icon.svg" alt="logo-icon.svg">
    <ul class="hidden sm:flex sm:flex-col sm:gap-8 lg:gap-16">

        <li class="flex gap-4 items-center justify-end hover:text-brand-red sm:text-xl lg:text-2xl">
            <a href="{{ url('/dashboard') }}"
                class="{{ Str::contains(Request::url(), 'dashboard') ? 'text-brand-red' : '' }}">الرئيسية</a>
            <img src="{{ Str::contains(Request::url(), 'dashboard') ? '/images/dashboard-active.svg' : '/images/dashboard.svg' }}"
                alt="dashboard-icon">

        </li>

        <li class="flex gap-4 items-center justify-end hover:text-brand-red sm:text-xl lg:text-2xl">
            <a href="{{ url('/classes') }}"
                class="{{ Str::contains(Request::url(), 'classes') ? 'text-brand-red' : '' }}">أقسامي</a>
            <img src="{{ Str::contains(Request::url(), 'classes') ? '/images/my-classes-active.svg' : '/images/my-classes.svg' }}"
                alt="classes-icon">

        </li>

        <li class="flex gap-4 items-center justify-end hover:text-brand-red sm:text-xl lg:text-2xl">
            <a href="{{ url('/students') }}"
                class="{{ Str::contains(Request::url(), 'students') ? 'text-brand-red' : '' }}">تلامذتي</a>
            <img src="{{ Str::contains(Request::url(), 'students') ? '/images/my-students-active.svg' : '/images/my-students.svg' }}"
                alt="my-students-icon">
        </li>

        <li class="flex gap-4 items-center justify-end hover:text-brand-red sm:text-xl lg:text-2xl">
            <a href="{{ url('/lessons') }}"
                class="{{ Str::contains(Request::url(), 'lessons') ? 'text-brand-red' : '' }}">فضاء
                الدروس</a>
            <img src="{{ Str::contains(Request::url(), 'lessons') ? '/images/lessons-active.svg' : '/images/lessons.svg' }}"
                alt="lessons-icon">
        </li>
        
    </ul>
</div>
