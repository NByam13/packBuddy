<div wire:click="show">
    <div class="flex items-center border border-gray-200 rounded-2xl px-4 py-2 bg-white hover:bg-gray-200">
        <img class="w-8 h-8 mr-2" alt="Add Icon" src="{{asset('images/icons8-add-48.png')}}"/>
        New Pack
    </div>
    @if($show)
        <div class="absolute left-1/2 top-1/2 border border-gray-200 rounded-xl px-8 py-4 bg-white">
            <h2 class="text-2xl w-1/2 mx-auto pb-4">Create a New Pack</h2>
            <form class="grid grid-cols-2" method="GET" action="{{route('packs.create')}}">
                @csrf
                <label for="name">Name</label>
                <input id="name" name="name" type="text">

                <label for="trip">Add to Trip</label>
                <select id="trip" name="trip">
                    @if($trips)
                        <option value="0">Select a Trip</option>
                        @foreach($trips as $trip)
                            <option value="{{$trip->id}}">{{$trip->name}}</option>
                        @endforeach
                    @else
                        <option disabled value="-1">No Trips Found!</option>
                    @endif
                </select>

                <label for="items">Add Items</label>
                <select {{count($items) > 1 ? "multiple" : ""}} id="items" name="items">
                    @if($items)
                        @foreach($items as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    @else
                        <option disabled value="-1">No Items Found!</option>
                    @endif
                </select>

                <div class="flex py-2 px-4 border border-gray-200 rounded-xl hover:bg-gray-200">
                    <img class="w-8 h-8 mr-2" alt="Add Icon" src="{{asset('images/icons8-add-48.png')}}"/>
                    <button type="submit">
                        Create New Pack
                    </button>
                </div>
            </form>
        </div>
    @endif
</div>
