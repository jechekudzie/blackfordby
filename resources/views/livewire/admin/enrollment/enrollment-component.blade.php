<div>
    <div class="flex flex-row gap-4 mt-8">
        <ul  id="default-styled-tab"
             data-tabs-active-classes="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
             data-tabs-inactive-classes="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
             data-tabs-toggle="#enrollments-tab-content" class="flex-column space-y space-y-4
        text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
            <li  role="presentation">
                <a id="profile-styled-tab" data-tabs-target="#all-enrollments" type="button" role="tab"
                   class="inline-flex items-center px-4 py-3">
                    Enrollments
                </a>
            </li>
            <li>
                <a id="profile-styled-tab" data-tabs-target="#pending" type="button" role="tab" class="inline-flex items-center px-4 py-3 rounded-lg w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    Pending
                </a>
            </li>
            <li>
                <a id="profile-styled-tab" data-tabs-target="#paused" type="button" role="tab" class="inline-flex items-center px-4 py-3 rounded-lg w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    Paused
                </a>
            </li>
            <li>
                <a id="profile-styled-tab" data-tabs-target="#rejected" type="button" role="tab" class="inline-flex items-center px-4 py-3 rounded-lg w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    Rejected
                </a>
            </li>
            <li>
                <a id="profile-styled-tab" data-tabs-target="#approved" type="button" role="tab" class="inline-flex items-center px-4 py-3 rounded-lg w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    Approved
                </a>
            </li>
        </ul>
        <div id="default-styled-tab" data-tabs-toggle="enrollments-tab-content" class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="all-enrollments" role="tabpanel" aria-labelledby="profile-tab">
                @if(count($enrollments) > 0)
                    <div class="flex flex-row gap-4">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    Student name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Entry
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Course
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Year
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Enrollement Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($enrollments as $enrollment)
                                <tr wire:key="{{ $enrollment->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-10 h-10  rounded-full" src="https://gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50.jpg" alt="Jese image">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">{{ $enrollment->student->first_name }}  {{ $enrollment->student->last_name }}</div>
                                            <div class="font-normal text-gray-500">{{ 'Student ID: 10193888 '}}</div>
                                        </div>
                                    </th>

                                    <td class="px-6 py-4">
                                        {{ $enrollment->entryType->name }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $enrollment->course->name }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $enrollment->enrollmentYear->year }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                            {{ $enrollment->enrollmentStatus->status }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a   href="{{url('/view_student_profile/'.$enrollment->id)}}"   type="button" class="text-yellow-700 border border-yellow-400 hover:bg-yellow-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-yellow200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                                            </svg>


                                            <span class="sr-only">Icon description</span>
                                        </a>

                                        <a href="{{url('')}}" type="button" class="text-green-700 border border-green-700 hover:bg-green-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-green200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                                <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </a>
                                        <button onclick="confirm('Are you sure you want to delete driver  profile of   ?') ? '' : event.stopImmediatePropagation() "
                                                wire:click="" type="button"
                                                class="text-red-700 border border-red-700 hover:bg-red-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-red200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </button>
{{--                                        <a href="{{ route('educational-requirements', $student) }}"  class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
{{--                                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">--}}
{{--                                                <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>--}}
{{--                                            </svg>--}}
{{--                                            Enroll--}}
{{--                                        </a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <x-layouts.nodata_placeholder title="No enrollments found"/>
                @endif
            </div>

            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pending" role="tabpanel" aria-labelledby="profile-tab">
               @if(count($pendingEnrollments) > 0)
                    <div class="flex flex-row gap-4">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    Student name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Entry
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Course
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Year
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Enrollement Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pendingEnrollments as $pendingEnrollment)
                                <tr wire:key="{{ $pendingEnrollment->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        {{--                                    <img class="w-10 h-10  rounded-full" src="https://gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50.jpg" alt="Jese image">--}}
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">{{ $pendingEnrollment->student->first_name }}  {{ $pendingEnrollment->student->last_name }}</div>
                                            <div class="font-normal text-gray-500">{{ 'Student ID: 10193888 '}}</div>
                                        </div>
                                    </th>

                                    <td class="px-6 py-4">
                                        {{ $pendingEnrollment->entryType->name }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $pendingEnrollment->course->name }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $pendingEnrollment->enrollmentYear->year }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                            {{ $pendingEnrollment->enrollmentStatus->status }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a   href="{{url('/view_student_profile/'.$pendingEnrollment->id)}}"   type="button" class="text-yellow-700 border border-yellow-400 hover:bg-yellow-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-yellow200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                                            </svg>


                                            <span class="sr-only">Icon description</span>
                                        </a>

                                        <a href="{{url('')}}" type="button" class="text-green-700 border border-green-700 hover:bg-green-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-green200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                                <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </a>
                                        <button onclick="confirm('Are you sure you want to delete driver  profile of   ?') ? '' : event.stopImmediatePropagation() "
                                                wire:click="" type="button"
                                                class="text-red-700 border border-red-700 hover:bg-red-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-red200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </button>
                                        {{--                                    <a href="{{ route('educational-requirements', $student) }}"  class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
                                        {{--                                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">--}}
                                        {{--                                            <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>--}}
                                        {{--                                        </svg>--}}
                                        {{--                                        Enroll--}}
                                        {{--                                    </a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
               @else
                    <x-layouts.nodata_placeholder title="No pending enrollments found"/>
               @endif
            </div>

            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="paused" role="tabpanel" aria-labelledby="profile-tab">
                @if(count($pausedEnrollments) > 0))
                <div class="flex flex-row gap-4">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="px-6 py-3">
                                Student name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Entry
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Course
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Year
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Enrollement Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pausedEnrollments as $pausedEnrollment)
                            <tr wire:key="{{ $enrollment->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    {{--                                    <img class="w-10 h-10  rounded-full" src="https://gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50.jpg" alt="Jese image">--}}
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">{{ $pausedEnrollment->student->first_name }}  {{ $pausedEnrollment->student->last_name }}</div>
                                        <div class="font-normal text-gray-500">{{ 'Student ID: 10193888 '}}</div>
                                    </div>
                                </th>

                                <td class="px-6 py-4">
                                    {{ $pausedEnrollment->entryType->name }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $pausedEnrollment->course->name }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $pausedEnrollment->enrollmentYear->year }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                        {{ $pausedEnrollment->enrollmentStatus->status }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a   href="{{url('/view_student_profile/'.$pausedEnrollment->id)}}"   type="button" class="text-yellow-700 border border-yellow-400 hover:bg-yellow-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-yellow200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                                        </svg>


                                        <span class="sr-only">Icon description</span>
                                    </a>

                                    <a href="{{url('')}}" type="button" class="text-green-700 border border-green-700 hover:bg-green-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-green200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                                        </svg>
                                        <span class="sr-only">Icon description</span>
                                    </a>
                                    <button onclick="confirm('Are you sure you want to delete driver  profile of   ?') ? '' : event.stopImmediatePropagation() "
                                            wire:click="" type="button"
                                            class="text-red-700 border border-red-700 hover:bg-red-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-red200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                        </svg>
                                        <span class="sr-only">Icon description</span>
                                    </button>
                                    {{--                                    <a href="{{ route('educational-requirements', $student) }}"  class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
                                    {{--                                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">--}}
                                    {{--                                            <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>--}}
                                    {{--                                        </svg>--}}
                                    {{--                                        Enroll--}}
                                    {{--                                    </a>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <x-layouts.nodata_placeholder title="No paused enrollments found"/>
                @endif


            </div>

            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="rejected" role="tabpanel" aria-labelledby="profile-tab">
               @if(count($rejectedEnrollments) > 0)
                    <div class="flex flex-row gap-4">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    Student name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Entry
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Course
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Year
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Enrollement Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rejectedEnrollments as $rejectedEnrollment)
                                <tr wire:key="{{ $rejectedEnrollment->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        {{--                                    <img class="w-10 h-10  rounded-full" src="https://gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50.jpg" alt="Jese image">--}}
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">{{ $rejectedEnrollment->student->first_name }}  {{ $rejectedEnrollment->student->last_name }}</div>
                                            <div class="font-normal text-gray-500">{{ 'Student ID: 10193888 '}}</div>
                                        </div>
                                    </th>

                                    <td class="px-6 py-4">
                                        {{ $rejectedEnrollment->entryType->name }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $rejectedEnrollment->course->name }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $rejectedEnrollment->enrollmentYear->year }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                            {{ $rejectedEnrollment->enrollmentStatus->status }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a   href="{{url('/view_student_profile/'.$rejectedEnrollment->id)}}"   type="button" class="text-yellow-700 border border-yellow-400 hover:bg-yellow-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-yellow200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                                            </svg>


                                            <span class="sr-only">Icon description</span>
                                        </a>

                                        <a href="{{url('')}}" type="button" class="text-green-700 border border-green-700 hover:bg-green-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-green200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                                <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </a>
                                        <button onclick="confirm('Are you sure you want to delete driver  profile of   ?') ? '' : event.stopImmediatePropagation() "
                                                wire:click="" type="button"
                                                class="text-red-700 border border-red-700 hover:bg-red-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-red200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="sr-only">Icon description</span>
                                        </button>
                                        {{--                                    <a href="{{ route('educational-requirements', $student) }}"  class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
                                        {{--                                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">--}}
                                        {{--                                            <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>--}}
                                        {{--                                        </svg>--}}
                                        {{--                                        Enroll--}}
                                        {{--                                    </a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
               @else
                    <x-layouts.nodata_placeholder title="No rejected enrollments found"/>
               @endif


            </div>

            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="approved" role="tabpanel" aria-labelledby="profile-tab">
                @if(count($approvedEnrollments) > 0))
                <div class="flex flex-row gap-4">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="px-6 py-3">
                                Student name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Entry
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Course
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Year
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Enrollement Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($approvedEnrollments as $approvedEnrollment)
                            <tr wire:key="{{ $approvedEnrollment->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    {{--                                    <img class="w-10 h-10  rounded-full" src="https://gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50.jpg" alt="Jese image">--}}
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">{{ $approvedEnrollment->student->first_name }}  {{ $approvedEnrollment->student->last_name }}</div>
                                        <div class="font-normal text-gray-500">{{ 'Student ID: 10193888 '}}</div>
                                    </div>
                                </th>

                                <td class="px-6 py-4">
                                    {{ $approvedEnrollment->entryType->name }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $approvedEnrollment->course->name }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $approvedEnrollment->enrollmentYear->year }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                        {{ $approvedEnrollment->enrollmentStatus->status }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a   href="{{url('/view_student_profile/'.$approvedEnrollment->id)}}"   type="button" class="text-yellow-700 border border-yellow-400 hover:bg-yellow-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-yellow200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                                        </svg>


                                        <span class="sr-only">Icon description</span>
                                    </a>

                                    <a href="{{url('')}}" type="button" class="text-green-700 border border-green-700 hover:bg-green-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-green200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                                        </svg>
                                        <span class="sr-only">Icon description</span>
                                    </a>
                                    <button onclick="confirm('Are you sure you want to delete driver  profile of   ?') ? '' : event.stopImmediatePropagation() "
                                            wire:click="" type="button"
                                            class="text-red-700 border border-red-700 hover:bg-red-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-red200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                        </svg>
                                        <span class="sr-only">Icon description</span>
                                    </button>
                                    {{--                                    <a href="{{ route('educational-requirements', $student) }}"  class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
                                    {{--                                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">--}}
                                    {{--                                            <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>--}}
                                    {{--                                        </svg>--}}
                                    {{--                                        Enroll--}}
                                    {{--                                    </a>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <x-layouts.nodata_placeholder title="No approved enrollments found"/>
                @endif


            </div>
    </div>
</div>
</div>



