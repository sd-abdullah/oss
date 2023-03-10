<x-layout>
    @section('page-title', __('products.Show product'))
    @include('partials.products._search')
    
    <a href={{ route('products.index') }} class="inline-block text-black mx-4 mb-4"
                    > 
                    @if(App::isLocale('ar'))
                    <i class="fa-solid fa-arrow-right">
                    </i> 
                    @else
                    <i class="fa-solid fa-arrow-left">
                    </i> 
                    @endif
                     {{__('products.Back')}}
                </a>
                <div class="mx-4">
                    <x-card class="py-10">
                        <div
                            class="flex flex-col items-center justify-center text-center"
                        >
    
                            <h3 class="text-2xl mb-2">{{__($product->name)}}</h3>
                            
                        </div>
                    </x-card>
                    
                    <x-card class="mt-4 p-2 flex space-x-6">
                        <a href={{ route('products.edit', $product->id) }} class="{{App::isLocale('ar') ? 'pl-6' : ''}}">
                            <i class="fa-solid fa-pencil"></i> {{__('products.Edit product')}}
                        </a>
                        <form action={{ route('products.destroy', $product->id) }} method='post'>
                            @csrf
                            @method('DELETE')
                            <button class='text-red-500'>
                                <i class='fa-solid fa-trash'></i>{{__('products.Delete product')}}
                            </button>
    
                        </form>
                    </x-card>                
    
                </div>

    </x-layout>