@props(['name'])
<label class="mt-3 block text-sm font-semibold leading-6 text-gray-900" for="{{ $name }}">
    {{ ucwords($name) }}
</label>
