<div class="text-lg flex flex-row gap-4 w-100">
    <div class="m-x-4">
        <label class="inline-block w-32 font-bold">Manufacturer:</label>
        <select name="manufacturer" wire:model="manufacturer" class="border shadow p-2 bg-white  text-gray-900">
            <option value=''>Choose a manufacturer</option>
            @foreach($manufacturers as $manufacturer)
                <option value={{ $manufacturer->id }}>{{ $manufacturer->name }}</option>
            @endforeach
        </select>
    </div>
    @if(count($cars) > 0)
        <div class="">
            <label class="inline-block w-32 font-bold text-lg">Car:</label>
            <select name="car" wire:model="car"
                    class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none
                           text-gray-900 hover:border-gray-500 focus:outline-none focus:shadow-outline">
                <option value=''>Choose a car</option>
                @foreach($cars as $car)
                    <option value={{ $car->id }}>{{ $car->model }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button>More</button>
        </div>
    @endif
</div>
