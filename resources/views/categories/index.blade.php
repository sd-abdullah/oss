<x-layout>
@section('page-title', 'Categories')
@include('partials.categories._hero')
@include('partials.categories._search')



<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    {{-- @unless(count($categories) == 0)
    @foreach ($categories as $category)
    <x-category-card :category="$category" />
    @endforeach   
    @else
    <p>
        No categories found
    </p>    
    @endunless    --}} 
    @forelse ($categories as $category)
    <x-category-card :category="$category" />   
    @empty
    <p>
        No categories found
    </p>    
    @endforelse    
</div>
    
    <div class="mt-6 p-4">
        {{$categories->links()}}
    </div>


@section('creating-category')
<a href={{ url('categories/create') }} class="absolute top-1/3 right-10 bg-black text-white py-3 px-5">Create category</a>
@endsection
</x-layout>