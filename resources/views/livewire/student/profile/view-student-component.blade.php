<div>
        <div class="flex flex-row gap-4">
            <div class="w-1/4">
                @if(!$isEditStudentProfile)
                    <x-cards.student_card  avatar="https://i.pravatar.cc/300"
                                           name="{{ $student->first_name . ' ' . $student->last_name }}"
                                           course="Animal Husbandry"
                                           registration_number="38293973287"
                                           phonenumber="{{ $student->contacts[0]->phonenumber }}"
                                           email="{{ $student->contacts[0]->email }}" >
                        @slot('options')
                            <div class="flex justify-end px-4 pt-4">
                                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                    <span class="sr-only">Open dropdown</span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2" aria-labelledby="dropdownButton">
                                        <li>
                                            <button wire:click="setProfileEditMode()" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</button>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endslot
                        <div class="content-start mt-2 ">
                            <x-cards.card-primary-title title="Gender" subtitle="{{ $student->gender->name }}"/>
                            <x-cards.card-primary-title title="Date of birth" subtitle="{{ $student->date_of_birth }}"/>
                            <x-cards.card-primary-title title="Enrollment Date" subtitle="{{ $student->enrollment_date }}" class="mt-2"/>
                            <x-cards.card-primary-title title="Status" subtitle="Pending" class="mt-2"/>
                            <x-cards.card-primary-title title="Language" subtitle="{{ $student->languages[0]->language }}" class="mt-2"/>

                            <x-form.plain-button title="Edit" data-modal-target="studentProfileId" data-modal-toggle="studentProfileId" />
{{--                            <button data-modal-target="studentProfileId" data-modal-toggle="studentProfileId" class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">--}}
{{--                                Small modal--}}
{{--                            </button>--}}

                        </div>
                    </x-cards.student_card>
                @elseif($isEditStudentProfile)
                    <x-cards.simple-card>
                        fdsjlfsdjflksjl
                    </x-cards.simple-card>
                @endif
            </div>
            <div class="w-full">
                <x-cards.simple-card title=" ">
                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Student Details</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Guardians and Next of Kins</button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-styled-tab-content">
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="flex flex-row gap-4">
                                <div class="w-1/2">
                                    <x-cards.simple-card title="Identification Details">
                                        @slot('leading')
                                            <x-form.btn-edit-dialog id="edit-identification-id"/>
                                        @endslot
                                        <div class="flex flex-col gap-2">
                                            <x-cards.card-primary-title
                                                title="{{ $student->identifications[0]->identificationType->name }}"
                                                subtitle=" {{ $student->identifications[0]->identification_number }} "/>
                                            <x-cards.card-primary-title title="Issued Date" subtitle="{{ $student->identifications[0]->issued_date }}"/>
                                            <x-cards.card-primary-title title="Expiry Date" subtitle="{{ $student->identifications[0]->expiry_date }}"/>
{{--                                        <img class="h-auto size-1.5 max-w-lg rounded-lg" src="https://i.pravatar.cc/30" alt="image description">--}}
                                           <div class="flex flex-row gap-2">
                                               <x-form.plain-button  title="View document" />
                                               <x-form.primary-button>Download</x-form.primary-button>
                                           </div>
                                        </div>
                                    </x-cards.simple-card>
                                </div>
                                <div class="w-1/2">
                                    <x-cards.simple-card title="Student Address">
                                        @slot('leading')
                                            <x-form.btn-edit-dialog id="edit-address-id"/>
                                        @endslot
                                        <div class="flex flex-col gap-2">
                                            <x-cards.card-primary-title title="Country" subtitle="{{ $student->addresses[0]->country->name }}"/>
                                            <x-cards.card-primary-title title="Province" subtitle=" {{ $student->addresses[0]->province->name }} "/>
                                            <x-cards.card-primary-title title="City" subtitle=" {{ $student->addresses[0]->city->name }}"/>
                                            <x-cards.card-primary-title title="Physical Address" subtitle="{{ $student->addresses[0]->address_line1 }}"/>

                                        </div>
                                    </x-cards.simple-card>
                                </div>
                            </div>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <div class="flex flex-row gap-4">
                                <div class="w-1/2">
                                    <x-cards.simple-card title="Guardian Details">
                                        @slot('leading')
                                            <x-form.btn-edit-dialog id="edit-guardian-id"/>
                                        @endslot
                                        <div class="flex flex-col gap-2">
                                            <x-cards.card-primary-title title="Name" subtitle="{{ $student->guardian->first_name . ' ' . $student->guardian->last_name }}"/>
                                            <x-cards.card-primary-title title="Relationship" subtitle="{{ $student->guardian->relationship }}"/>
                                            <x-cards.card-primary-title title="Phonenumber" subtitle="{{ $student->guardian->phonenumber }}"/>
                                            <x-cards.card-primary-title title="Email" subtitle="{{ $student->guardian->email ?? 'No email' }}"/>
                                        </div>
                                    </x-cards.simple-card>
                                </div>
                                <div class="w-1/2">
                                    <x-cards.simple-card title="Emergency Contact">
                                        @slot('leading')
                                            <x-form.btn-edit-dialog id="edit-emergency-contact-id"/>
                                        @endslot
                                        <div class="flex flex-col gap-2">
                                            <x-cards.card-primary-title title="Name" subtitle="{{ $student->emergencyContact->name  }}"/>
                                            <x-cards.card-primary-title title="Relationship" subtitle="{{ $student->emergencyContact->relationship }}"/>
                                            <x-cards.card-primary-title title="Phonenumber" subtitle="{{ $student->emergencyContact->phone_number }}"/>
                                            <x-cards.card-primary-title title="Email" subtitle="{{ $student->emergencyContact->email }}"/>

                                        </div>
                                    </x-cards.simple-card>
                                </div>
                            </div>
                            <div class="flex flex-row gap-4 mt-3">
                                <div class="w-1/2">
                                    <x-cards.simple-card title="Next of kin">
                                        @slot('leading')
                                            <x-form.btn-edit-dialog id="edit-next-of-kin-id"/>
                                        @endslot
                                        <div class="flex flex-col gap-2">
                                            <x-cards.card-primary-title title="Name" subtitle="{{ $student->nextOfKin->first_name . ' ' . $student->nextOfKin->last_name }}"/>
                                            <x-cards.card-primary-title title="Relationship" subtitle="{{ $student->nextOfKin->relationship }}"/>
                                            <x-cards.card-primary-title title="Phonenumber" subtitle="{{ $student->nextOfKin->phonenumber }}"/>
                                            <x-cards.card-primary-title title="Email" subtitle="{{ $student->nextOfKin->email }}"/>
                                        </div>
                                    </x-cards.simple-card>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-cards.simple-card>
            </div>
        </div>

    <!--Edit student profile modal-->
    <x-modal.large-modal title="Edit Student Profile" id="studentProfileId">
        @slot('body')
            <form wire:submit.prevent="submit" class="mt-3">
                <div class="flex flex-row gap-4">
                    <div class="w-1/2">
                        <div class="flex flex-col">
                            <x-form.label name="Firstname" />
                            <x-form.floating-input
                                value=" {{ $student->first_name }}"
                                name="identificationNumber"
                                id="identificationNumber"
                                placeholder="Firstname" />

                            <x-form.label name="Lastname" />
                            <x-form.floating-input
                                name="identificationNumber"
                                id="identificationNumber"
                                placeholder="Lastname" />

                            <x-form.label name="Phonenumber" />
                            <x-form.floating-input
                                name="identificationNumber"
                                id="identificationNumber"
                                placeholder="Phonenumber" />

                            <x-form.label name="Email" />
                            <x-form.floating-input
                                name="identificationNumber"
                                id="identificationNumber"
                                placeholder="Email" />
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="flex flex-col gap-4 mt-2">
                            <x-form.drop-down
                                name="gender_id"
                                :options="[]"
                                :selected="1"
                                placeholder="Select Gender" />


                            <x-form.flow-datepicker
                                value="" maxDate="12/31/2024"
                                name="enrollment_date" id="enrollment_date"
                                placeholder="Date Of Birth"/>

                        <x-form.flow-datepicker
                            value="" maxDate="12/31/2024"
                            name="enrollment_date" id="enrollment_date"
                                placeholder="Enrollment Date"/>
                        </div>


                    </div>
                </div>
            </form>
        @endslot
        @slot('button_footer')
            <x-form.primary-button>Save</x-form.primary-button>
        @endslot
    </x-modal.large-modal>

    <!-- Edit Identification Dialog -->
    <x-modal.default-modal title="Edit Student Identification" id="edit-identification-id">
        @slot('body')
            <form wire:submit.prevent="submit" class="mt-3">
                <div class="flex flex-row gap-2">
                    <div class="w-full">
                        <div class="flex flex-col">
                            <x-form.label name="National Id" />
                            <x-form.floating-input
                                name="identificationNumber"
                                id="identificationNumber"
                                placeholder="National Id" />

                            <x-form.input-padding>
                                <x-form.flow-datepicker
                                    value="" maxDate="12/31/2024"
                                    name="enrollment_date" id="enrollment_date"
                                    placeholder="Issued Date"/>
                            </x-form.input-padding>

                            <x-form.input-padding>
                                <x-form.flow-datepicker
                                    value="" maxDate="12/31/2024"
                                    name="enrollment_date" id="enrollment_date"
                                    placeholder="Expiry Date"/>
                            </x-form.input-padding>

                            <x-form.label name="Document file" />
                            <x-form.file-input
                                name="identificationDocument"
                                id="identificationDocument"
                                placeholder="Document file" />


                        </div>
                    </div>
                </div>
            </form>
        @endslot
        @slot('button_footer')
            <x-form.primary-button>Save</x-form.primary-button>
        @endslot
    </x-modal.default-modal>

    <!-- Edit Address Dialog -->
    <x-modal.default-modal title="Edit Student Address" id="edit-address-id">
        @slot('body')
            <form wire:submit.prevent="submit" class="mt-3">
                <div class="flex flex-row gap-2">
                    <div class="w-full">
                        <div class="flex flex-col">
                            <x-form.drop-down
                                name="gender_id"
                                :options="[]"
                                :selected="1"
                                placeholder="Country" />

                            <x-form.input-padding>
                                <x-form.drop-down
                                    name="gender_id"
                                    :options="[]"
                                    :selected="1"
                                    placeholder="Province" />
                            </x-form.input-padding>


                            <x-form.input-padding>
                                <x-form.drop-down
                                    name="gender_id"
                                    :options="[]"
                                    :selected="1"
                                    placeholder="City" />
                            </x-form.input-padding>


                            <x-form.input-padding>
                                <x-form.floating-input
                               name="identificationNumber"
                               id="identificationNumber"
                               placeholder="Address" />
                            </x-form.input-padding>

                        </div>
                    </div>
                </div>
            </form>
        @endslot
        @slot('button_footer')
            <x-form.primary-button>Save</x-form.primary-button>
        @endslot
    </x-modal.default-modal>

    <!--Edit Guardian Details -->
    <x-modal.default-modal title="Edit Guardian Details" id="edit-guardian-id">
        @slot('body')
            <form wire:submit.prevent="submit" class="mt-3">
                <div class="flex flex-row gap-2">
                    <div class="w-full">
                        <div class="flex flex-col">
                                <x-form.floating-input
                                    name="identificationNumber"
                                    id="identificationNumber"
                                    placeholder="Fullname" />

                            <x-form.input-padding>
                                <x-form.floating-input
                                    name="identificationNumber"
                                    id="identificationNumber"
                                    placeholder="Relationship" />
                            </x-form.input-padding>
                            <x-form.input-padding>
                                <x-form.floating-input
                                    name="identificationNumber"
                                    id="identificationNumber"
                                    placeholder="Phonenumber" />
                            </x-form.input-padding>
                            <x-form.input-padding>
                                <x-form.floating-input
                                    name="identificationNumber"
                                    id="identificationNumber"
                                    placeholder="Email" />
                            </x-form.input-padding>

                        </div>
                    </div>
                </div>
            </form>
        @endslot
        @slot('button_footer')
            <x-form.primary-button>Save</x-form.primary-button>
        @endslot
    </x-modal.default-modal>

    <!-- Edit Emegency Contact Details -->
    <x-modal.default-modal title="Edit Emergency Contact" id="edit-emergency-contact-id">
        @slot('body')
            <form wire:submit.prevent="submit" class="mt-3">
                <div class="flex flex-row gap-2">
                    <div class="w-full">
                        <div class="flex flex-col">
                            <x-form.floating-input
                                name="identificationNumber"
                                id="identificationNumber"
                                placeholder="Fullname" />

                            <x-form.input-padding>
                                <x-form.floating-input
                                    name="identificationNumber"
                                    id="identificationNumber"
                                    placeholder="Relationship" />
                            </x-form.input-padding>
                            <x-form.input-padding>
                                <x-form.floating-input
                                    name="identificationNumber"
                                    id="identificationNumber"
                                    placeholder="Phonenumber" />
                            </x-form.input-padding>
                            <x-form.input-padding>
                                <x-form.floating-input
                                    name="identificationNumber"
                                    id="identificationNumber"
                                    placeholder="Email" />
                            </x-form.input-padding>

                        </div>
                    </div>
                </div>
            </form>
        @endslot
        @slot('button_footer')
            <x-form.primary-button>Save</x-form.primary-button>
        @endslot
    </x-modal.default-modal>

    <!-- Edit Emegency Contact Details -->
    <x-modal.default-modal title="Edit Next of kin details" id="edit-next-of-kin-id">
        @slot('body')
            <form wire:submit.prevent="submit" class="mt-3">
                <div class="flex flex-row gap-2">
                    <div class="w-full">
                        <div class="flex flex-col">
                            <x-form.floating-input
                                name="identificationNumber"
                                id="identificationNumber"
                                placeholder="Fullname" />

                            <x-form.input-padding>
                                <x-form.floating-input
                                    name="identificationNumber"
                                    id="identificationNumber"
                                    placeholder="Relationship" />
                            </x-form.input-padding>
                            <x-form.input-padding>
                                <x-form.floating-input
                                    name="identificationNumber"
                                    id="identificationNumber"
                                    placeholder="Phonenumber" />
                            </x-form.input-padding>
                            <x-form.input-padding>
                                <x-form.floating-input
                                    name="identificationNumber"
                                    id="identificationNumber"
                                    placeholder="Email" />
                            </x-form.input-padding>

                        </div>
                    </div>
                </div>
            </form>
        @endslot
        @slot('button_footer')
            <x-form.primary-button>Save</x-form.primary-button>
        @endslot
    </x-modal.default-modal>


</div>




