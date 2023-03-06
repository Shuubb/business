
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('pages/admin/partials/_head')
        
        @yield('style')
        
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>

    <body>
        <main>
            @include('pages/admin/partials/_sidebar')

            @yield('content')
        </main>

        @include('partials/_scripts')
    </body>

    
</html>