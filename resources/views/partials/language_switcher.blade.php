<div class="flex justify-center sm:justify-start sm:pt-0">
    @foreach ($available_locales as $locale_name => $locale_value)
        @if ($locale_value === $current_locale)
            <span class="ml-2 mr-2 text-laravel font-bold">
                {{ __('main-theme.'.$locale_name) }}
            </span>
        @else
            <a href={{route('language', $locale_value)}} class="ml-1 underline ml-2 mr-2">
                <span>
                    {{ __('main-theme.'.$locale_name) }}
                </span>
            </a>
        @endif    
    @endforeach
</div>