<x-layout>
    @section('page-title', __('products.Products'))
    @include('partials.products._hero')
    @include('partials.products._search')
    
    
    
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    
        {{-- @unless(count($products) == 0)
        @foreach ($products as $product)
        <x-product-card :product="$product" />
        @endforeach     
        @else
        <p>
            No products found
        </p>    
        @endunless     --}}        
        
        @forelse ($products as $product)
        <x-product-card :product="$product" /> 
        @empty
        <p>
            {{__('products.No products found')}}
        </p>    
        @endforelse    
        </div>
        
        <div class="mt-6 p-4">
            {{$products->links()}}
        </div>
        
    @section('creating-product')
    <a href={{ route('products.create') }} class="absolute top-1/3 {{(App::isLocale('ar') ? 'left-10' : 'right-10')}} bg-black text-white py-3 px-5">{{__('products.Create product')}}</a>
    @endsection
</x-layout>