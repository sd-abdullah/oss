@props(['category'])
<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href="/categories/{{$category["id"]}}">{{$category->name}}</a>
            </h3>
        </div>
    </div>
</x-card>


