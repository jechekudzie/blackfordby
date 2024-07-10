<div>
    <form wire:submit.prevent="submit" class="mt-3">
        <div class="flex flex-row gap-4">
            <div class="w-1/2">
                <x-cards.simple-card title="Student Details">
                    <div class="flex flex-col gap-2">
                                    <x-form.input-padding>
                                        <x-form.drop-down
                                            wire:model="selectedTitleId"
                                            name="selectedTitleId"
                                            :options="$titles"
                                            :selected="$selectedTitleId"
                                            placeholder="Select Title" />
                                    </x-form.input-padding>

                                    <x-form.input-padding>
                                        <x-form.drop-down
                                            wire:model="selectedMaritalStatus"
                                            name="selectedMaritalStatus"
                                            :options="$maritalStatus"
                                            :selected="$selectedMaritalStatus"
                                            placeholder="Select marital status" />
                                    </x-form.input-padding>

                                    <x-form.input-padding>
                                        <x-form.floating-input value=""  wire:model="first_name"  name="first_name" id="first_name" placeholder="First Name" />
                                    </x-form.input-padding>

                                    <x-form.input-padding>
                                        <x-form.floating-input  value="" wire:model="last_name"  name="last_name" id="last_name" placeholder="Last Name" />
                                    </x-form.input-padding>

                                    <x-form.input-padding>
                                        <x-form.flow-datepicker maxDate="12/31/2024" wire:model="date_of_birth"
                                                                name="date_of_birth" id="date_of_birth"
                                                                placeholder="Date of birth"/>
                                    </x-form.input-padding>

                                    <x-form.input-padding>

                                    <x-form.flow-datepicker value="" maxDate="12/31/2024"  wire:model="enrollment_date"
                                                                name="enrollment_date" id="enrollment_date"
                                                                placeholder="Enrollment Date"/>
                                    </x-form.input-padding>

                                    <x-form.input-padding>
                                        <x-form.floating-input wire:model="status" name="status" id="status" placeholder="Status" />
                                    </x-form.input-padding>

                                <x-form.input-padding>
                                    <x-form.drop-down
                                    wire:model="gender_id"
                                    name="gender_id"
                                    :options="$genders"
                                    :selected="$selectedGender"
                                    placeholder="Select Gender" />
                                </x-form.input-padding>
                    </div>
                </x-cards.simple-card>
            </div>
            <div class="w-1/2">
                <x-cards.simple-card title="Identification Details">
                    <div class="flex flex-col gap-2">
                        <x-form.input-padding>
                            <x-form.drop-down
                                wire:model="identificationTypeId"
                                name="identificationTypeId"
                                :options="$identificationTypes"
                                :selected="$selectedIdentificationType"
                                placeholder="Select Identification Type" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.floating-input wire:model="identificationNumber"
                                                   name="identificationNumber"
                                                   id="identificationNumber"
                                                   placeholder="Identification Number" />
                        </x-form.input-padding>
                        <x-form.input-padding>
                            <x-form.flow-datepicker wire:model="issuedDate"
                                                    name="issuedDate"
                                                    id="issuedDate"
                                                    placeholder="Issued Date"/>
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.flow-datepicker wire:model="expiryDate"
                                                    name="expiryDate"
                                                    id="expiryDate"
                                                    placeholder="Expiry Date"/>
                        </x-form.input-padding>

                        <x-form.file-input
                            wire:model="identificationDocument"
                            name="identificationDocument"
                            id="identificationDocument"
                            placeholder="Id Document" />

                        <x-form.file-input
                            wire:model="birthCertificate"
                           name="birthCertificate"
                            id="birthCertificate"
                            placeholder="Birth certificate" />

                        <x-form.file-input
                            wire:model="marriageCertificate"
                            name="marriageCertificate"
                            id="marriageCertificate"
                            placeholder="Marriage certificate" />
                        <br>

                    </div>
                </x-cards.simple-card>
            </div>
        </div>



    </form>

{{--    <form wire:submit.prevent="submit">--}}
{{--            <x-form.input-padding>--}}
{{--                <x-form.floating-input value=""  wire:model="first_name"  name="first_name" id="first_name" placeholder="First Name" />--}}
{{--            </x-form.input-padding>--}}

{{--            <x-form.input-padding>--}}
{{--                <x-form.floating-input  value="" wire:model="last_name"  name="last_name" id="last_name" placeholder="Last Name" />--}}
{{--            </x-form.input-padding>--}}

{{--            <x-form.input-padding>--}}
{{--                <x-form.flow-datepicker maxDate="12/31/2024" wire:model="date_of_birth"--}}
{{--                                        name="date_of_birth" id="date_of_birth"--}}
{{--                                        placeholder="Date of birth"/>--}}
{{--            </x-form.input-padding>--}}

{{--            <x-form.input-padding>--}}

{{--            <x-form.flow-datepicker value="" maxDate="12/31/2024"  wire:model="enrollment_date"--}}
{{--                                        name="enrollment_date" id="enrollment_date"--}}
{{--                                        placeholder="Enrollment Date"/>--}}
{{--            </x-form.input-padding>--}}

{{--            <x-form.input-padding>--}}
{{--                <x-form.floating-input wire:model="status" name="status" id="status" placeholder="Status" />--}}
{{--            </x-form.input-padding>--}}

{{--        <x-form.input-padding>--}}
{{--            <x-form.drop-down--}}
{{--            wire:model="gender_id"--}}
{{--            name="gender_id"--}}
{{--            :options="$genders"--}}
{{--            :selected="$selectedGender"--}}
{{--            placeholder="Select Gender" />--}}
{{--        </x-form.input-padding>--}}
{{--    </form>--}}

    <script>
        document.addEventListener('livewire:initialized', () => {
            console.log('JS comp initialized');
            let component = @this;
            const dateOfBirth = document.getElementById('date_of_birth');
            const enrollmentDate = document.getElementById('enrollment_date');
            const issuedDate = document.getElementById('issuedDate');
            const expiryDate = document.getElementById('expiryDate');

            dateOfBirth.addEventListener('blur', (event) => {
                console.log(event.target.value);
                component.set('date_of_birth', event.target.value);
            });

            enrollmentDate.addEventListener('blur', (event) => {
                console.log(event.target.value);
                component.set('enrollment_date', event.target.value);
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

