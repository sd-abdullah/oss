<x-layout>
    @section('page-title', __('products.Edit product'))

    <main>
        <div class="mx-4">
            <x-card
                class="p-10 max-w-lg mx-auto mt-24"
            >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        {{__('products.Edit a product')}}
                    </h2>
                    <p class="mb-4">{{__('products.Edit an exist product')}}</p>
                </header>

                <form action={{ route('products.update', $product->id) }} method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label
                            for="name"
                            class="inline-block text-lg mb-2"
                            >{{__('products.Product name')}}</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="name"
                            value="{{ __($product->name) }}"
                        />
                        @error('name')

                        <p class="text-red-500 text-xs mt-1">{{__('messages.'.$message)}}</p>
                        
                        @enderror
                    </div>


                    <div class="mb-6">
                        <label for="category_id" class="inline-block text-lg mb-2"
                            >{{__("products.Product's category")}}</label
                        >
                        <select name="category_id" class="border border-gray-200 rounded p-2 w-full">
                        <option value="">{{__('products.Select a category')}}</option>
                       
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" {{ $product->category_id == $category->id ? 'selected' : ''}}>{{ __($category->name) }}</option>
                        @endforeach
                        
                      </select>
                        @error('category_id')

                            <p class="text-red-500 text-xs mt-1">{{('messages.'.$message)}}</p>
                        
                        @enderror
                    </div>


                    <div class="mb-6">
                        <button
                            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                        >
                            {{__('products.Update product')}}
                        </button>

                        <a href={{ route('products.show', $product->id) }} class="text-black mx-4"> {{__('products.Back')}} </a>
                    </div>
                </form>
            </x-card>
        </div>
    </main>
</x-layout>