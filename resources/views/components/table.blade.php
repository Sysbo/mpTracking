
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
                @foreach($headers as $h)
                <th scope="col" class="py-3 px-6">
                   {{$h}}
                </th>
                @endforeach
                @isset($edit)
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Modifier</span>
                </th>
                @endisset
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $m)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                @foreach($m->toArray() as $d)
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$d}}
                </th>
                @endforeach
                @isset($edit)
                <td class="py-4 px-6 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                </td>
                @endisset
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
