<x-layout>
    <header class="pb-4 font-bold text-2xl text-center">
        <h2 class="border rounded-2xl">All Packs</h2>
    </header>
    <main class="border border-gray-200 rounded-2xl bg-white px-8">
        <div class="grid grid-cols-5 font-bold text-gray-500 text-lg border-b-2">
            <div>Name</div>
            <div>Trip Count</div>
            <div>Item Count</div>
            <div>Created</div>
            <div>Last Updated</div>
        </div>
        @foreach($packs as $pack)
            <div class="grid grid-cols-5 border-b-2">
                <div>{{$pack->name}}</div>
                <div>{{$pack->trips}}</div>
                <div>{{$pack->items}}</div>
                <div>{{$pack->created_at}}</div>
                <div>{{$pack->updated_at}}</div>
            </div>
        @endforeach
    </main>
</x-layout>
