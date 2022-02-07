<x-panel-layout>

    <x-slot name="title">Товары</x-slot>

    <x-heading :dataset="$products">
        <x-button>Добавить товар</x-button>
    </x-heading>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Картинка</th>
                <th scope="col">Название</th>
                <th scope="col">Категория</th>
                <th scope="col">Цена</th>
                <th scope="col">Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <x-list-item :dataset="$product"></x-list-item>
            @endforeach
        </tbody>

    </table>



    {{ $products->links('components.pagination') }}

</x-panel-layout>
