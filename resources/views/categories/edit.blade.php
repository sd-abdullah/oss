<x-layout>
    @section('page-title', __('categories.Edit category'))

    <main>
        <div class="mx-4">
            <x-card
                class="p-10 max-w-lg mx-auto mt-24"
            >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        {{__('categories.Edit a category')}}
                    </h2>
                    <p class="mb-4">{{__('categories.Edit an exist category')}}</p>
                </header>

                <form action={{ route('categories.update', $category->id)  }} method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label
                            for="name"
                            class="inline-block text-lg mb-2"
                            >{{__('categories.Category name')}}</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="name"
                            value="{{ __('user-inputs.'.$category->name) }}"
                        />
                        @error('name')

                        <p class="text-red-500 text-xs mt-1">{{__('messages.'.$message)}}</p>
                        
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button
                            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                        >
                            {{__('categories.Update category')}}
                        </button>

                        <a href={{ route('categories.show', $category->id) }} class="text-black mx-4"> {{__('categories.Back')}} </a>
                    </div>
                </form>
            </x-card>
        </div>
    </main>
</x-layout>