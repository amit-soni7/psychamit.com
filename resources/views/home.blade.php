<x-app-layout meta-title="PsychAmit.com"
              meta-description="Explore the fascinating world of psychology and gain insights into your own mind with our website. Our blog covers topics like mental health, relationships, and personal growth, while our psychological assessment services offer personalized evaluations to help you make informed decisions about your well-being. Discover the power of self-knowledge today">
    <div class="container max-w-7xl mx-auto py-6">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Latest Post -->
            <div class="col-span-2">
                <h2 class="text-lg sm:text-xl font-bold font-sans tracking-wider text-sky-700 uppercase pb-1 border-b-2 border-sky-700 mb-3">
                    Latest Post
                </h2>

                <x-post-item :post="$latestPost"/>
            </div>

            <!-- Popular 3 post -->
            <div>
                <h2 class="text-lg sm:text-xl font-bold text-sky-700 uppercase pb-1 border-b-2 border-sky-700 mb-3">
                    Popular Posts
                </h2>
                @foreach($popularPosts as $post)
                    <div class="grid grid-cols-4 gap-3 mb-4 shadow-card p-4 rounded-md">
                        <a href="{{route('view', $post)}}" class="pt-2 ">
                            <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" class="rounded-md"/>
                        </a>
                        <div class="col-span-3">
                            <a href="{{route('view', $post)}}">
                                <h3 class="text-lg  font-sans whitespace-nowrap truncate">{{$post->title}}</h3>
                            </a>
                            <div class="flex gap-4">
                                @foreach($post->categories as $category)
                                    <a href="#" class=" text-sky-700 p-1 rounded text-sm font-bold">
                                        {{$category->title}}
                                    </a>
                                @endforeach
                            </div>
                            <div class="text-sm font-sans">
                                {{$post->shortBody(20)}}
                            </div>
                            <a href="{{route('view', $post)}}" class="text-sm text-sky-800 hover:text-black">Continue
                                Reading <i class="fas fa-arrow-right my-auto mx-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Recommended posts -->
        @if (count($recommendedPosts) > 0 )
        <div class="mb-8">
            <h2 class="text-lg sm:text-xl font-bold text-sky-700 uppercase pb-1 border-b-2 border-sky-700 mb-3">
                Recommended Posts
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                @foreach($recommendedPosts as $post)
                    <x-post-preview-item :post="$post" :show-author="false"/>
                @endforeach
            </div>
        </div>
        @endif
      

        <!-- Latest Categories -->

        @foreach($categories as $category)
            <div>
                <h2 class="text-lg sm:text-xl font-bold text-sky-700 uppercase pb-1 border-b-2 border-sky-700 mb-3">
                    Category: {{$category->title}}
                    <a href="{{route('by-category', $category)}}">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </h2>

                <div class="mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                        @foreach($category->publishedPosts()->limit(3)->get() as $post)
                            <x-post-preview-item :post="$post" :show-author="false"/>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</x-app-layout>
