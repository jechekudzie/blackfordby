<div>
    <form wire:submit.prevent="submit">
            <x-form.input-padding>
                <x-form.drop-down
                    name="gender"
                    :options="['male', 'female']"
                    :selected="'male'"
                    placeholder="Select Contact Type" />
            </x-form.input-padding>


        <x-form.input-padding>
            <x-form.floating-input  name="contact_detials" id="contact_details" placeholder="Contact Details" />
        </x-form.input-padding>
    </form>
</div>
