<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-1 font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Cars') }}
            </h2>
            <a href="{{ route('cars.create') }}"
               class="flex-0 rounded text-center w-48 px-2 py-1
                               bg-stone-500 text-white border border-stone-500 shadow-md shadow-gray-400
                               hover:bg-stone-50 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
                               transition ease-in-out duration-300">
                {{ __("Add Car") }}
            </a>
        </div>
    </x-slot>

    <!-- Main Content -->

    <div class="flex w-full my-6 ">
        <h3 class="flex-1 text-xl">
            {{ __('Car Details') }} ( {{$car->code }} )
        </h3>
    </div>

    <div class="flex w-full my-6 ">
        <p class="w-32 text-stone-500">{{ __('Manufacturer') }}</p>
        <p class="flex-1">
            {{ $car->manufacturer}}
        </p>
    </div>


    <div class="flex w-full mt-6 ">
        <p class="w-32 text-stone-500">{{ __('Model') }}</p>
        <p class="flex-1 ">
            {{ $car->model }}
        </p>

    </div>

    <div class="flex w-full my-6 ">

        <p class="w-32 text-stone-500">{{ __('Price') }}</p>
        <p class="flex-1 ">
            @empty($car->price)
                -
            @else
                {{ Currency::currency("AUD")->format($car->price, true) }}
            @endempty
        </p>

    </div>

    <div class="flex w-full mt-6 ">
        <p class="w-32 text-stone-500">{{ __('Code') }}</p>
        <p class="flex-1 ">
            {{ $car->code }}
        </p>

    </div>


    <div class="flex w-full my-6 gap-4">
        <span class="w-32"></span>

        <a href="{{ route('cars.index') }}"
           class="-ml-4 rounded text-center w-48 p-2
                               bg-stone-500 text-white border border-stone-500 shadow-md shadow-gray-400
                               hover:bg-stone-50 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
                               transition ease-in-out duration-500">
            {{ __('Back to Cars') }}
        </a>

        <a href="{{ route('cars.edit', $car->id) }}"
           class="rounded w-24 p-2 text-center
                                    bg-amber-500 text-white border border-amber-500 shadow-md  shadow-gray-400
                                    hover:bg-amber-50 hover:border-amber-500 hover:text-amber-600 hover:shadow-sm
                                    transition ease-in-out duration-500">
            {{ __('Edit Car') }}
        </a>

        <a href="{{ route('cars.delete', $car->id) }}"
           class="rounded text-center w-24 p-2
                               bg-red-500 text-white border border-red-500 shadow-md shadow-gray-400
                               hover:bg-red-50 hover:border-red-500 hover:text-red-500 hover:shadow-sm
                               transition ease-in-out duration-500">
            {{ __('Delete Car') }}
        </a>

    </div>


</x-app-layout>
