<x-panel-layout>
    <x-slot name="title">Редактирование товара</x-slot>

    <x-heading>
        <h1>Редактирование товара</h1>
    </x-heading>

    @if(session('errorStatus'))
        <div class="alert alert-danger" role="alert">
            {{ session('errorStatus') }}
        </div>
    @endif

    <div class="container bg-white p-5">
        <form action="{{ route('panel.products.update', $product->id) }}" method="POST">
            @csrf
            @method('put')

            <hr/>
            <x-input
                fieldLabel="Наименование"
                fieldName="title"
                fieldType="text"
                fieldRange="5-30"
                :fieldValue="$product->title"/>
            <x-input
                fieldLabel="Описание"
                fieldName="description"
                fieldType="textarea"
                fieldRange="10-150"
                :fieldValue="$product->description"/>
            <x-input
                fieldLabel="Цена"
                fieldName="price"
                fieldType="number"
                fieldRange="3-7"
                :fieldValue="$product->price"/>

            <x-select
                fieldLabel="Категория"
                fieldName="category_id"
                :dataSet="$categories"
                :fieldSelected="$product->category_id"
            />

            <div>
                <x-button link :href="redirect()->back()->getTargetURL()">Отмена</x-button>
                <x-button type="success">Сохранить</x-button>
            </div>

        </form>
    </div>

</x-panel-layout>
