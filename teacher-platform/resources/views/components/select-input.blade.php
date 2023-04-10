<div class="flex flex-col items-end">
    <label for="select">
        {{ $label }}
    </label>

    <select id="select" name="select" class="px-20" value='{{ Request::get('select') }}'>
        <option value=""></option>
        @foreach ($options as $key => $option)
            <option value={{ $key }} @if (Request::get('select') === strval($key)) selected @endif>
                {{ $option }}
            </option>
        @endforeach
    </select>
</div>
