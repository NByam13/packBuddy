<x-layout>
    <header class="pb-4 font-bold text-2xl text-center">
        <h2 class="border w-1/5 mx-auto rounded-2xl bg-white">All Packs</h2>
    </header>
    <nav class="flex justify-between mb-4">
        <livewire:back-button/>
        <livewire:pack-modal/>
    </nav>
    <main class="border border-gray-200 rounded-2xl bg-white px-8">
        <div class="grid grid-cols-5 font-bold text-gray-500 text-lg border-b-2">
            <div>Name</div>
            <div>Trip Count</div>
            <div>Item Count</div>
            <div>Created</div>
            <div>Last Updated</div>
        </div>
        @if(count($packs))
            @foreach($packs as $pack)
                <div class="grid grid-cols-5 py-2 {{ !$loop->last ? "border-b-2" : ""}}">
                    <div>{{$pack->name}}</div>
                    <div>{{$pack->trips->count()}}</div>
                    <div>{{$pack->items->count()}}</div>
                    <div>{{$pack->created_at}}</div>
                    <div class="flex justify-between">
                        {{$pack->updated_at}}
                        <form class="flex justify-around pr-4">
                            @csrf
                            <button type="submit" formaction="{{route('packs.destroy', $pack)}}" formmethod="POST">
                                @method('DELETE')
                                <img alt="delete" src="{{asset('images/icons8-trash-can-24.png')}}">
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <div class=" w-1/4 flex flex-col items-center mx-auto text-lg py-4 space-y-2">
                <div>No Packs found! Add a new one!</div>
                <div class="w-40">
                    <livewire:pack-modal/>
                </div>
            </div>
        @endif
    </main>
</x-layout>
