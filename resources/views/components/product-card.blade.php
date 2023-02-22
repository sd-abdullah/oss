@props(['product'])
<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href={{ route('products.show', $product->id) }}>{{__($product->name)}}</a>
            </h3>
        </div>
    </div>
</x-card>


