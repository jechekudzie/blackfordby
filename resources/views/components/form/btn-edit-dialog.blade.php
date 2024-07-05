@props(['id'])
<div>
    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200
     hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex
      justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-target="{{ $id }}" data-modal-toggle="{{ $id }}" data-modal-backdrop="static" >
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
        </svg>
        <span class="sr-only">Close modal</span>
    </button>
</div>
