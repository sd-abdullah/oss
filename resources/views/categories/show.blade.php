<x-layout>
    @section('page-title', 'Show category')
    @include('partials.categories._search')
    
    <a href="/" class="inline-block text-black ml-4 mb-4"
                    ><i class="fa-solid fa-arrow-left"></i> Back
                </a>
                <div class="mx-4">
                    <x-card class="py-10">
                        <div
                            class="flex flex-col items-center justify-center text-center"
                        >
    
                            <h3 class="text-2xl mb-2">{{$category->name}}</h3>
                            
                        </div>
                    </x-card>
                    
                    <x-card class="mt-4 p-2 flex space-x-6">
                        <a href="/categories/{{$category->id}}/edit">
                            <i class="fa-solid fa-pencil"></i> Edit Category
                        </a>
                        <form action='/categories/{{$category->id}}' method='post'>
                            @csrf
                            @method('DELETE')
                            <button class='text-red-500'>
                                <i class='fa-solid fa-trash'></i>Delete Category
                            </button>
    
                        </form>
                    </x-card>                
    
                </div>

    </x-layout>