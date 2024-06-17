@props(['title'])
<div {{ $attributes->merge(['class' => 'p-4 bg-white border border-gray-200
            rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700']) }}>
    <h5 class="text-xl font-medium text-gray-900 dark:text-white">{{ $title ?? '' }}</h5>
    <x-layouts.divider/>
    {{ $slot }}
</div>

