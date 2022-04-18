<x-panel-layout>

    <x-slot name="title">Товары</x-slot>

    <x-heading>
        <x-modalAllCheckbox/>
        <div class="d-flex align-items-end pb-3">
            <x-button link :href="route('panel.products.create')">Добавить товар</x-button>
            <x-button type="danger" data-bs-toggle="modal" data-bs-target="#deleteAllModal" disabled>Удалить товары</x-button>
        </div>
        <div>
            <h5>Количество продуктов: {{ $products->total() }} шт.</h5>
            {{ $products->links('components.pagination') }}
        </div>
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

    <table class="table table-hover pe-auto mb-5">
        <thead>
            <tr>
                <th scope="col"><input type="checkbox" class="form-check-input check-all"></th>
                <th scope="col">ID</th>
                <th scope="col">Картинка</th>
                <th scope="col">Название</th>
                <th scope="col">Категория</th>
                <th scope="col">Цена</th>
                <th scope="col">Действия</th>
            </tr>
        </thead>
        <tbody>
            <x-modalItem/>
            @foreach($products as $product)
                <x-list-item :dataset="$product"></x-list-item>
            @endforeach
        </tbody>
    </table>

    {{ $products->links('components.pagination') }}

</x-panel-layout>
