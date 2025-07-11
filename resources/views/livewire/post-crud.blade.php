<div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md p-6">
    <h1 class="text-2xl font-bold mb-4"> Manage Posts</h1>
{{-- flash message --}}
    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">{{ session('message') }}</div>
    @endif
    {{-- Form --}}
    <form wire:submit.prevent="{{ $isEdit ? "update" : "store" }}" class="space-y-4">
        <div>
            <label class="block text-sm font-semibold mb-1">Title</label>
            <input type="text" wire:model="title"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">

        </div>

        <div>
            <label class="block text-sm font-semibold mb-1">Content</label>
            <textarea wire:model="content" rows="4"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"></textarea>

        </div>

        <div class="flex items-center gap-2">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded" >
                {{ $isEdit ? "Update Post" : "Create Post"}}
            </button>
            <button type="button" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>

        </div>
    </form>

    {{-- Posts List --}}
    <div class="mt-8">
        <h2 class="text-lg font-semibold mb-3">📝 All Posts</h2>

        @forelse($posts as $post)
            <div class="border border-gray-200 rounded p-4 mb-3 shadow-sm">
                <h3 class="text-lg font-bold">{{ $post->title }}</h3>
                <p class="text-gray-700 mt-1">{{ $post->content }}</p>
                <div class="flex gap-4 mt-3">
                    <button class="text-blue-600 hover:underline" wire:click="edit({{$post->id}})">Edit</button>
                    <button class="text-red-600 hover:underline" wire:click="delete({{$post->id}})">Delete</button>
                </div>
            </div>
        @empty
            <div>No Record Found</div>
        @endforelse
    </div>
</div>
