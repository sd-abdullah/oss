<x-layout>
    @section('page-title', __('categories.Create category'))
    <main>
        <div class="mx-4">
            <x-card
                class="p-10 max-w-lg mx-auto mt-24"
            >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        {{__("categories.Create New Category")}}
                    </h2>
                </header>

                <form action={{ route('categories.store') }} method="POST">
                    @csrf

                    <div class="mb-6">
                        <label
                            for="name"
                            class="inline-block text-lg mb-2"
                            >{{__("categories.Category name")}}</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="name"
                            placeholder="{{__("categories.Smart phones, Kitchen devices, ...")}}"
                            value="{{ old('name') }}"
                        />
                        @error('name')

                        <p class="text-red-500 text-xs mt-1">{{__('messages.'.$message)}}</p>
                        
                        @enderror
                    </div>

                    

                    <div class="mb-6">
                        <button
                            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                        >
                            {{__("categories.Create category")}}
                        </button>

                        <a href={{ route('categories.index') }} class="text-black mx-4"> {{__("categories.Back")}} </a>
                    </div>
                </form>
            </x-card>
        </div>
    </main>
</x-layout>