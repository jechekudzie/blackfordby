<div>
    <div class="p-3">
        <label for="input-group-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input wire:model.live.debounce.300ms="search" type="text" id="input-group-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300
                                        rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600
                                        dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                         dark:focus:border-blue-500" placeholder="Search school">
        </div>
    </div>
    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
        @foreach ($schools as $school)
            <li wire:click.prevent="selectSchool({{  $school->id }}, '{{ $school->institution_name }}')">
                <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                    <label for="checkbox-item-11" class="w-full py-2 ms-2 text-sm font-medium
                                                text-gray-900 rounded dark:text-gray-300">
                        {{ $school->institution_name }}
                    </label>
                </div>
            </li>
        @endforeach
    </ul>
</div>
