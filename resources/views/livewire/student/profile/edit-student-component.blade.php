<div>
    <div class="flex flex-row gap-4">
        <div class="w-1/4">
            <x-cards.simple-card title="Student Details">
                <div class="flex flex-col gap-2">
                    <form wire:submit.prevent="submit" class="mt-3">
                    <x-form.input-padding>
                        <x-form.floating-input value=""  wire:model="studentFirstname"
                                               name="studentFirstname" id="studentFirstname"
                                               placeholder="First Name" />
                    </x-form.input-padding>

                    <x-form.input-padding>
                        <x-form.floating-input  value=""
                                                wire:model="studentLastname"
                                                name="studentLastname"
                                                id="studentLastname"
                                                placeholder="Last Name" />
                    </x-form.input-padding>

                    <x-form.input-padding>
                        <x-form.flow-datepicker
                            value="{{ $formatedDob }}"
                            name="date_of_birth" id="dateOfBirth"
                            placeholder="Date of birth"/>
                    </x-form.input-padding>

                    <x-form.input-padding>

                        <x-form.flow-datepicker
                            value="{{ $formatedEnrollmentDate }}"
                                                name="enrollmentDate" id="enrollmentDate"
                                                placeholder="Enrollment Date"/>
                    </x-form.input-padding>

