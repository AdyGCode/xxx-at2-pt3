<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--            {{ __("Welcome to Cars-n-Collectors") }}--}}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-center gap-8">

                    <div class="bg-stone-50 rounded flex-1 rounded-2xl shadow-lg border-emerald-800 border border-1
                    overflow-hidden  sm:text-2xl md:text-3xl lg:text-4xl text-center">
                        <p class="flex justify-between text-emerald-700 font-black m-2 align-text-top">
                            <span><i class="fa fa-solid fa-car-side text-emerald-500"></i></span>
                            <span>
                                {{ $cars }}
                            </span>
                        </p>

                        <p class="bg-emerald-800 text-emerald-50 p-3">
                            {{ trans('general.cars') }}
                        </p>
                    </div>

                    <div class="bg-stone-50 rounded flex-1 rounded-2xl shadow-lg border-rose-800 border border-1
                                overflow-hidden  sm:text-2xl md:text-3xl lg:text-4xl text-center">
                        <p class="flex justify-between text-rose-700 font-black m-2 align-text-top">
                            <span><i class="fa fa-solid fa-address-book text-rose-500"></i></span>
                            <span>{{ $collectors }}</span>
                        </p>

                        <p class="bg-rose-800 text-rose-50 p-3">
                            {{ trans('general.collectors') }}
                        </p>
                    </div>

                    <div class="bg-stone-50 rounded flex-1 rounded-2xl shadow-lg border-indigo-800 border border-1
                    overflow-hidden  sm:text-2xl md:text-3xl lg:text-4xl text-center">
                        <p class="flex justify-between text-indigo-700 font-black m-2 align-text-top">
                            <span><i class="fa fa-solid fa-user text-indigo-500"></i></span>
                            <span>{{ $users }}</span>
                        </p>

                        <p class="bg-indigo-800 text-indigo-50 p-3">
                            {{ trans('general.users') }}
                        </p>
                    </div>


                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
