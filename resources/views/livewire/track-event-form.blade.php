<div>
    <div class="bg-white rounded-lg shadow-md p-1 mb-3">
        <form wire:submit.prevent="addEvent">
            <div class="flex gap-1 mb-1">
                <div class="w-full">
                    <input wire:model.lazy="event.name" type="text" placeholder="Nom" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('event.name') <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p> @enderror
                </div>
                <div class="w-full">
                    <input wire:model.lazy="event.date_start" type="date" placeholder="Date de début" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('event.date_start') <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p> @enderror
                </div>
                <div class="w-full">
                    <input wire:model.lazy="event.date_end" type="date" placeholder="Date de fin" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('event.date_end') <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p> @enderror
                </div>
            </div>

            <button type="submit" class="w-full py-2 px-3 text-sm text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg  text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Ajouter</button>
        </form>
    </div>

    <div class="flex">
        <div class="basis-1/3">Nom</div>
        <div class="basis-1/3"> Date de début </div>
        <div class="basis-1/3"> Date de fin </div>
    </div>
    @foreach($track->events->sortBy('date_start') as $event)
    <div class="mb-1">
        <livewire:event-form :event="$event" :wire:key="$event->id" />
    </div>
    @endforeach
</div>