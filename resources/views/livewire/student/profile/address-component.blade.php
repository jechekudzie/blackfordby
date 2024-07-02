<div>
    <form wire:submit.prevent="submit">

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

        <x-form.input-padding class="mt-8">
            <x-form.floating-input wire:model="addressLine1" name="addressLine1" id="addressLine1" placeholder="Address Line 1"/>
        </x-form.input-padding>

        <x-form.input-padding class="mt-8">
            <x-form.floating-input wire:model="addressLine2" name="addressLine2" id="addressLine2" placeholder="Address Line 2"/>
        </x-form.input-padding>

        <x-form.input-padding class="mt-8">
            <x-form.floating-input wire:model="city" name="city" id="city" placeholder="City"/>
        </x-form.input-padding>

        <x-form.input-padding class="mt-8">
            <x-form.floating-input wire:model="state" name="state" id="state" placeholder="State"/>
        </x-form.input-padding>

        <x-form.input-padding class="mt-8">
            <x-form.floating-input wire:model="zipCode" name="zipCode" id="zipCode" placeholder="Zip Code"/>
        </x-form.input-padding>
    </form>
</div>
