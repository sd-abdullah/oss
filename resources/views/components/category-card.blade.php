@props(['category'])
<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href={{ url('categories/' . $category->id) }}>{{__("user-inputs.".$category->name)}}</a>
            </h3>
        </div>
    </div>
</x-card>


