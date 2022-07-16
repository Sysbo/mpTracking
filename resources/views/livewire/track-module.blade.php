<div>
<div class="bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <!--<div class="flex justify-end px-4 pt-4">
        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
            </svg>
        </button>-->
        <!-- Dropdown menu -->
        <!--<div id="dropdown" class="z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 block" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(281px, 83px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
            <ul class="py-1" aria-labelledby="dropdownButton">
                <li>
                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                </li>
            </ul>
        </div>
    </div>-->
    <div class="flex flex-col items-center p-4">
        <!--<img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">-->
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$track->name}}</h5>
        <div class="flex mt-2 space-x-3">
            <a href="{{ route('admin.track', ['track' => $track]) }}" class="py-2 px-3 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modifier</a>
            <button type="button" wire:click='deleteTrack' class="py-2 px-3 text-xs font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 ">Supprimer</button>
        </div>
    </div>
</div>
</div>
