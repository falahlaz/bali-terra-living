<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @vite(['resources/css/style.css', 'resources/js/app.js'])

        <title>{{ $title ?? 'Control Panel' }}</title>
    </head>
    <body
        x-data="{ page: '{{ $page ?? 'Dashboard' }}', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
        x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'dark bg-gray-900': darkMode === true}"
    >
        <div class="flex h-screen overflow-hidden">
            <x-nav.sidebar />

            <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
                <x-nav.header />

                {{ $slot }}
            </div>
        </div>
    </body>
</html>
