<div>
    <form wire:submit.prevent="submit">
        <x-form.input-padding>
            <x-form.drop-down
                name="gender"
                :options="['male', 'female']"
                :selected="'male'"
                placeholder="Select Identification Type" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.floating-input name="identification_number" id="identification_number" placeholder="Identification Number" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.flow-datepicker  name="issued_date" id="issued_date" placeholder="Issued Date"/>
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.flow-datepicker  name="expiry_date" id="expiry_date" placeholder="Expiry Date"/>
        </x-form.input-padding>

        <x-form.file-input  name="photo"  placeholder="Photo" />
    </form>
</div>
