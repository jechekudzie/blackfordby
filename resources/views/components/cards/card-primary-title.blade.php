@props(['title', 'subtitle'])
<div  {{ $attributes->merge(['class' => 'mt-2.5 flex-1 min-w-0 ms-4']) }}>
    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
        {{ $title }}
    </p>
    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
        {{ $subtitle }}
    </p>
</div>
