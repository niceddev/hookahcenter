<x-panel-layout>

    <x-slot name="title">Категории</x-slot>

    <x-heading :dataset="$categories">
        <x-button link :href="route('panel.categories.create')">Добавить категорию</x-button>
        <x-button type="danger">Удалить категорий</x-button>
    </x-heading>

    @if(session('successStatus'))
        <div class="alert alert-success" role="alert">
            {{ session('successStatus') }}
        </div>
    @endif

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"><input type="checkbox"></th>
            <th scope="col">ID</th>
            <th scope="col">Название</th>
            <th scope="col">Кол-во товаров</th>
            <th scope="col">Общий кэш</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <x-list-item :dataset="$category"></x-list-item>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links('components.pagination') }}

</x-panel-layout>
