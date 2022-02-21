<x-panel-layout>

    <x-slot name="title">Добавление категории</x-slot>

    <x-heading>
        <h1>Добавление категории</h1>
    </x-heading>

    @if(session('errorStatus'))
        <div class="alert alert-danger" role="alert">
            {{ session('errorStatus') }}
        </div>
    @endif

    <div class="container bg-white p-5">
        <form action="{{ route('panel.categories.store') }}" method="POST">
            @csrf
            <x-input
                fieldLabel="Наименование"
                fieldName="title"
                fieldType="text"
                fieldRange="5-30"/>

            <div>
                <x-button link :href="route('panel.categories.index')">Отмена</x-button>
                <x-button type="success">Добавить</x-button>
            </div>

        </form>
    </div>

</x-panel-layout>
