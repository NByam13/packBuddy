<x-layout>
    <header class="pb-4 font-bold text-2xl text-center">
        <h2 class="border w-1/5 mx-auto rounded-2xl bg-white">All Trips</h2>
    </header>
    <nav class="flex justify-between mb-4">
        <livewire:back-button/>
        <livewire:trip-modal/>
    </nav>
    <main class="border border-gray-200 rounded-2xl bg-white px-8">
        <div class="grid grid-cols-5 font-bold text-gray-500 text-lg border-b-2">
            <div>Name</div>
            <div>Location</div>
            <div>Start</div>
            <div>End</div>
            <div>Pack Count</div>
        </div>
        @if(count($trips))
            @foreach($trips as $trip)
                <div class="grid grid-cols-5 py-2 {{ !$loop->last ? "border-b-2" : ""}}">
                    <div>{{$trip->name}}</div>
                    <div>{{$trip->location}}</div>
                    <div>{{$trip->start->toFormattedDateString()}}</div>
                    <div>{{$trip->end->toFormattedDateString()}}</div>
                    <div>{{$trip->packs->count()}}</div>
                </div>
            @endforeach
        @else
            <div class=" w-1/4 flex flex-col items-center mx-auto text-lg py-4 space-y-2">
                <div>No Trips found! Add a new one!</div>
                <div class="w-40">
                    <livewire:trip-modal/>
                </div>
            </div>
        @endif
    </main>
</x-layout>
