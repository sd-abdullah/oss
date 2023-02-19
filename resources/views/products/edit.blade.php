<x-layout>
    @section('page-title', 'Edit product')

    <main>
        <div class="mx-4">
            <x-card
                class="p-10 max-w-lg mx-auto mt-24"
            >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Edit a product
                    </h2>
                    <p class="mb-4">Edit an exist product</p>
                </header>

                <form action={{ url('products/' . $product->id) }} method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label
                            for="name"
                            class="inline-block text-lg mb-2"
                            >Product name</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="name"
                            value="{{ $product->name }}"
                        />
                        @error('name')

                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        
                        @enderror
                    </div>


                    <div class="mb-6">
                        <label for="category_id" class="inline-block text-lg mb-2"
                            >Product's category</label
                        >
                        <select name="category_id" class="border border-gray-200 rounded p-2 w-full">
                        <option value="">Select a category</option>
                       
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" {{ $product->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                        
                      </select>
                        @error('category_id')

                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        
                        @enderror
                    </div>


                    <div class="mb-6">
                        <button
                            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                        >
                            Update product
                        </button>

                        <a href={{ url('products') }} class="text-black ml-4"> Back </a>
                    </div>
                </form>
            </x-card>
        </div>
    </main>
</x-layout>