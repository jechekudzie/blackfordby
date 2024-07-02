<div>
    <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
        <div>
            <label for="countries" class="block mb-2 ml-3 text-sm font-medium text-gray-900 dark:text-white">Filtering Options</label>
            <select wire:model.live="gender" id="countries" class="bg-gray-50 border ml-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{--                       <option selected>Filtering Options</option>--}}
                <option value="0">All Drivers</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mr-2 mt-2">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input wire:model.live.debounce.300ms="search" type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border
                   border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                    dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                    dark:focus:border-blue-500" placeholder="Search for users">
        </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="p-4">
                <div class="flex items-center">
                    <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                </div>
            </th>
            <th wire:click="setSortBy('studentFirstname')" scope="col" class="px-6 py-3">
                <button class="flex items-center ">
                    Name
                    @if($sortBy != 'studentFirstname')
                        <svg class="w-4 h-4 ml-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>

                    @elseif($sortDir === 'ASC')
                        <svg class="w-4 h-4 ml-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/>
                        </svg>
                    @else
                        <svg class="w-4 h-4 ml-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                        </svg>
                    @endif



                </button>

            </th>
            <th scope="col" class="px-6 py-3">
                Course Level
            </th>
            <th scope="col" class="px-6 py-3">
                Id Number
            </th>
            <th scope="col" class="px-6 py-3">
                Status
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr wire:key="{{ $student->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="w-10 h-10  rounded-full" src="https://gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50.jpg" alt="Jese image">
                    <div class="ps-3">
                        <div class="text-base font-semibold">{{ $student->first_name }}  {{ $student->last_name }}</div>
                        <div class="font-normal text-gray-500">{{ 'Student ID: 10193888 '}}</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    {{ 'NC'}}
                </td>
                <td class="px-6 py-4">
                   {{ '1st Year' }}

                </td>
                <td class="px-6 py-4">
                    @foreach($student->identifications as $identification)
                        <li>{{ $identification->identification_number }}</li>
                    @endforeach
                </td>

                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Pending
                    </div>
                </td>
                <td class="px-6 py-4">
                    <a   href="{{url('/view_student_profile/'.$student->id)}}"   type="button" class="text-yellow-700 border border-yellow-400 hover:bg-yellow-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-yellow200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                        <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                        </svg>


                        <span class="sr-only">Icon description</span>
                    </a>

                    <a href="{{url('/edit_driver/'.$student->id)}}" type="button" class="text-green-700 border border-green-700 hover:bg-green-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-green200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                        <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Icon description</span>
                    </a>
                    <button onclick="confirm('Are you sure you want to delete driver  profile of  {{ $student->first_name }} {{ $student->last_name }} ?') ? '' : event.stopImmediatePropagation() "
                            wire:click="delete({{ $student->id }})" type="button"
                            class="text-red-700 border border-red-700 hover:bg-red-200 hover:text-white
                           focus:ring-4 focus:outline-none focus:ring-red200-300 font-medium rounded-lg text-sm p-2
                           text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500
                           dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                        <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Icon description</span>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--    <div class="flex-row w-1/4 mt-2.5 ml-2.5 mb-2.5">--}}
{{--        <label for="perPage" class="w-32 ml-2 text-sm text-gray-900 font-semibold">Per Page</label>--}}
{{--        <select wire:model.live="perPage" name="perPage" class="w-1/4 bg-gray-50 mt-1 border border-gray-300 text-gray-900 text-sm rounded-lg--}}
{{--               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600--}}
{{--                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">--}}
{{--            <option value="5">5</option>--}}
{{--            <option value="10">10</option>--}}
{{--            <option value="15">15</option>--}}
{{--            <option value="20">20</option>--}}
{{--            <option value="30">50</option>--}}
{{--        </select>--}}
{{--    </div>--}}

    <div class="w-full  ml-2 mb-2">
        <div class="m-4">
            {{ $students->links('pagination::tailwind') }}
        </div>
    </div>
</div>
