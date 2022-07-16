<div>
    <div class="flex gap-1 p-1 bg-white rounded-lg shadow-sm">
        <x-livewire-input-text name="mp.number" />
        <x-livewire-input-text name="mp.lat" />
        <x-livewire-input-text name="mp.long" />
        <div class="content-center">
            <button wire:click="deleteMp" type="button" class="bg-gray-100 text-gray-500 rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-200 inline-flex dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white" data-dismiss-target="#alert-5" aria-label="Close">
                <span class="sr-only">Delete</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</div>