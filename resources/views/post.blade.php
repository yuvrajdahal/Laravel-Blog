<x-layout>
    <div class="container w-full mx-auto px-6 min-h-screen text-gray-500 flex flex-col  items-center py-10">
        <div class="relative w-full max-w-7xl ">
            <div class="flex flex-col justify-between items-center">
                <div class="h-[400px] w-full">
                    <img src='{{ Storage::url($post->image) }}' alt="post" class="h-full w-full rounded-md">
                </div>
                <p class="mt-2 text-sm text-gray-600">Images owned by <span class="underline underline-offset-2"> Dukha
                        Sukha</span></p>
            </div>
            <h1 class="font-semibold text-2xl mt-4">{{ $post->title }}</h1>
            <div class="text-sm mt-2 flex items-center gap-2">
                <div>{{ $post->created_at->diffForHumans() }}</div> -
                <div>{{ $post->category->name }}</div>
            </div>
            <hr class="mt-6 border-gray-400" />
            <div class="mt-6 prose">
                {!! $post->content !!}
            </div>
        </div>
</x-layout>
