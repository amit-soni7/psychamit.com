<x-app-layout meta-title="PsychAmit.com - About us">

    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-full flex flex-col items-center px-3">

            <article class="flex flex-col my-4">
                @if($widget && $widget->image)
                    <img src="/storage/{{ $widget->image }}">
                @endif

                <div class="bg-stone-200 flex flex-col justify-center p-6">
                    <h1 class="text-3xl font-garamond text-sky-700 pb-10 text-center">
                        Dr. Amit Kumar Soni, M.Phil. (Clinical psychology), Ph.D.
                    </h1>
                    <div class="flex flex-row justify-center">
                        <div class="flex flex-row justify-center w-1/3">
                            <p class="text-2xl">Keen Interest in</p>
                        </div>
                        <img src="{{URL::asset('/storage/amitimg.png')}}" alt="amit_image" class="rounded-md w-1/4 "/>
                        <div class="flex flex-col justify-center align-middle font-garamond text-normal w-1/3">
                            <p class="font-times text-3xl text-normal text-sky-700">Assistant Professor of Psychology and RCI Certified Clinical Psychologist</p>
                            <p class="text-2xl">Trained and worked at India's premeier institute</p>
                            <div class="flex flex-row justify-start gap-x-3.5 1/4">
                                <a href="https://cipranchi.nic.in/">
                                    <img src="{{URL::asset('/storage/CIP_logo.png')}}" alt="CIP Logo" class="rounded-full w-10"/>
                                </a>
                                <a href="https://nimhans.ac.in/">
                                    <img src="{{URL::asset('/storage/Nimhans_logo.png')}}" alt="Nimhans logo" class="rounded-full w-10"/>
                                </a>
                                <a href="https://www.dauniv.ac.in/">
                                    <img src="{{URL::asset('/storage/davv_logo.png')}}" alt="DAVV logo" class="rounded-full w-10"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">
                        {{$widget ? $widget->title : ''}}
                    </h1> -->
                    <!-- <div>
                        {!! $widget ? $widget->content : '' !!}
                    </div> -->
                </div>
            </article>
        </section>

    </div>
</x-app-layout>
