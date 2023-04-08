<div class="flex flex-col items-end">
    <label for="select">
        {{ $label }}
    </label>
    <select name="select" class="px-20">
        <option value=""></option>
        @foreach ($options as $key => $option)
            <option value={{ $key }}>{{ $option }}</option>
        @endforeach
    </select>
</div>
