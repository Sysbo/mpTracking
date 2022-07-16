<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-row gap-4">
            <div class="basis-1/4">
                <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-md">
                    <livewire:track-form :track="$track"/>
                </div>
            </div>
            <div class="basis-3/4">
                <div class="mb-4">
                    <h2 class="font-bold mb-2">Postes</h2>
                    <livewire:track-marshal-post-form :track="$track" />
                    <!--<x-table edit :headers="collect($track->marshalPosts->makeHidden(['id','track_id','updated_at','created_at'])->first())->Keys()" :datas="$track->marshalPosts->makeHidden(['id','track_id','updated_at','created_at'])->sortBy('number')" />-->
                </div>
                <div class="mb-4">
                    <h2 class="font-bold mb-2">Evénements</h2>
                    <livewire:track-event-form :track="$track" />
                    <!--<x-table edit :headers="collect($track->events->makeHidden(['id','track_id','updated_at','created_at'])->first())->Keys()" :datas="$track->events->makeHidden(['id','track_id','updated_at','created_at'])->sortBy('number')" />-->
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>