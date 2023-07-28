<div wire:click="show">
    <div class="flex items-center border border-gray-200 rounded-2xl px-4 py-2 bg-white hover:bg-gray-200">
        <img class="w-8 h-8 mr-2" alt="Add Icon" src="{{asset('images/icons8-add-48.png')}}"/>
        New Pack
    </div>
    @if($show)
        <div class="relative">
            <div class="fixed left-1/2 top-1/2 border border-gray-200 rounded-xl px-8 py-4 bg-white">
                <h2 class="text-2xl mx-auto pb-4">Create a New Pack</h2>
                <form class="flex flex-col space-y-2 items-center" method="GET" action="{{route('packs.create')}}">
                    @csrf
                    <input class="rounded-xl" name="name" placeholder="Pack name" type="text">
                    @error('name')
                    @enderror

                    <select class="rounded-xl w-full" id="trip" name="trip">
                        @if($trips)
                            <option value="0" @selected(0)>Add to Trip</option>
                            @foreach($trips as $trip)
                                <option value="{{$trip->id}}">{{$trip->name}}</option>
                            @endforeach
                        @else
                            <option disabled value="-1">No Trips Found!</option>
                        @endif
                    </select>
                    <div class="flex w-5/6 py-2 px-4 border border-gray-200 rounded-xl hover:bg-gray-200">
                        <img class="w-8 h-8 mr-2" alt="Add Icon" src="{{asset('images/icons8-add-48.png')}}"/>
                        <button type="submit">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
