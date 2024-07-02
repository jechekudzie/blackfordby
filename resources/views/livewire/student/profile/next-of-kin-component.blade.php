<div>
    <form wire:submit.prevent="submit">
        <x-form.input-padding>
            <x-form.floating-input  wire:model="firstName"  name="firstName" id="firstName" placeholder="First Name" />
        </x-form.input-padding>
        <x-form.input-padding>
            <x-form.floating-input  wire:model="lastName"  name="lastName" id="lastName" placeholder="Last Name" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.floating-input  wire:model="relationship"  name="relationship" id="relationship" placeholder="Relationship" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.floating-input  wire:model="contactDetails"  name="contactDetails" id="contactDetails" placeholder="Contact Details" />
        </x-form.input-padding>
    </form>
</div>
