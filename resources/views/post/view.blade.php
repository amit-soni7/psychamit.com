<x-app-layout :meta-title="$post->meta_title ?: $post->title" :meta-description="$post->meta_description">
<div class="container max-w-4xl mx-auto py-6">
    <!-- Post Section -->
    <section class="w-full flex flex-col px-3">

        <article class="flex flex-col my-4">
        <div class="flex gap-4">
                    @foreach($post->categories as $category)
                        <a href="#" class="text-blue-700 text-sm font-bold uppercase">
                            {{$category->title}}
                        </a>
                    @endforeach
                </div>
                <h1 class="text-5xl font-bold hover:text-gray-700 py-4">
                    {{$post->title}}
                </h1>
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75 rounded-md flex flex-col mt-4">
                <img src="{{$post->getThumbnail()}}" class="aspect-[18/9] justify-center h-2/3 object-cover rounded-md">
            </a>
            <div class="bg-stone-100 flex flex-col justify-start p-6">
                
                <p href="#" class="text-base font-sans pb-8">
                    By <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on
                    {{$post->getFormattedDate()}} | {{ $post->human_read_time }}
                </p>
                <div class="flex flex-col">
                    {!! $post->body !!}
                </div>

                <livewire:upvote-downvote :post="$post" />
            </div>
        </article>

        <div class="w-full flex pt-6">
            <div class="w-1/2">
                @if($prev)
                    <a href="{{route('view', $prev)}}"
                       class="block w-full bg-stone-100 rounded-md shadow hover:shadow-md text-left p-6">
                        <p class="text-lg text-sky-700 font-bold flex items-center">
                            <i class="fas fa-arrow-left pr-1"></i>
                            Previous
                        </p>
                        <p class="pt-2">{{\Illuminate\Support\Str::words($prev->title, 5)}}</p>
                    </a>
                @endif
            </div>
            <div class="w-1/2">
                @if($next)
                    <a href="{{route('view', $next)}}"
                       class="block w-full bg-stone-100 rounded-md shadow hover:shadow-md text-right p-6">
                        <p class="text-lg text-sky-700 font-bold flex items-center justify-end">Next
                            <i
                                class="fas fa-arrow-right pl-1"></i></p>
                        <p class="pt-2">
                            {{\Illuminate\Support\Str::words($next->title, 5)}}
                        </p>
                    </a>
                @endif
            </div>
        </div>

        <livewire:comments :post="$post" />
    </section>

    <x-sidebar/>
</div>
</x-app-layout>
