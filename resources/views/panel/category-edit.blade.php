<x-panel-layout>
    <x-slot name="title">Редактирование категории</x-slot>

    <x-heading>
        <h1>Редактирование категории</h1>
    </x-heading>

    @if(session('errorStatus'))
        <div class="alert alert-danger" role="alert">
            {{ session('errorStatus') }}
        </div>
    @endif

    <div class="container bg-white p-5">
        <form action="{{ route('panel.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('put')
            <x-input
                fieldLabel="Наименование"
                fieldName="title"
                fieldType="text"
                fieldRange="3-20"
                :fieldValue="$category->title"/>

            <div>
                <x-button link :href="redirect()->back()->getTargetURL()">Отмена</x-button>
                <x-button type="success">Сохранить</x-button>
            </div>

        </form>
    </div>

</x-panel-layout>
