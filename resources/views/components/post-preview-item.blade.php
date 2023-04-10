<article class="bg-stone-100 flex flex-col shadow rounded-md my-8">
    <!-- Article Image -->
    <a href="{{route('view', $post)}}" class="hover:opacity-90">
        <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" class="aspect-[18/9] object-cover rounded-md ">
    </a>
    <div class="bg-stone-100 rounded-b-md flex flex-col justify-start p-6">
        <div class="flex gap-4">
            @foreach($post->categories as $category)
                <a href="#" class="text-blue-700 text-base font-bold font-sans tracking-wider uppercase pb-4">
                    {{$category->title}}
                </a>
            @endforeach
        </div>
        <a href="{{route('view', $post)}}" class="text-2xl font-bold hover:text-gray-700 pb-4">
            {{$post->title}}
        </a>
        @if ($showAuthor)
            <p href="#" class="text-base font-sans font-thin pb-3">
                By <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on
                {{$post->getFormattedDate()}} | {{ $post->human_read_time }}
            </p>
        @endif
        <a href="{{route('view', $post)}}" class="pb-6 font-sans text-lg">
            {{$post->shortBody()}}
        </a>
        <a  href="{{route('view', $post)}}" class=" text-gray-500 hover:text-black">Continue Reading <i
                class="fas fa-arrow-right mx-2 self-center"></i></a>
    </div>
</article>
