<x-layout>
    @section('page-title', __('categories.Show category'))
    @include('partials.categories._search')
    
    <a href={{ route('categories.index') }} class="inline-block text-black mx-4 mb-4"
                    >
                    @if(App::isLocale('ar'))
                    <i class="fa-solid fa-arrow-right">
                    </i> 
                    @else
                    <i class="fa-solid fa-arrow-left">
                    </i> 
                    @endif
                    {{__('categories.Back')}}
                </a>
                <div class="mx-4">
                    <x-card class="py-10">
                        <div
                            class="flex flex-col items-center justify-center text-center"
                        >
    
                            <h3 class="text-2xl mb-2">{{__('user-inputs.'.$category->name)}}</h3>
                            
                        </div>
                    </x-card>
                    
                    <x-card class="mt-4 p-2 flex space-x-6">
                        <a href={{ route('categories.edit', $category->id) }} class="{{App::isLocale('ar') ? 'pl-6' : ''}}">
                            <i class="fa-solid fa-pencil"></i> {{__('categories.Edit Category')}}
                        </a>
                        <form action={{ route('categories.destroy', $category->id) }} method='post'>
                            @csrf
                            @method('DELETE')
                            <button class='text-red-500'>
                                <i class='fa-solid fa-trash'></i>{{__('categories.Delete Category')}}
                            </button>
    
                        </form>
                    </x-card>                
    
                </div>

    </x-layout>