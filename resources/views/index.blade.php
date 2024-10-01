<x-layout>
    <!-- component -->
    <section>
        <div class="py-16 min-h-screen">
            <div class="container mx-auto px-6 text-gray-500 flex flex-col justify-center items-center">
                <div class="relative max-w-7xl ">
                    <h1 class="font-semibold text-2xl mb-4">Featured Blogs</h1>
                    <div class="relative w-[900px] z-10 flex flex-col gap-3">
                        @foreach ($posts as $post)
                            <div class=" bg-white  border rounded-md px-4 py-4">
                                <div class="flex justify-between">
                                    <div class="flex flex-col justify-between">
                                        <div class="flex flex-col">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://via.placeholder.com/40" alt="author"
                                                    class="w-10 h-10 rounded-full">
                                                <div>
                                                    <h2 class="text-sm font-semibold">Mr.X</h2>
                                                    <p class="text-xs text-gray-500">{{ $post->category->name }}</p>
                                                </div>
                                            </div>
                                            <div class="mt-4">
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
                                    <div class="w-[200px] h-[150px]">
                                        <img src='{{ Storage::url($post->image) }}' alt="post"
                                            class="h-full w-full rounded-md">
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
