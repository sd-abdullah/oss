<x-layout>
    @section('page-title', 'Edit category')

    <main>
        <div class="mx-4">
            <x-card
                class="p-10 max-w-lg mx-auto mt-24"
            >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Edit a category
                    </h2>
                    <p class="mb-4">Edit an exist category</p>
                </header>

                <form action="/categories/{{$category->id}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label
                            for="name"
                            class="inline-block text-lg mb-2"
                            >Category name</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="name"
                            value="{{ $category->name }}"
                        />
                        @error('name')

                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button
                            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                        >
                            Update category
                        </button>

                        <a href="/" class="text-black ml-4"> Back </a>
                    </div>
                </form>
            </x-card>
        </div>
    </main>
</x-layout>