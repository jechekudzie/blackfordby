@props(['title'])
<div class="flex items-center justify-center">
    <div class="bg-blue-500 text-gray-900 p-4">
        <div class="flex flex-col items-center gap-4">
            <img src="{{ asset('svg/undraw_no_data.svg') }}" alt="Example SVG" class="w-32 h-32">
            <p>{{ $title }}</p>
        </div>
    </div>
</div>
