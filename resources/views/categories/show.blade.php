<x-layout>
    @section('page-title', __('categories.Show category'))
    @include('partials.categories._search')
    
    <a href={{ url('/') }} class="inline-block text-black ml-4 mb-4"
                    ><i class="fa-solid fa-arrow-left"></i> {{__('categories.Back')}}
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
                        <a href={{ url('categories/' . $category->id . '/edit') }}>
                            <i class="fa-solid fa-pencil"></i> {{__('categories.Edit Category')}}
                        </a>
                        <form action={{ url('categories/' . $category->id) }} method='post'>
                            @csrf
                            @method('DELETE')
                            <button class='text-red-500'>
                                <i class='fa-solid fa-trash'></i>{{__('categories.Delete Category')}}
                            </button>
    
                        </form>
                    </x-card>                
    
                </div>

    </x-layout>