{{--                    <x-form.input-padding>--}}
{{--                        <x-form.floating-input wire:model="status" name="status" id="status" placeholder="Status" />--}}
{{--                    </x-form.input-padding>--}}

                    <x-form.input-padding>
                        <x-form.drop-down
                            wire:model="selectedGenderId"
                            name="selectedGenderId"
                            :options="$genders"
                            :selected="$selectedGenderId"
                            placeholder="Select Gender" />
                    </x-form.input-padding>

                        <div class="mt-2.5"></div>
                        <br>
                        <div class="mt-2.5"></div>
                        <br>
                        <p></p><br>

                        <x-form.primary-button type="submit" wire:click.prevent="updateStudentDetails" >Save</x-form.primary-button>
                    </form>
                </div>
            </x-cards.simple-card>
            @if (session('studentDataUpdated'))
                <x-toast.general-toast session="{{ session('studentDataUpdated') }}"/>
            @endif
        </div>

        <div class="w-1/4">
            <x-cards.simple-card title="Identification Details" >
                <div class="flex flex-col gap-2">

                        <div class="flex flex-col gap-2">
                            <form wire:submit.prevent="submit" class="mt-3">
                            <x-form.input-padding>
                                <x-form.drop-down
                                    wire:model.change="selectedIdentificationTypeId"
                                    name="selectedIdentificationTypeId"
                                    :options="$identificationTypes"
                                    :selected="$selectedIdentificationType"
                                    placeholder="{{ $identificationType }}" />
                            </x-form.input-padding>

                            <x-form.input-padding>
                                <x-form.floating-input wire:model="identificationNumber"
                                                       name="identificationNumber"
                                                       id="identificationNumber"
                                                       placeholder="Identification Number" />
                            </x-form.input-padding>
                            <x-form.input-padding>
                                <x-form.flow-datepicker value="{{ $formattedIssuedDate }}"
                                                        name="issuedDate"
                                                        id="issuedDate"
                                                        placeholder="Issued Date"/>
                            </x-form.input-padding>

                            <x-form.input-padding>
                                <x-form.flow-datepicker value="{{ $formattedExpiryDate }}"
                                                        name="expiryDate"
                                                        id="expiryDate"
                                                        placeholder="Expiry Date"/>
                            </x-form.input-padding>
                            <x-form.file-input
                                wire:model="identificationDocument"
                                name="identificationDocument"
                                id="identificationDocument"
                                placeholder="Id Document" />
                            </form>

                            <div class="mt-2.5"></div>
                            <br>
                            <x-form.primary-button type="submit" wire:click.prevent="updateIdentificationDetails" >Save</x-form.primary-button>
                        </div>
                </div>
            </x-cards.simple-card>
            @if (session('identificationDataUpdated'))
                <x-toast.general-toast session="{{ session('identificationDataUpdated') }}"/>
            @endif

        </div>

        <div class="w-1/4">
            <x-cards.simple-card title="Student Contacts">
                <div class="flex flex-col gap-2">
                    <form wire:submit.prevent="submit" class="mt-3">
                    <x-form.input-padding>
                        <x-form.floating-input wire:model="studentPhonenumber"
                                               name="studentPhonenumber"
                                               id="studentPhonenumber"
                                               placeholder="Phonenumber" />
                    </x-form.input-padding>
                    <x-form.input-padding>
                        <x-form.floating-input wire:model="studentEmail"
                                               name="studentEmail"
                                               id="studentEmail"
                                               placeholder="studentEmail" />

                        <p class="text-gray-500 dark:text-gray-400"></p>
                        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700 mt-8">
                        <p class="text-gray-500 dark:text-gray-400"></p>

                        <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">


                        <h5 class="text-xl font-medium text-gray-900 dark:text-white mt-2">Emergency Contacts</h5>
                    </x-form.input-padding>
                    <x-form.input-padding>
                    <x-form.floating-input wire:model="emergencyFullname"
                                           name="emergencyFullname"
                                           id="emergencyFullname"
                                           placeholder="emergencyFullname" />
                    </x-form.input-padding>
                    <x-form.input-padding>
                        <x-form.floating-input wire:model="emergencyRelationship"
                                               name="emergencyRelationship"
                                               id="emergencyRelationship"
                                               placeholder="emergencyRelationship" />
                    </x-form.input-padding>

                    <x-form.input-padding>
                        <x-form.floating-input wire:model="emergencyPhonenumber"
                                               name="emergencyPhonenumber"
                                               id="emergencyPhonenumber"
                                               placeholder="emergencyPhonenumber" />
                    </x-form.input-padding>
                    <x-form.input-padding>
                        <x-form.floating-input wire:model="emergencyEmail"
                                               name="emergencyEmail"
                                               id="emergencyEmail"
                                               placeholder="emergencyEmail" />
                    </x-form.input-padding>
                        <br>
                        <x-form.primary-button type="submit" wire:click.prevent="updateStudentContactDetails" >Save</x-form.primary-button>
                    </form>
                </div>
            </x-cards.simple-card>
            @if (session('contactsDataUpdated'))
                <x-toast.general-toast session="{{ session('contactsDataUpdated') }}"/>
            @endif
        </div>

        <div class="w-1/4">
            <x-cards.simple-card title="Student Address">
                <div class="flex flex-col gap-2">
                    <form wire:submit.prevent="submit" class="mt-3">
                        <x-form.input-padding>
                            <x-form.drop-down
                                wire:model.change="selectedAddressId"
                                name="selectedAddressId"
                                :options="$addresses"
                                :selected="$selectedAddressId"
                                placeholder="Select address type" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.drop-down
                                wire:model.change="selectedCountryId"
                                name="selectedCountryId"
                                :options="$countries"
                                :selected="$selectedCountryId"
                                placeholder="Select country" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.drop-down
                                wire:model.change="selectedProvinceId"
                                name="selectedProvinceId"
                                :options="$provinces"
                                :selected="$selectedProvinceId"
                                placeholder="Select province" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.drop-down
                                wire:model.change="selectedCityId"
                                name="selectedCityId"
                                :options="$cities"
                                :selected="$selectedCityId"
                                placeholder="Select City" />
                        </x-form.input-padding>
                        <x-form.input-padding>
                        <x-form.floating-input wire:model="addressLine1"
                                               name="addressLine1"
                                               id="addressLine1"
                                               placeholder="Primary address" />
                        </x-form.input-padding>
                        <x-form.input-padding>
                        <x-form.floating-input wire:model="addressLine2"
                                               name="addressLine2"
                                               id="addressLine2"
                                               placeholder="Secondary address" />
                        </x-form.input-padding>

                        <x-form.primary-button type="submit" wire:click.prevent="updateAddressDetails" >Save</x-form.primary-button>
                    </form>
                </div>
            </x-cards.simple-card>
            @if (session('addressDataUpdated'))
                <x-toast.general-toast session="{{ session('addressDataUpdated') }}"/>
            @endif
        </div>
    </div>
    <div class="flex flex-row gap-4 mt-8">
        <div class="w-1/2">
            <x-cards.simple-card title="Guardian">
                <div class="flex flex-col gap-2">
                    <form wire:submit.prevent="submit" class="mt-3">
                        <x-form.input-padding>
                        <x-form.floating-input wire:model="guardianFirstname"
                                               name="guardianFirstname"
                                               id="guardianFirstname"
                                               placeholder="First name" />
                        </x-form.input-padding>
                        <x-form.input-padding>
                        <x-form.floating-input wire:model="guardianLastname"
                                               name="guardianLastname"
                                               id="guardianLastname"
                                               placeholder="Last name" />
                        </x-form.input-padding>


                        <x-form.input-padding>
                        <x-form.floating-input wire:model="guardianRelationship"
                                               name="guardianRelationship"
                                               id="guardianRelationship"
                                               placeholder="Relationship" />
                        </x-form.input-padding>
                        <x-form.input-padding>
                        <x-form.floating-input wire:model="guardianContactDetails"
                                               name="guardianContactDetails"
                                               id="guardianContactDetails"
                                               placeholder="Phone number" />
                        </x-form.input-padding>
                        <x-form.primary-button type="submit" wire:click.prevent="updateGuardianDetails">Save</x-form.primary-button>
                    </form>
                </div>
            </x-cards.simple-card>
            @if (session('guardianDataUpdated'))
                <x-toast.general-toast session="{{ session('guardianDataUpdated') }}"/>
            @endif
        </div>
        <div class="w-1/2">
            <x-cards.simple-card title="Next of kin">
                <div class="flex flex-col gap-2">
                    <form wire:submit.prevent="submit" class="mt-3">
                        <x-form.input-padding>
                            <x-form.floating-input wire:model="nextOFKinFirstname"
                                                   name="nextOFKinFirstname"
                                                   id="nextOFKinFirstname"
                                                   placeholder="First name" />
                        </x-form.input-padding>
                        <x-form.input-padding>
                            <x-form.floating-input wire:model="nextOFKinLastname"
                                                   name="nextOFKinLastname"
                                                   id="nextOFKinLastname"
                                                   placeholder="Last name" />
                        </x-form.input-padding>


                        <x-form.input-padding>
                            <x-form.floating-input wire:model="nextOFKinRelationship"
                                                   name="nextOFKinRelationship"
                                                   id="nextOFKinRelationship"
                                                   placeholder="Relationship" />
                        </x-form.input-padding>
                        <x-form.input-padding>
                            <x-form.floating-input wire:model="nextOFKinContactDetails"
                                                   name="nextOFKinContactDetails"
                                                   id="nextOFKinContactDetails"
                                                   placeholder="Phone number" />
                        </x-form.input-padding>
                        <x-form.primary-button type="submit" wire:click.prevent="updateNextOfKinDetails" >Save</x-form.primary-button>
                    </form>
                </div>
            </x-cards.simple-card>
            @if (session('nextOfKinDataUpdated'))
                <x-toast.general-toast session="{{ session('nextOfKinDataUpdated') }}"/>
            @endif
        </div>
    </div>
    <script>
        // $dateOfBirth
        // $enrollmentDate
        document.addEventListener('livewire:initialized', () => {
            console.log('JS comp initialized');
            let component = @this;
            const dateOfBirth = document.getElementById('dateOfBirth');
            const enrollmentDate = document.getElementById('enrollmentDate');
            const issuedDate = document.getElementById('issuedDate');
            const expiryDate = document.getElementById('expiryDate');

            dateOfBirth.addEventListener('blur', (event) => {
                console.log(event.target.value);
                component.set('dateOfBirth', event.target.value);
            });

            enrollmentDate.addEventListener('blur', (event) => {
                console.log(event.target.value);
                component.set('enrollmentDate', event.target.value);
            });


            issuedDate.addEventListener('blur', (event) => {
                console.log(event.target.value);
                component.set('issuedDate', event.target.value);
            });

            expiryDate.addEventListener('blur', (event) => {
                console.log(event.target.value);
                component.set('expiryDate', event.target.value);
            });

        });
    </script>
</div>
