<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              laravel: '#5d8dfc',
            },
          },
        },
      }
  </script>
  <title>{{__('main-theme.OSS')}} | @yield('page-title')</title>
  
</head>

<body class="mb-48" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">
  
  <nav class="flex justify-between items-center mb-4 mt-4 mx-3">
    <a href={{ route('categories.index') }}><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo" /></a>
    @include('partials/language_switcher')
    <ul class="flex space-x-3 text-lg">
      @auth
      <li>
        <span class="font-bold uppercase">
          {{__('main-theme.Welcome')}} {{auth()->user()->name}}
        </span>
      </li>
      <li>
        <a href={{ route('categories.index') }} class="hover:text-laravel">
          {{__('main-theme.Categories')}}
        </a>
      </li>
      <li>
        <a href={{ route('products.index') }} class="hover:text-laravel">
          {{__('main-theme.Products')}}
        </a>
      </li>
      <li>
        <a href={{ route('categories.index') }} class="hover:text-laravel"><i class="fa-solid fa-gear"></i> {{__('main-theme.Manage Products')}}</a>
      </li>
      <li>
        <form class="inline" method="POST" action={{ route('categories.index') }}>
          @csrf
          <button type="submit">
            <i class="fa-solid fa-door-closed"></i> {{__('main-theme.Logout')}}
          </button>
        </form>
      </li>
      @else
      <li>
        <span class="font-bold uppercase {{(App::isLocale('ar') ? 'pl-3' : '')}}">
            {{__('main-theme.Welcome To OSS')}}
        </span>
      </li>
      <li>
        <a href={{ route('categories.index') }} class="hover:text-laravel">
          {{__('main-theme.Categories')}}
        </a>
      </li>
      <li>
        <a href={{ route('products.index') }} class="hover:text-laravel">
          {{__('main-theme.Products')}}
        </a>
      </li>
      <li>
        <a href={{ route('categories.index') }} class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> {{__('main-theme.Register')}}</a>
      </li>
      <li>
        <a href={{ route('categories.index') }} class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> {{__('main-theme.Login')}}</a>
      </li>
      @endauth
    </ul>
  </nav>

  <main>
    {{$slot}}
  </main>
  <footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="mx-2"><i class="fa-regular fa-copyright px-2"></i>{{__('main-theme.Copyrights 2023, All Rights reserved')}}</p>
  @yield('creating-product')
  @yield('creating-category')
  </footer>

  <x-flash-messages />
</body>

</html> 
