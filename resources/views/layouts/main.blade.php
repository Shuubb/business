
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('partials/_head')
        
        @yield('style')

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>

    <body>
        <header> 
            @include('partials/_navbar') 
        </header>
        
        <main>
            @yield('content')
        </main>

        <footer>
            @include('partials/_footer')
        </footer>

        @include('partials/_scripts')
    </body>

    
</html>