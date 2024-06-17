@props(['name', 'options', 'selected', 'placeholder'])
{{--<x-form.field>--}}

    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        {{ $placeholder }}
    </label>
    <select {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
         focus:ring-green-500 focus:border-green-500 block w-full p-2.5'])}} name="$name">
        <option selected>{{ $placeholder }}</option>
        @foreach($options as $key => $value)
            <option value="{{ $key }}" {{ $selected == $key ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
    </select>
    <x-form.error name="{{ $name }}" />
{{--</x-form.field>--}}
