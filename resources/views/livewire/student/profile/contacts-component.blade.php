<div>
    <form wire:submit.prevent="submit">

        <div class="flex flex-row gap-4 mt-3">
            <div class="w-1/2">
                <x-cards.simple-card   title="Student Contacts">
                    <div class="flex flex-col gap-2">
                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="studentPhonenumber"
                                name="studentPhonenumber"
                                id="studentPhonenumber"
                                placeholder="Phonenumber" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="email"
                                name="email"
                                id="email"
                                placeholder="Email" />
                        </x-form.input-padding>

                        <h5 class="text-xl font-medium text-gray-900 dark:text-white mt-3"> Emergency Contacts</h5>
                        <x-layouts.divider/>
                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="emergencyContactFullname"
                                name="emergencyContactFullname"
                                id="emergencyContactFullname"
                                placeholder="Fullname" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="relationship"
                                name="relationship"
                                id="relationship"
                                placeholder="Relationship" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="emergencyPhonenumber"
                                name="emergencyPhonenumber"
                                id="emergencyPhonenumber"
                                placeholder="Phonenumber" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="emergencyEmail"
                                name="$emergencyEmail"
                                id="$emergencyEmail" placeholder="Email" />
                        </x-form.input-padding>

{{--                        <x-form.input-padding>--}}
{{--                            <x-form.floating-input--}}
{{--                                wire:model="priority"--}}
{{--                                name="priority"--}}
{{--                                id="priority"--}}
{{--                                placeholder="Priority" />--}}
{{--                        </x-form.input-padding>--}}
                    </div>
                </x-cards.simple-card>
            </div>
            <div class="w-1/2">
                <x-cards.simple-card   title="Address">
                    <div class="flex flex-col gap-2">

                        <x-form.input-padding class="mt-2.5">
                            <x-form.drop-down
                                wire:model="addressTypeId"
                                name="addressTypeId"
                                :options="$addressTypes"
                                :selected="$addressTypeSelected"
                                placeholder="Select Address Type" />
                        </x-form.input-padding>

                        <x-form.input-padding class="mt-2.5">
                            <x-form.drop-down
                                wire:model="countryId"
                                name="countryId"
                                :options="$countries"
                                :selected="$selectedCountry"
                                placeholder="Select Country" />
                        </x-form.input-padding>

                        <x-form.input-padding class="mt-2.5">
                            <x-form.drop-down
                                wire:model.change="provinceId"
                                name="provinceId"
                                :options="$provinces"
                                :selected="$selectedProvince"
                                placeholder="Select Province" />
                        </x-form.input-padding>

                        <x-form.input-padding class="mt-2.5">
                            <x-form.drop-down
                                wire:model="cityId"
                                name="cityId"
                                :options="$cities"
                                :selected="$selectedCity"
                                placeholder="Select City" />
                        </x-form.input-padding>

                        <x-form.input-padding class="mt-8">
                            <x-form.floating-input
                                wire:model="addressLineOne"
                                name="addressLineOne"
                                id="addressLineOne"
                                placeholder="Address Line 1"/>
                        </x-form.input-padding>

                        <x-form.input-padding class="mt-8">
                            <x-form.floating-input
                                wire:model="addressLineTwo"
                                name="addressLineTwo"
                                id="addressLineTwo"
                                placeholder="Address Line 2"/>
                        </x-form.input-padding>



                    </div>
                </x-cards.simple-card>
            </div>
        </div>


    </form>
</div>
