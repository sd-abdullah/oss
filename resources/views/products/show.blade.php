<x-layout>
    @section('page-title', __('products.Show product'))
    @include('partials.products._search')
    
    <a href={{ url('products') }} class="inline-block text-black ml-4 mb-4"
                    ><i class="fa-solid fa-arrow-left"></i> {{__('products.Back')}}
                </a>
                <div class="mx-4">
                    <x-card class="py-10">
                        <div
                            class="flex flex-col items-center justify-center text-center"
                        >
    
                            <h3 class="text-2xl mb-2">{{$product->name}}</h3>
                            
                        </div>
                    </x-card>
                    
                    <x-card class="mt-4 p-2 flex space-x-6">
                        <a href={{ url('products/' . $product->id . '/edit') }}>
                            <i class="fa-solid fa-pencil"></i> {{__('products.Edit product')}}
                        </a>
                        <form action={{ url('products/' . $product->id) }} method='post'>
                            @csrf
                            @method('DELETE')
                            <button class='text-red-500'>
                                <i class='fa-solid fa-trash'></i>{{__('products.Delete product')}}
                            </button>
    
                        </form>
                    </x-card>                
    
                </div>

    </x-layout>