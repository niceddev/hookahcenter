<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark min-vh-100" style="width: 350px;">
    <a href="{{ route('panel.dashboard') }}" class="d-flex justify-content-center text-decoration-none">
        <img class="my-3" width="200px"
             src="{{ asset('images/logo.svg') }}"/>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <x-sidebar-link :href="route('panel.dashboard')" :active="request()->routeIs('panel.dashboard')">
            Панель управления
        </x-sidebar-link>
        <x-sidebar-link :href="route('panel.categories.index')" :active="request()->routeIs('panel.categories.index')">
            Добавить категории
        </x-sidebar-link>
        <x-sidebar-link :href="route('panel.products.index')" :active="request()->routeIs('panel.products.index')">
            Добавить товар
        </x-sidebar-link>
        <x-sidebar-link :href="route('panel.settings')" :active="request()->routeIs('panel.settings')">
            Настройки
        </x-sidebar-link>
    </ul>
    <hr>
    <p>Админ-панель {{ config('app.name') }}</p>
</div>
