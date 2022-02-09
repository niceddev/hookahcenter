<x-panel-layout>

    <x-slot name="title">Товары</x-slot>

    <x-heading>
        <x-button link :href="route('panel.products.create')">Добавить товар</x-button>
        <x-button type="danger">Удалить</x-button>
        <h3 class="float-end">Общее количество: {{ $products->total() }}</h3>
    </x-heading>

    @if(session('successStatus'))
        <div class="alert alert-success" role="alert">
            {{ session('successStatus') }}
        </div>
    @endif

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><input type="checkbox" ></th>
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
