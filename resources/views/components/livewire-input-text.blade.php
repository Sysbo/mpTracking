<div class="w-full">
    @isset($label)
    <label for="{{$name}}" class="block mb-1 text-sm font-medium text-gray-900 dark:text-gray-300">{{$label}}</label>
    @endisset
    <input wire:model.lazy="{{$name}}" type="text" @isset($value) value="{{$value}}" @endisset name="{{$name}}" @isset($value) id="{{$id}}" @endisset class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" @isset($required) required @endisset>
    @error($name) <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p> @enderror
</div>