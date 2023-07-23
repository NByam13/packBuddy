<x-layout>
    <div class="grid space-x-4 grid-cols-3 mx-auto">
        <section class="row-span-3 border border-gray-200 rounded-lg py-2 px-4">
            <h2 class="text-xl border-b-2 mb-2">Your Packs</h2>
            <div>
                <div>
                    {{--                @foreach($packs as $pack)--}}
                    {{--                    <div>{{$pack->name}}</div>--}}
                    {{--                    <div>{{$pack->items->count()}}</div>--}}
                    {{--                @endforeach--}}
                </div>
            </div>
        </section>
        <section class="col-span-2 border border-gray-200 rounded-lg py-2 px-4 mb-4">
            <h2 class="text-xl border-b-2 mb-2">Upcoming Trips</h2>
            <div>
                Test
            </div>
        </section>
        <section class="col-span-2 border border-gray-200 rounded-lg py-2 px-4 mb-4">
            <h2 class="text-xl border-b-2 mb-2">Favourite Gear</h2>
            <div>
                Test
            </div>
        </section>
        <section class="col-span-2 border border-gray-200 rounded-lg py-2 px-4">
            <h2 class="text-xl border-b-2 mb-2">Friends</h2>
            <div>
                Test
            </div>
        </section>
    </div>
</x-layout>
