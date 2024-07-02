<div>
    <form wire:submit.prevent="submit">
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
        <x-form.file-input wire:model="identificationDocument"
                           name="identificationDocument"
                           id="identificationDocument"
                           placeholder="Id Document" />
    </form>

    <script>
        document.addEventListener('livewire:initialized', () => {
            console.log('JS comp initialized');
            let component = @this;
            const issuedDatePicker = document.getElementById('issuedDate');
            const expiryDatePicker = document.getElementById('expiryDate');

            issuedDatePicker.addEventListener('blur', (event) => {
                console.log(event.target.value);
                component.set('issuedDate', event.target.value);
            });

            expiryDatePicker.addEventListener('blur', (event) => {
                console.log(event.target.value);
                component.set('expiryDate', event.target.value);
            });
        });
    </script>
</div>

