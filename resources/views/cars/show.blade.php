<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-1 font-semibold text-xl text-gray-800 leading-tight">
                {{--                {{ __('Cars') }}--}}
            </h2>
            <a href="{{ route('cars.create') }}"
               class="flex-0 rounded text-stone-100 bg-stone-500 p-1 mx-2">
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

    <div class="flex w-full mt-6 ">
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
        <p for="" class="w-32"></p>

        <a href="{{ route('cars.index') }}"
           class="-ml-4 rounded text-center w-24 p-2
                               bg-stone-500 text-stone-100 border border-stone-50 shadow-md
                               hover:bg-stone-100 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
                               transition ease-in-out duration-500">
            {{ __('Back') }}
        </a>

        <a href="{{ route('cars.edit', $car->id) }}"
           class="rounded w-24  p-2 text-center
                                    bg-amber-500 text-amber-100 border border-amber-50 shadow-md
                                    hover:bg-amber-100 hover:border-amber-500 hover:text-amber-500 hover:shadow-sm
                                    transition ease-in-out duration-500">
            {{ __('Edit') }}
        </a>

        <a href="{{ route('cars.delete', $car->id) }}"
           class="rounded text-center w-24 p-2
                               bg-red-500 text-red-100 border border-red-50 shadow-md
                               hover:bg-red-100 hover:border-red-500 hover:text-red-500 hover:shadow-sm
                               transition ease-in-out duration-500">
            {{ __('Delete') }}
        </a>

    </div>


</x-app-layout>
