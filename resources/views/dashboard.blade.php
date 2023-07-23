<x-layout>
    <div class="grid space-x-4 grid-cols-3 mx-auto">
        <section class="row-span-3 border border-gray-200 rounded-lg py-2 px-4">
            <h2 class="text-xl border-b-2 mb-2">Your Packs</h2>
            <div class="px-8">
                <div class="grid grid-cols-2 font-bold text-gray-500 border-b-2 py-1">
                    <div>Name</div>
                    <div>Item Count</div>
                </div>
                @foreach($packs as $pack)
                    <div class="grid grid-cols-2 py-2 {{ !$loop->last ? "border-b-2" : ""}}">
                        <div>{{$pack->name}}</div>
                        <div>5</div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="col-span-2 border border-gray-200 rounded-lg py-2 px-4 mb-4">
            <h2 class="text-xl border-b-2 mb-2">Upcoming Trips</h2>
            <div class="px-8">
                @foreach($trips as $trip)
                    @if($loop->first)
                        <div class="grid grid-cols-4 font-bold text-gray-500 border-b-2">
                            <div>Name</div>
                            <div>Location</div>
                            <div>Start Date</div>
                            <div>End Date</div>
                        </div>
                    @endif
                    <div class="grid grid-cols-4 py-2 {{ !$loop->last ? "border-b-2" : ""}}">
                        <div>{{$trip->name}}</div>
                        <div>{{$trip->location}}</div>
                        <div>{{$trip->start->toFormattedDateString()}}</div>
                        <div>{{$trip->end->toFormattedDateString()}}</div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="col-span-2 border border-gray-200 rounded-lg py-2 px-4 mb-4">
            <h2 class="text-xl border-b-2 mb-2">Favourite Gear</h2>
            <div class="px-8">
                @foreach($items as $item)
                    @if($loop->first)
                        <div class="grid grid-cols-2 font-bold text-gray-500 border-b-2">
                            <div>Name</div>
                            <div>Weight</div>
                        </div>
                    @endif
                    <div class="grid grid-cols-2 py-2 {{ !$loop->last ? "border-b-2" : ""}}">
                        <div>{{$item->name}}</div>
                        <div>{{$item->weight}}</div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="col-span-2 border border-gray-200 rounded-lg py-2 px-4">
            <h2 class="text-xl border-b-2 mb-2">Favourite Friends</h2>
            <div>
                Test
            </div>
        </section>
    </div>
</x-layout>
