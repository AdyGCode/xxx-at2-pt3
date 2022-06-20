<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Welcome to Cars-n-Collectors") }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-center gap-8">

                    <div class="bg-stone-50 rounded flex-1 rounded-2xl shadow-lg border-emerald-800 border border-1
                    overflow-hidden mx-0">
                        <div class="flex justify-between px-8">
                            <p>
                                <i class="fa fa-solid fa-car-side text-10xl text-emerald-500 m-2"></i>
                            </p>
                            <div class="h-max p-3 overflow-hidden text-emerald-700 font-black text-6xl">
                                {{-- TODO: make sure no random number added to the cars here --}}
                                {{ $cars + rand(1,9999) }}
                            </div>
                        </div>
                        <div class="bg-emerald-800 text-emerald-50 p-3">
                            <p class="text-xl text-center">
                                Cars
                            </p>
                        </div>
                    </div>

                    <div class="bg-stone-50 rounded flex-1 rounded-2xl shadow-lg border-rose-800 border border-1
                    overflow-hidden">
                        <div class="flex justify-between px-8">
                            <p>
                                <i class="fa fa-solid fa-address-book text-10xl text-rose-500 m-2"></i>
                            </p>
                            <div class="h-max p-3 overflow-hidden text-rose-700 font-black text-6xl">
                                {{ $collectors }}
                            </div>
                        </div>

                        <div class="bg-rose-800 text-rose-50 p-3">
                            <p class="text-xl text-center">
                                Collectors
                            </p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
