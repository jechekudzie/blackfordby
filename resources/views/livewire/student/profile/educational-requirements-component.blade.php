    <div>
        <div class="flex flex-row gap-4 p-4">

            <div class="w-1/4">
                    <div class="flex flex-col gap-2">
                        <ol class="relative text-gray-500 border-s border-gray-200 dark:border-gray-700 dark:text-gray-400 ml-10">
                            <li class="mb-10 ms-6">
                        <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                            @if($currentStep > 1)
                                <svg class="w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            @elseif($currentStep == 1)
                                <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                            </svg>
                            @endif
                        </span>
                                <h3 class="font-medium leading-tight">Ordinary Level</h3>
                                <p class="text-sm">Step details here</p>
                            </li>
                            <li class="mb-10 ms-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 {{ $currentStep == 2 || $currentStep > 2 ? 'bg-green-200' : 'bg-gray-100' }}  rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                                     @if($currentStep > 2)
                                        <svg class="w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                                    @elseif($currentStep == 2)
                                        <svg class="w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                            </svg>
                                    @else

                                        <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                            </svg>

                                    @endif
                                </span>
                                            <h3 class="font-medium leading-tight">Advanced Level</h3>
                                            <p class="text-sm">Step details here</p>
                            </li>
                                        <li class="mb-10 ms-6">
                        <span class="absolute flex items-center justify-center w-8 h-8 {{ $currentStep == 3  ? 'bg-green-200' : 'bg-gray-100' }} rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                            <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                            </svg>
                        </span>
                                <h3 class="font-medium leading-tight">College</h3>
                                <p class="text-sm">Step details here</p>
                            </li>
                        </ol>
                    </div>
    {{--            </x-cards.simple-card>--}}
            </div>
            <div class="w-3/4">
                {{--            <x-cards.simple-card title="Student Details">--}}
                <div class="flex flex-row gap-4 p-1">
                    <x-form.drop-down
                        wire:model="selectedCourseId"
                        name="selectedCourseId"
                        :options="$courses"
                        :selected="$selectedCourseId"
                        placeholder="Select course"/>

                    <x-form.drop-down
                        wire:model="selectedEnrollmentYearId"
                        name="selectedEnrollmentYearId"
                        :options="$enrollmentYears"
                        :selected="$selectedEnrollmentYearId"
                        placeholder="Select year"/>
                    <x-form.drop-down
                        wire:model="selectedEntryTypeId"
                        name="selectedEntryTypeId"
                        :options="$entryTypes"
                        :selected="$selectedEntryTypeId"
                        placeholder="Select entry type" />
                    <x-form.drop-down
                        wire:model="selectedEnrollmentTypesId"
                        name="selectedEnrollmentTypesId"
                        :options="$enrollmentTypes"
                        :selected="$selectedEnrollmentTypesId"
                        placeholder="Select enrollment type" />
                    <x-form.drop-down
                        wire:model="selectedSponsorId"
                        name="selectedSponsorId"
                        :options="$sponsors"
                        :selected="$selectedSponsorId"
                        placeholder="Select Sponsor" />
                </div>

                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700 mt-8">
                @if($currentStep == 1)
                    <div class="flex flex-col gap-2 border-1   mx-auto border-gray-200 border rounded-lg dark:border-gray-700 p-4">
                        <div class="flex flex-row gap-4 p-1">
                            Ordinary level qualifications
                        </div>
                        <div class="flex flex-row gap-4 p-1">
                        <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" data-dropdown-placement="bottom" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Select School <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>

                                {{ !empty($selectedOrdinaryLevelSchoolName) ? $selectedOrdinaryLevelSchoolName : '' }}

                        </div>
                        <div class="flex flex-row gap-4 p-1">
                            <x-form.drop-down
                                wire:model="fromOlevelYearId"
                                name="fromOlevelYearId"
                                :options="$years"
                                :selected="$fromOlevelYearId"
                                placeholder="Select start year" />

                            <x-form.drop-down
                                wire:model="toOlevelYearId"
                                name="toOlevelYearId"
                                :options="$years"
                                :selected="$toOlevelYearId"
                                placeholder="Select end year" />

                            <!-- Dropdown menu -->
                            <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
                                <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                                    @livewire('student.profile.search-ordinary-component')
                                </ul>
                                <a href="#" class="flex gap-2 items-center p-3 text-sm font-medium text-blue-600 border-t border-blue-200 rounded-b-lg bg-blue-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-red-500 hover:underline">
                                    <svg class="w-6 h-6 text-blue-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                                    </svg>
                                    Add new school
                                </a>
                            </div>


                        </div>

                        <div class="flex flex-row gap-4 p-1">
                        <x-form.file-input
                            wire:model="ordinaryLevelCertificate"
                            name="ordinaryLevelCertificate"
                            id="ordinaryLevelCertificate"
                            placeholder="Ordinary level certificate" />

                            <x-form.file-input
                                wire:model="ordinaryLevelTranscript"
                                name="ordinaryLevelTranscript"
                                id="ordinaryLevelTranscript"
                                placeholder="Ordinary level transcript" />
                        </div>

                    </div>
                    <x-modal.default-modal id="ordinary-level-modal" title="Select School">
                        @slot('body')
                            @livewire('student.profile.search-ordinary-component')
                            <a href="#" class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-red-500 hover:underline">
                                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-6a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2Z"/>
                                </svg>
                                Add new school
                            </a>
                        @endslot
                    </x-modal.default-modal>
                @elseif($currentStep == 2)
                    <div class="flex flex-col gap-2 border-1   mx-auto border-gray-200 border rounded-lg dark:border-gray-700 p-4">
                        <div class="flex flex-row gap-4 p-1">
                            Advanced level qualifications
                        </div>
                        <div class="flex flex-row gap-4 p-1">
                            <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" data-dropdown-placement="bottom" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Select School <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>

                            {{ !empty($selectedAdvancedLevelSchoolName) ? $selectedAdvancedLevelSchoolName : '' }}

                        </div>
                        <div class="flex flex-row gap-4 p-1">
                            <x-form.drop-down
                                wire:model="fromAlevelYearId"
                                name="fromAlevelYearId"
                                :options="$years"
                                :selected="$fromAlevelYearId"
                                placeholder="Select start year" />

                            <x-form.drop-down
                                wire:model="toAlevelYearId"
                                name="toAlevelYearId"
                                :options="$years"
                                :selected="$toAlevelYearId"
                                placeholder="Select end year" />

                            <!-- Dropdown menu -->
                            <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
                                <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                                    @livewire('student.profile.search-advanced-component')
                                </ul>
                                <a href="#" class="flex gap-2 items-center p-3 text-sm font-medium text-blue-600 border-t border-blue-200 rounded-b-lg bg-blue-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-red-500 hover:underline">
                                    <svg class="w-6 h-6 text-blue-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                                    </svg>
                                    Add new school
                                </a>
                            </div>


                        </div>

                        <div class="flex flex-row gap-4 p-1">
                            <x-form.file-input
                                wire:model="advancedLevelCertificate"
                                name="advancedLevelCertificate"
                                id="advancedLevelCertificate"
                                placeholder="Advanced level certificate" />

                            <x-form.file-input
                                wire:model="advancedLevelTranscript"
                                name="advancedLevelTranscript"
                                id="advancedLevelTranscript"
                                placeholder="Advanced level transcript" />
                        </div>

                    </div>
                @elseif($currentStep == 3)
                    <div class="flex flex-col gap-2 border-1   mx-auto border-gray-200 border rounded-lg dark:border-gray-700 p-4">
                        <div class="flex flex-row gap-4 p-1">
                            College qualifications
                        </div>
{{--                        hhkhkjhjhj--}}
                        <div class="flex flex-row gap-4 p-1">
                            <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" data-dropdown-placement="bottom" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Select College <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>

                            {{ !empty($selectedACollegeName) ? $selectedACollegeName : '' }}

                        </div>
                        <div class="flex flex-row gap-4 p-1">
                            <x-form.drop-down
                                wire:model="fromCollegeYearId"
                                name="fromCollegeYearId"
                                :options="$years"
                                :selected="$fromCollegeYearId"
                                placeholder="Select start year" />

                            <x-form.drop-down
                                wire:model="toCollegeYearId"
                                name="toCollegeYearId"
                                :options="$years"
                                :selected="$toCollegeYearId"
                                placeholder="Select end year" />

                            <!-- Dropdown menu -->
                            <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
                                <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                                    @livewire('student.profile.search-college-component')
                                </ul>
                                <a href="#" class="flex gap-2 items-center p-3 text-sm font-medium text-blue-600 border-t border-blue-200 rounded-b-lg bg-blue-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-red-500 hover:underline">
                                    <svg class="w-6 h-6 text-blue-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                                    </svg>
                                    Add new school
                                </a>
                            </div>


                        </div>

                        <div class="flex flex-row gap-4 p-1">
                            <x-form.file-input
                                wire:model="collegeCertificate"
                                name="collegeCertificate"
                                id="collegeCertificate"
                                placeholder="College certificate" />

                            <x-form.file-input
                                wire:model="collegeTranscript"
                                name="collegeTranscript"
                                id="collegeTranscript"
                                placeholder="College transcript" />
                        </div>

                        @if (session('education-details-saved'))
                            <x-toast.general-toast session="{{ session('education-details-saved') }}"/>
                        @endif

                    </div>
                @endif

                {{--            </x-cards.simple-card>--}}
                <div class="flex justify-between mt-4">
                    @if ($currentStep > 1)
                        <button wire:click="previousStep" class="px-4 py-2 bg-gray-300 rounded">Previous</button>
                    @endif

                    @if ($currentStep < 3)
                        <button wire:click="nextStep" class="px-4 py-2 bg-blue-600 text-white rounded">Next</button>
                    @else
                        <button wire:click="nextStep" class="px-4 py-2 bg-green-600 text-white rounded">Submit</button>
                    @endif
                </div>
            </div>

        </div>
    </div>
