<div wire:click="show">
    <div class="flex items-center border border-gray-200 rounded-2xl px-4 py-2 bg-white hover:bg-gray-200">
        <img class="w-8 h-8 mr-2" alt="Add Icon" src="{{ asset('images/icons8-add-48.png') }}"/>
        New Trip
    </div>
    @if($show)
        <div wire:ignore.self class="absolute border border-gray-200 rounded-xl px-8 py-4 bg-white">
            <h2 class="text-2xl mx-auto pb-4">Create a New Trip</h2>
            <form class="flex flex-col space-y-2 items-center" method="GET" action="{{route('trips.create')}}">
                @csrf
                <input class="rounded-xl w-full" name="name" placeholder="Trip name" type="text">
                @error('name')
                @enderror

                <input class="rounded-xl w-full" name="location" placeholder="Trip location" type="text">
                @error('location')
                @enderror

                <label class="text-gray-600 self-start" for="start">Start Time</label>
                <input class="rounded-xl w-full" id="start" name="start" placeholder="1997-12-12" type="date">
                @error('start')
                @enderror

                <label class="text-gray-600 self-start" for="end">End Time</label>
                <input class="rounded-xl w-full" name="end" id="end" placeholder="{{now()->addDay()->toDateString()}}" type="date">
                @error('end')
                @enderror

                <div class="flex space-x-4">
                    <div
                        wire:click="close"
                        class="flex w-5/6 py-2 px-4 border border-gray-200 rounded-xl hover:bg-gray-200">
                        <img class="w-8 h-8 mr-2" alt="Close Icon" src="{{asset('images/icons8-cancel-48.png')}}">
                        <button type="button">
                            Close
                        </button>
                    </div>
                    <div class="flex w-5/6 py-2 px-4 border border-gray-200 rounded-xl hover:bg-gray-200">
                        <img class="w-8 h-8 mr-2" alt="Add Icon" src="{{asset('images/icons8-add-48.png')}}"/>
                        <button type="submit">
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endif
</div>
