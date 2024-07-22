
@props(['avatar', 'name', 'course', 'registration_number', 'phonenumber', 'email', 'enrollment_status', 'enrollment_year'])
<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    {{ $options }}
    <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ $avatar ?? '' }}" alt="Bonnie image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $name ?? ''}}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $course ?? '' }}</span>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $enrollment_year ?? '' }}</span>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $registration_number ?? '' }}</span>
        <span class="text-sm text-gray-500 dark:text-gray-400">Phonenumber: {{ $phonenumber ?? '' }}</span>
        <span class="text-sm text-gray-500 dark:text-gray-400">Email: {{ $email ?? '' }}</span>
         @switch($enrollment_status)
             @case('Pending')
                <span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5
                rounded dark:bg-yellow-900 dark:text-yellow-300">{{ $enrollment_status }}</span>
             @break

            @case('Paused')
                <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 mt-2
                 rounded dark:bg-blue-900 dark:text-blue-300">{{ $enrollment_status }}</span>
            @break

            @case('Rejected')
                <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5
                 rounded dark:bg-red-900 dark:text-red-300">{{ $enrollment_status }}</span>

            @break

            @case('Approved')
                <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded
                dark:bg-green-900 dark:text-green-300">{{ $enrollment_status }}</span>

            @break


            @endswitch

{{--        <div class="flex mt-4 md:mt-6">--}}
{{--            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</a>--}}
{{--            <a href="#" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Message</a>--}}
{{--        </div>--}}

    </div>
    <x-layouts.divider/>
    <div class="flex flex-row items-start pb-10 ml-3">
        {{ $slot }}
    </div>
</div>
