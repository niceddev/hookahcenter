<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark min-vh-100" style="width: 350px;">
    <a href="{{ route('panel.dashboard') }}" class="d-flex justify-content-center text-decoration-none">
        <img class="my-3" width="200px"
             src="{{ asset('images/logo.svg') }}"/>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <x-sidebar-link :href="route('panel.dashboard')" :activee="request()->routeIs('panel.dashboard')">
            Панель управления
        </x-sidebar-link>
        <x-sidebar-link :href="route('panel.categories')" :activee="request()->routeIs('panel.categories')">
            Добавить категории
        </x-sidebar-link>
        <x-sidebar-link :href="route('panel.products')" :activee="request()->routeIs('panel.products')">
            Добавить товар
        </x-sidebar-link>
        <x-sidebar-link :href="route('panel.settings')" :activee="request()->routeIs('panel.settings')">
            Настройки
        </x-sidebar-link>
    </ul>
    <hr>
    <p>Админ-панель {{ config('app.name') }}</p>
</div>
