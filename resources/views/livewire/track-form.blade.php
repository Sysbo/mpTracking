<div>
    <h2 class="mb-4 font-bold">{{ $track->name }}</h2>

    <div class="mb-2">
        <x-livewire-input-text label="Nom" name="track.name" />
    </div>
    <div class="mb-2">
        <x-livewire-input-text label="Lattitude" name="track.lat" />
    </div>
    <div class="mb-2">
        <x-livewire-input-text label="Longitude" name="track.long" />
    </div>

    <x-alert-success :message="session('message')"/>

    <!--<div>
            <input type="submit" value="Enregistrer" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        </div>-->

</div>