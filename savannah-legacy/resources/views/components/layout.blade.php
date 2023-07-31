<layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-header></x-header>
    <body class="antialiased">
        {{ $slot }}
    </body>
    <x-footer></x-footer>
    </html>

</layout>
