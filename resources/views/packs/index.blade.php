<x-layout>
    <header class="pb-4 font-bold text-2xl text-center">
        <h2 class="border w-1/5 mx-auto rounded-2xl bg-white">All Packs</h2>
    </header>
    <nav class="flex justify-between mb-4">
        <button class="border border-gray-200 rounded-2xl px-4 py-2 bg-white hover:bg-gray-200">⬅️ Back</button>
        <div class="flex items-center border border-gray-200 rounded-2xl px-4 py-2 bg-white hover:bg-gray-200">
            <img class="w-8 h-8" alt="Add Icon" src="{{asset('images/icons8-add-48.png')}}"/>
            New Pack
        </div>
    </nav>
    <main class="border border-gray-200 rounded-2xl bg-white px-8">
        <div class="grid grid-cols-5 font-bold text-gray-500 text-lg border-b-2">
            <div>Name</div>
            <div>Trip Count</div>
            <div>Item Count</div>
            <div>Created</div>
            <div>Last Updated</div>
        </div>
        @foreach($packs as $pack)
            <div class="grid grid-cols-5 py-2 {{ !$loop->last ? "border-b-2" : ""}}">
                <div>{{$pack->name}}</div>
                <div>{{$pack->trips->count()}}</div>
                <div>{{$pack->items->count()}}</div>
                <div>{{$pack->created_at}}</div>
                <div>{{$pack->updated_at}}</div>
            </div>
        @endforeach
    </main>
</x-layout>
