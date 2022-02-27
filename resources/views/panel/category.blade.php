<x-panel-layout>

    <x-slot name="title">Категории</x-slot>

    <x-heading :dataset="$categories">
        <x-modalAllCheckbox/>
        <x-button link :href="route('panel.categories.create')">Добавить категорию</x-button>
        <x-button type="danger" data-bs-toggle="modal" data-bs-target="#deleteAllModal">Удалить категорий</x-button>
        <h3 class="float-end">Общее количество: {{ $categories->total() }}</h3>
    </x-heading>

    @if(session('successStatus'))
        <div class="alert alert-success" role="alert">
            {{ session('successStatus') }}
        </div>
    @elseif(session('errorStatus'))
        <div class="alert alert-danger" role="alert">
            {{ session('errorStatus') }}
        </div>
    @endif

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"><input type="checkbox" class="form-check-input check-all"></th>
            <th scope="col">ID</th>
            <th scope="col">Название</th>
            <th scope="col">Кол-во товаров</th>
            <th scope="col">Общий кэш</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
            <x-modalItem/>
             @foreach($categories as $category)
                <x-list-item :dataset="$category"></x-list-item>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links('components.pagination') }}

</x-panel-layout>
