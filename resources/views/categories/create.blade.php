<x-layout>
    @section('page-title', 'Create category')
    <main>
        <div class="mx-4">
            <x-card
                class="p-10 max-w-lg mx-auto mt-24"
            >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Create New Category
                    </h2>
                </header>

                <form action={{ url('categories') }} method="POST">
                    @csrf

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
                            placeholder="Smart phones, Kitchen devices, ..."
                            value="{{ old('name') }}"
                        />
                        @error('name')

                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        
                        @enderror
                    </div>

                    

                    <div class="mb-6">
                        <button
                            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                        >
                            Create category
                        </button>

                        <a href={{ url('/') }} class="text-black ml-4"> Back </a>
                    </div>
                </form>
            </x-card>
        </div>
    </main>
</x-layout>