@props(['name','label_name'])
@aware(['error'])
<x-form.field>
    <label for="{{ $name }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label_name }}</label>
    <textarea name="{{ $name }}" id="message" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
         border-gray-300 focus:ring-green-500 focus:outline-none focus:border-green-500 focus:ring-0.5
         dark:border-gray-600 dark:placeholder-gray-400"   {{ $attributes }} ></textarea>
    <x-form.error name="{{ $name }}" />
</x-form.field>
