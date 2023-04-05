<div class="flex flex-col gap-28 w-3/12 h-2/3 border-4 border-brand-red rounded-3xl font-black text-center">
    <p class=" text-5xl text-brand-red mt-8">{{ $title }}</p>
    <div class="text-3xl flex flex-col gap-8 text-right pr-12">
        @foreach ($information as $key => $value)
            <p>{{ $value }}</p>
        @endforeach
    </div>
</div>
