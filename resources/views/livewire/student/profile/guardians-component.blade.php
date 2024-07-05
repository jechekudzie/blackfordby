<div>
    <form wire:submit.prevent="submit">

        <div class="flex flex-row gap-4 mt-3">
            <div class="w-1/2">
                <x-cards.simple-card   title="Guardian Details">
                    <div class="flex flex-col gap-2">
                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="guardianFirstName"
                                name="guardianFirstName"
                                id="guardianFirstName"
                                placeholder="First Name" />
                        </x-form.input-padding>
                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="guardianLastName"
                                name="guardianLastName"
                                id="guardianLastName"
                                placeholder="Last Name" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="guardianRelationship"
                                name="guardianRelationship"
                                id="guardianRelationship"
                                placeholder="Relationship" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="guardianPhonenumber"
                                name="guardianPhonenumber"
                                id="guardianPhonenumber"
                                placeholder="Phonenumber" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="guardianEmail"
                                name="guardianEmail"
                                id="guardianEmail"
                                placeholder="Email" />
                        </x-form.input-padding>
                    </div>
                </x-cards.simple-card>
            </div>
            <div class="w-1/2">
                <x-cards.simple-card   title="Next Of Kin Details">
                    <div class="flex flex-col gap-2">
                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="nextOfKinFirstName"
                                name="nextOfKinFirstName"
                                id="nextOfKinFirstName"
                                placeholder="First Name" />
                        </x-form.input-padding>
                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="nextOfKinLastName"
                                name="nextOfKinLastName"
                                id="nextOfKinLastName"
                                placeholder="Last Name" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="nextOfKinRelationship"
                                name="nextOfKinRelationship"
                                id="nextOfKinRelationship"
                                placeholder="Relationship" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="nextOfKinPhonenumber"
                                name="nextOfKinPhonenumber"
                                id="nextOfKinPhonenumber"
                                placeholder="Phonenumber" />
                        </x-form.input-padding>

                        <x-form.input-padding>
                            <x-form.floating-input
                                wire:model="nextOfKinEmail"
                                name="nextOfKinEmail"
                                id="nextOfKinEmail"
                                placeholder="Email" />
                        </x-form.input-padding>
                    </div>
                </x-cards.simple-card>
            </div>
        </div>

    </form>
</div>
