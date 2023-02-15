@props(['product'])
<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href="/products/{{$product["id"]}}">{{$product->name}}</a>
            </h3>
        </div>
    </div>
</x-card>


