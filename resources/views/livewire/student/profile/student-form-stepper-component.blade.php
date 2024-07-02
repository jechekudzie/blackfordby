<!-- resources/views/livewire/student-form-stepper.blade.php -->
<div>
    <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
        <li class="flex items-center {{ $currentStep == 1 ? 'text-blue-600' : '' }}">
            <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 {{ $currentStep == 1 ? 'border-blue-600' : 'border-gray-500' }}">
                1
            </span>
            Student Details
            @if ($currentStep > 1)
                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                </svg>
            @endif
        </li>
        <li class="flex items-center {{ $currentStep == 2 ? 'text-blue-600' : '' }}">
            <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 {{ $currentStep == 1 ? 'border-blue-600' : 'border-gray-500' }}">
                2
            </span>
            Contacts
            @if ($currentStep > 2)
                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                </svg>
            @endif
        </li>
        <li class="flex items-center {{ $currentStep == 3 ? 'text-blue-600' : '' }}">
            <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 {{ $currentStep == 1 ? 'border-blue-600' : 'border-gray-500' }}">
                3
            </span>
            Guardian & Next Of Kin Details
            @if ($currentStep > 3)
                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                </svg>
            @endif
        </li>

        <li class="flex items-center {{ $currentStep == 8 ? 'text-blue-600' : '' }}">
            <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 {{ $currentStep == 1 ? 'border-blue-600' : 'border-gray-500' }}">
                8
            </span>
            Languages
            @if ($currentStep > 4)
                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                </svg>
            @endif
        </li>
        <!-- Repeat for other steps... -->
    </ol>

    @if ($currentStep == 1)
        @livewire('student.profile.student-details-component')
    @elseif ($currentStep == 2)
        @livewire('student.profile.contacts-component')
    @elseif ($currentStep == 3)
        @livewire('student.profile.guardians-component')
    @elseif ($currentStep == 4)
{{--        <livewire:student.profile.languages-component />--}}
        @livewire('student.profile.languages-component')
    @endif

    <div class="flex justify-between mt-4">
        @if ($currentStep > 1)
            <button wire:click="previousStep" class="px-4 py-2 bg-gray-300 rounded">Previous</button>
        @endif

        @if ($currentStep < 4)
            <button wire:click="nextStep" class="px-4 py-2 bg-blue-600 text-white rounded">Next</button>
        @else
            <button wire:click="nextStep" class="px-4 py-2 bg-green-600 text-white rounded">Submit</button>
        @endif
    </div>


</div>
