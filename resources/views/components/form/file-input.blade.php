@props(['name', 'placeholder'])
@aware([
    'error',
])
<x-form.field>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="{{ $name }}">{{ $placeholder ?? '' }}</label>
    <input type="file" accept="image/png, image/jpeg, image/jpg" class="block w-full text-sm text-gray-900 border
    border-gray-300 rounded-lg cursor-pointer bg-gray-50"
           name="{{ $name }}"
           id="{{ $name }}"
        {{ $attributes }}
    />
<x-form.error name="{{ $name }}" />
</x-form.field>

