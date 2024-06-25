<div>
    <form wire:submit.prevent="submit">

            <x-form.input-padding>
                <x-form.floating-input  wire:model="first_name"  name="first_name" id="first_name" placeholder="First Name" />
            </x-form.input-padding>

            <x-form.input-padding>
                <x-form.floating-input  wire:model="last_name"  name="lastname_name" id="last_name" placeholder="Last Name" />
            </x-form.input-padding>

            <x-form.input-padding>
                <x-form.flow-datepicker  name="date_of_birth" id="date_of_birth" placeholder="Date of birth"/>
            </x-form.input-padding>

            <x-form.input-padding>
                <x-form.flow-datepicker  name="enrollment_date" id="enrollment_date" placeholder="Enrollment Date"/>
            </x-form.input-padding>

            <x-form.input-padding>
                <x-form.floating-input name="status" id="status" placeholder="Status" />
            </x-form.input-padding>


        <x-form.input-padding>
            <x-form.drop-down
            name="gender"
            :options="['male', 'female']"
            :selected="'male'"
            placeholder="Select Gender" />
        </x-form.input-padding>

    </form>
</div>

