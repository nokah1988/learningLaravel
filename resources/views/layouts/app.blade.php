<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <!--including the header-->
    @include('layouts.header')
<body>
    <div id="app">
        <!-- including the navbar -->
        @include('layouts.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
