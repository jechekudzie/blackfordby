<x-form.field>
    <div class="flex items-center me-4">
        <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300
         rounded focus:ring-green-500" {{ $attributes }}>
        <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $slot }}</label>
    </div>
</x-form.field>
