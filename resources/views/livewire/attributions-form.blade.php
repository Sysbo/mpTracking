<div>
    <div class="text-xl font-bold mb-2">

        <a href="{{route('admin.track',['track' => $track])}}" class="py-2.5 px-5 mr-2 mb-2 inline-block font-bold text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">{{$track->name}}</a>
            {{$event->name}}
    </div>
    @foreach($track->marshalPosts as $mp)
    <div class="bg-white p-4 mb-2 rounded-lg shadow-sm">
        <div>
            <span class="bg-blue-100 text-blue-800 text-xl font-bold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">N° {{$mp->number}}</span>
        </div>
        <div class="flex flex-wrap mt-2">
            @foreach($days as $k => $d)
            <div class="mr-2 mb-2">
                <livewire:attribution-form :marshalPost="$mp" :event="$event" :teams="$teams" :day="$d" :wire:key="$k.$mp->id" />
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>