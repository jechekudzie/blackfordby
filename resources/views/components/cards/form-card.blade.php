@props(['title'])
<div class="flex justify-center">
    <div {{ $attributes->merge(['class' => 'w-1/2  p-4 bg-white border border-gray-200
            rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700']) }}>
        <form class="space-y-6" action="" {{ $attributes }}>
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">{{ $title ?? '' }}</h5>
            <x-layouts.divider/>
            {{ $form_body ?? ''}}
        </form>
    </div>
</div>
