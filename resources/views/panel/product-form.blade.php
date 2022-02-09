<x-panel-layout>

    <x-slot name="title">Добавление товара</x-slot>

    <x-heading>
        <h1>Добавление товара</h1>
    </x-heading>

    <div class="container bg-white p-5">
        <form action="{{ route('panel.products.store') }}" method="POST">
            @csrf
            <div id="img-dropzone" class="dropzone btn bg-info w-100 h-auto">
                <span class="dz-message text-light text-center align-middle">Загрузить...</span>
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
                <x-button link :href="route('panel.products.index')">Отмена</x-button>
                <x-button type="success" >Добавить</x-button>
            </div>

        </form>
    </div>

</x-panel-layout>
