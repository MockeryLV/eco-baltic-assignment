@props(['book'])

<article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
        <div style="align-items: center; flex-flow: column" class="relative flex items-end overflow-hidden rounded-xl">
            <a href="/books/{{$book->id}}">
            <img style="max-width: 200px" src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781787550360/classic-book-cover-foiled-journal-9781787550360_hr.jpg" alt="Book cover">
            </a>
        </div>
        <div class="bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <span class="ml-1 text-sm text-slate-400">Total sales: {{count($book->sales)}}</span>
            <br />
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <span class="ml-1 text-sm text-slate-400">Sales for current month: {{count($book->salesCurrentMonth)}}</span>
        </div>
        <div class="mt-1 p-2">
            <div style="min-height: 100px">
                <h2 class="text-slate-700">{{$book->title}}</h2>
                <p class="mt-1 text-sm text-slate-400">
                    @if(count($book->authors) < 1)
                        Unknown author
                    @endif

                    @foreach($book->authors as $author)
                        {{$author->name.', '}}
                    @endforeach
                </p>
            </div>
            <div class="mt-3 flex items-end justify-between">
                <a href="/?genre={{$book->genre}}" class="text-lg font-bold text-blue-500">{{$book->genre}}</a>
                    <form action="/sales" method="POST">
                        @csrf
                        <input type="hidden" value="{{$book->id}}" name="book_id">
                        <button type="submit" class="text-sm flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1 text-white duration-100 hover:bg-blue-600">Buy</button>
                    </form>
            </div>
        </div>
</article>
