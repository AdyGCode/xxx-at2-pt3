<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Welcome to Cars-n-Collectors") }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex">

                    <div class="bg-stone-50 rounded w-96 mx-auto rounded-2xl shadow-lg border-emerald-800 border border-1
                    overflow-hidden">
                        <div class="h-48 p-3 overflow-hidden text-emerald-700 font-black text-10xl text-center">
                            {{ $cars }}
                        </div>
                        <div class="bg-emerald-800 text-emerald-50 p-3">
                            <p class="text-2xl text-center">
                                Cars
                            </p>
                        </div>
                    </div>

                    <div class="bg-stone-50 rounded w-96 mx-auto rounded-2xl shadow-lg border-emerald-800 border border-1
                    overflow-hidden">
                        <div class="h-48 p-3 overflow-hidden text-emerald-700 font-black text-10xl text-center">
                            {{ $collectors }}
                        </div>
                        <div class="bg-emerald-800 text-emerald-50 p-3">
                            <p class="text-2xl text-center">
                                Collectors
                            </p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
