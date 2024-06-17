<x-layouts.app>
    @slot('content')
       Page body here......
    <x-cards.form-card title="Components Use Case" class="w-1/2">
        @slot('form_body')
            <x-form.floating-input  name="form.driverFirstName" id="driverFirstName" placeholder="Driver Firstname" />
            <x-form.textarea  name="address" label_name="Home Address" placeholder="Student's home address"/>
            <x-form.file-input  name="photo"  placeholder="Photo" />
            <x-form.primary-button type="submit"  class="w-full px-40"  >Save Details</x-form.primary-button>
            <x-form.plain-button type="submit"  class="w-full px-40"  >Cancel</x-form.plain-button>
            <div>
                <x-form.drop-down
                    name="gender"
                    :options="['male', 'female']"
                    :selected="'male'"
                    placeholder="Select gender" />
            </div>

            <div>
                <x-form.flow-datepicker  name="dob" id="dob" placeholder="Date of birth"/>
            </div>

        @endslot

    </x-cards.form-card>
    @endslot
</x-layouts.app>
