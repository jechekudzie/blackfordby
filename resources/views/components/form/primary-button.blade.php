<x-form.field>
    <button type="submit" {{ $attributes->merge(['class' => 'text-white bg-green-700 hover:bg-green-800 focus:ring-4
         focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 ']) }} {{ $attributes }} >{{ $slot }}</button>
</x-form.field>
