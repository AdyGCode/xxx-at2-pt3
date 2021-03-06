<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-1 font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Cars') }}
            </h2>
            <div>
                <a href="{{ route('cars.create') }}"
                   class="flex-0 rounded text-center w-48 px-2 py-1
                               bg-stone-500 text-white border border-stone-500 shadow-md shadow-gray-400
                               hover:bg-stone-50 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
                               transition ease-in-out duration-300">
                    {{ __("Add Car") }}
                </a>
            </div>
        </div>
    </x-slot>


    <form action="{{ route('cars.store') }}"
          method="post"
          class="">
        @csrf

        <div class="flex w-full mt-2 mb-6 ">
            <h3 class="flex-1 border-1 border-stone-300 text-2xl">
                {{ __('Add New Car') }}
            </h3>
        </div>

        <div class="flex w-full mt-6 ">
            <label for="Manufacturer" class="w-32 pt-2">{{ __('Manufacturer') }}</label>
            <input type="text" id="Manufacturer" name="manufacturer"
                   value="{{old('manufacturer')}}"
                   class="flex-1 rounded-md border-1 border-stone-300
                                           @error('manufacturer') text-red-500 border-red-500 @enderror">
        </div>
        @error('manufacturer')
        <p class="m-0 p-0 mt-1 ml-32 italic text-red-500">
            {{ __('The manufacturer is required and must be at least one character long (not whitespace)') }}
        </p>
        @enderror

        <div class="flex w-full my-6 ">
            <label for="Model" class="w-32 pt-2">{{ __('Model') }}</label>
            <input type="text" id="Model" name="model"
                   value="{{old('model')}}"
                   class="flex-1 rounded-md border-1 border-stone-300
                                           @error('model') text-red-500 border-red-500 @enderror">
        </div>
        @error('model')
        <p class="m-0 p-0 mt-1 ml-32 italic text-red-500">
            {{ __('The model is required') }}
        </p>
        @enderror

        <div class="flex w-full my-6 ">
            <label for="Price" class="w-32 pt-2">{{ __('Cars Price') }}</label>
            <input type="text" id="Price" name="price"
                   class="flex-1 rounded-md border-1 border-stone-300
                                           @error('price') text-red-500 border-red-500 @enderror">
        </div>
        @error('price')
        <p class="m-0 p-0 mt-1 ml-32 italic text-red-500">
            {{ __('The recommended price in Australian Dollars is required.') }}
        </p>
        @enderror

        <div class="flex w-full my-6 gap-4">
            <label for="" class="w-32"> </label>

            <button type="submit" name="save"
                    class="rounded w-24 p-2
                                    bg-sky-500 -ml-4 text-sky-100 border border-sky-50 shadow-md
                                    hover:bg-sky-100 hover:border-sky-500 hover:text-sky-500 hover:shadow-sm
                                    transition ease-in-out duration-500">
                {{ __('Save') }}
            </button>

            <button type="submit" name="save"
                    class="rounded w-24  p-2
                                    bg-amber-500 text-amber-100 border border-amber-50 shadow-md
                                    hover:bg-amber-100 hover:border-amber-500 hover:text-amber-500 hover:shadow-sm
                                    transition ease-in-out duration-500">
                {{ __('Clear') }}
            </button>

            <a href=""
               class="rounded text-center w-24 p-2
                               bg-stone-500 text-stone-100 border border-stone-50 shadow-md
                               hover:bg-stone-100 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
                               transition ease-in-out duration-500">
                {{ __('Back') }}
            </a>

        </div>
    </form>

</x-app-layout>
