<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-1 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Collectors') }}
            </h2>
            <div>
                <a href="{{ route('collectors.create') }}"
                   class="flex-0 rounded text-stone-100 bg-stone-500 p-1 mx-2">
                    {{ __("Add Collector") }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table w-full ">
                        <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Given Name</th>
                            <th>Family name</th>
                            <th>Owned Cars</th>
                            <th>Operations</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($collectors as $key=>$collector)
                            <tr>
                                <td class="content-right pb-2">{{ $key+1 }}</td>
                                <td class=" pb-2">{{ $collector->given_name }}</td>
                                <td class=" pb-2">{{ $collector->family_name }}</td>
                                <td class=" pb-2">{{ count($collector->cars??[]) }}</td>
                                <td class="flex gap-2 pb-2">
                                    <a href="{{ route('collectors.show', $collector->id) }}"
                                       class="px-2 py-1 -ml-2 rounded bg-emerald-500 text-emerald-100">
                                        View
                                    </a>
                                    <a href="{{ route('collectors.edit', $collector->id) }}"
                                       class="px-2 py-1 rounded bg-sky-500 text-sky-100">
                                        Edit
                                    </a>
                                    <a href="{{ route('collectors.delete', $collector->id) }}"
                                       class="px-2 py-1 rounded bg-red-500 text-red-100">
                                        Remove
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="3">
                                {{ $collectors->links() }}
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
