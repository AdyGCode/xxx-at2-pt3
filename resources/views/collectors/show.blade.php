<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-1 font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Collectors') }}
            </h2>
            <a href="{{ route('collectors.create') }}"
               class="flex-0 rounded text-center w-48 px-2 py-1
                               bg-stone-500 text-white border border-stone-500 shadow-md shadow-gray-400
                               hover:bg-stone-50 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
                               transition ease-in-out duration-300">
                {{ __("Add Collector") }}
            </a>
        </div>
    </x-slot>

    <!-- Main Content -->

    <div class="flex w-full my-6 ">
        <h3 class="flex-1 text-xl">
            {{ __('Collector Details') }}
        </h3>
    </div>

    <div class="flex w-full my-6 ">
        <p class="w-32 text-stone-500">{{ __('Given Name') }}</p>
        <p class="flex-1">
            {{ $collector->given_name}}
        </p>
    </div>


    <div class="flex w-full mt-6 ">
        <p class="w-32 text-stone-500">{{ __('Family Name') }}</p>
        <p class="flex-1 ">
            {{ $collector->family_name }}
        </p>

    </div>

    <div class="flex w-full my-6 ">

        <p class="w-32 text-stone-500">{{ __('Cars Owned') }}</p>
        <p class="flex-1 flex flex-wrap -ml-1 text-sm gap-2 ">
            @empty($collector->owned)
                <span class="p-1 px-4 w-max rounded-full bg-stone-200 text-slate-900">No cars</span>
            @else
                @foreach($collector->owned ?? [] as $car)
                    <a class="p-1 px-4 w-max rounded-full bg-stone-200 text-stone-900"
                       href="{{ route('cars.show', $car['car_id']) }}"
                    >{{$car['code']}}</a>
                @endforeach
            @endempty
        </p>
    </div>


    <div class="flex w-full my-6 gap-4">
        <span class="w-32"></span>

        <a href="{{ route('collectors.index') }}"
           class="-ml-4 rounded text-center w-48 p-2
           bg-stone-500 text-white border border-stone-500 shadow-md shadow-gray-400
           hover:bg-stone-50 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
           transition ease-in-out duration-500">
            {{ __('Back to Collectors') }}
        </a>

        <a href="{{ route('collectors.edit', $collector->id) }}"
           class="rounded w-24 p-2 text-center
                                    bg-amber-500 text-white border border-amber-500 shadow-md  shadow-gray-400
                                    hover:bg-amber-50 hover:border-amber-500 hover:text-amber-600 hover:shadow-sm
                                    transition ease-in-out duration-500">
            {{ __('Edit') }}
        </a>

        <a href="{{ route('collectors.delete', $collector->id) }}"
           class="rounded text-center w-24 p-2
                               bg-red-500 text-white border border-red-500 shadow-md shadow-gray-400
                               hover:bg-red-50 hover:border-red-500 hover:text-red-500 hover:shadow-sm
                               transition ease-in-out duration-500">
            {{ __('Delete') }}
        </a>

    </div>


</x-app-layout>
