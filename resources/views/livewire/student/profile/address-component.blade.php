<div>
    <form wire:submit.prevent="submit">

        <x-form.input-padding class="mt-3">
            <x-form.drop-down
                name="gender"
                :options="['male', 'female']"
                :selected="'male'"
                placeholder="Address Type" />
        </x-form.input-padding>

            <x-form.input-padding class="mt-2.5">
                <x-form.drop-down
                    name="gender"
                    :options="['male', 'female']"
                    :selected="'male'"
                    placeholder="Country" />
            </x-form.input-padding>

        <x-form.input-padding class="mt-8">
            <x-form.floating-input name="address_line1" id="address_line1" placeholder="Address Line 1"/>
        </x-form.input-padding>

        <x-form.input-padding class="mt-8">
            <x-form.floating-input name="address_line2" id="address_line2" placeholder="Address Line 2"/>
        </x-form.input-padding>

        <x-form.input-padding class="mt-8">
            <x-form.floating-input name="city" id="city" placeholder="City"/>
        </x-form.input-padding>

        <x-form.input-padding class="mt-8">
            <x-form.floating-input name="state" id="state" placeholder="State"/>
        </x-form.input-padding>

        <x-form.input-padding class="mt-8">
            <x-form.floating-input name="zipcode" id="zipcode" placeholder="Zip Code"/>
        </x-form.input-padding>
    </form>
</div>
