<x-panel-layout>

    <x-slot name="title">Добавление товара</x-slot>

    <x-heading>
        <h1>Добавление товара</h1>
    </x-heading>

    @if(session('errorStatus'))
        <div class="alert alert-danger" role="alert">
            {{ session('errorStatus') }}
        </div>
    @endif

    <div class="container bg-white p-5">
        <form action="{{ route('panel.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-validation-error fieldName="image_path"/>
            <div class="input-group mb-3">
                <input type="file" name="product_image" class="form-control">
            </div>

            <hr/>
            <x-input
                fieldLabel="Наименование"
                fieldName="title"
                fieldType="text"
                fieldRange="5-30"/>
            <x-input
                fieldLabel="Описание"
                fieldName="description"
                fieldType="textarea"
                fieldRange="10-150"/>
            <x-input
                fieldLabel="Цена"
                fieldName="price"
                fieldType="number"
                fieldRange="3-7"/>

            <x-select
                fieldLabel="Категория"
                fieldName="category_id"
                :dataSet="$categories"
            />

            <div>
                <x-button link :href="back()->getTargetUrl()">Отмена</x-button>
                <x-button type="success" >Добавить</x-button>
            </div>

        </form>
    </div>

</x-panel-layout>
