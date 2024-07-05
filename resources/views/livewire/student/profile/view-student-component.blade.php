<div>
        <div class="flex flex-row gap-4">
            <div class="w-1/4">

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
                                            <a href="{{url('/edit_student_profile/'.$student->id)}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
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
                            <x-cards.card-primary-title title="Date of birth" subtitle="{{ $this->getHumanDate($student->date_of_birth)  }}"/>
                            <x-cards.card-primary-title title="Enrollment Date" subtitle="{{ $this->getHumanDate($student->enrollment_date)  }}" class="mt-2"/>
                            <x-cards.card-primary-title title="Status" subtitle="Pending" class="mt-2"/>
                            <x-cards.card-primary-title title="Language" subtitle="{{ $student->languages[0]->language }}" class="mt-2"/>
                        </div>
                    </x-cards.student_card>
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
                                        <div class="flex flex-col gap-2">
                                            <x-cards.card-primary-title
                                                title="{{ $student->identifications[0]->identificationType->name }}"
                                                subtitle=" {{ $student->identifications[0]->identification_number }} "/>
                                            <x-cards.card-primary-title title="Issued Date" subtitle="{{ $this->getHumanDate($student->identifications[0]->issued_date)  }}"/>
                                            <x-cards.card-primary-title title="Expiry Date" subtitle="{{ $this->getHumanDate($student->identifications[0]->expiry_date)  }}"/>
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

    <script>
        document.addEventListener('livewire:initialized', () => {
            console.log('JS comp initialized');
            let component = @this;
            const dateOfBirth = document.getElementById('dateOfBirth');
            const enrollmentDate = document.getElementById('enrollmentDate');
            // const issuedDate = document.getElementById('issuedDate');
            // const expiryDate = document.getElementById('expiryDate');

            dateOfBirth.addEventListener('changeDate', (event) => {
                console.log(event.detail.date);
                component.dispatch('editDate', {data:event.detail.date })

            });

            enrollmentDate.addEventListener('blur', (event) => {
                console.log(event.target.value);
                component.set('enrollmentDate', event.target.value);
            });


            // issuedDate.addEventListener('blur', (event) => {
            //     console.log(event.target.value);
            //     component.set('issuedDate', event.target.value);
            // });
            //
            // expiryDate.addEventListener('blur', (event) => {
            //     console.log(event.target.value);
            //     component.set('expiryDate', event.target.value);
            // });

        });
    </script>

</div>




