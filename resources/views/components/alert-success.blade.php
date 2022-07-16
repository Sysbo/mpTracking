
    <div x-init="" x-cloak x-data="{ show: false }" @trackupdated.window="show=true; setTimeout(() => show=false, 3000);">
        <div x-show="show" x-transition class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            {{ $message }}
        </div>
    </div>