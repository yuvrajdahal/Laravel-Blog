<x-layout>
    <!-- component -->
    <section>
        <div class="py-10 lg:py-16 min-h-screen">
            <div
                class="container mx-auto  px-6 text-gray-500 flex flex-col-reverse lg:flex-row gap-y-6 lg:gap-y-0 lg:gap-x-6 ">
                <div>
                    <div class="relative lg:w-[600px] xl:w-[750px] z-10 flex flex-col gap-3">
                        @foreach ($posts as $post)
                            <div class=" bg-white  border rounded-md px-4 py-4">
                                <div class="flex flex-col-reverse gap-y-4 lg:gap-y-0 lg:flex-row justify-between">
                                    <div class="flex flex-col justify-between">
                                        <div class="flex flex-col">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://via.placeholder.com/40" alt="author"
                                                    class="w-10 h-10 rounded-full">
                                                <div>
                                                    <h2 class="text-sm font-semibold">Mr.X</h2>
                                                    <p class="text-xs text-gray-500">Admin and Author</p>
                                                </div>
                                            </div>
                                            <div><button
                                                    class="border text-xs rounded border border-gray-500 px-1 py-1 mt-2">{{ $post->category->name }}</button>
                                            </div>
                                            <div class="mt-2">
                                                <a href="{{ route('post', $post->slug) }}"
                                                    class="text-xl font-bold leading-tight cursor-pointer">
                                                    {{ $post->title }}</a>

                                            </div>
                                            <p class="text-sm text-gray-600 mt-2 prose">
                                                {!! $post->content !!}
                                            </p>
                                        </div>
                                        <div class="mt-4 flex items-center justify-between">
                                            <div class="flex items-center space-x-3 text-gray-500">
                                                <span class="text-xs">
                                                    {{ $post->created_at->diffForHumans() }}
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="h-[300px] lg:w-[200px] lg:h-[150px] overflow-hidden rounded-md">
                                        <img src='{{ Storage::url($post->image) }}' alt="post"
                                            class="h-full w-full hover:scale-110 transition-transform duration-300">
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="flex flex-col">
                    <h1 class="font-semibold text-2xl mb-4">Featured Blogs</h1>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($categories as $category)
                            <button
                                class="border px-4 py-2 text-sm  cursor-pointer rounded bg-gray-200 hover:bg-gray-300 active:bg-gray-200 ">{{ $category->name }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
