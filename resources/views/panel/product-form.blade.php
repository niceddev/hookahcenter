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
            <x-input type="default" name="title">
                Наименование
            </x-input>
            <x-input type="textarea" name="description">
                Описание
            </x-input>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>

</x-panel-layout>
