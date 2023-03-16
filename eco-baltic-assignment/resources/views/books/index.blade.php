<x-layout>
<x-search />
<div>
    <hr />
    <section class="py-10 bg-gray-100">
        @unless(count($books) < 1)
            <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach($books as $book)
                    <x-card :book="$book"></x-card>
                @endforeach
            </div>
        @else
            <div style="text-align: center" class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                Cannot find any books
            </div>
        @endunless
    </section>
</div>
    <div class="mt-6 p-4">
        {{$books->links()}}
    </div>
</x-layout>
