<form action="">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 {{(App::isLocale('ar') ? 'right-3' : 'left-3')}}">
            <i
                class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
            ></i>
        </div>
        <input
            type="text"
            name="product-search"
            class="h-14 w-full pl-10 pr-10 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="{{__("products.Search product...")}}"
        />
        <div class="absolute top-2 {{(App::isLocale('ar') ? 'left-3' : 'right-3')}}">
            <button
                type="submit"
                class="h-10 w-20 text-white rounded-lg bg-blue-500 hover:bg-blue-600"
            >
                {{__('products.Search')}}
            </button>
        </div>
    </div>
</form>