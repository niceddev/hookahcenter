<x-panel-layout>

    <x-slot name="title">Категории</x-slot>

    <x-heading :dataset="$categories">
        <x-button>Добавить категорию</x-button>
    </x-heading>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        @foreach($categories as $category)
            <x-category-card :dataset="$category"></x-category-card>
        @endforeach
    </div>

    {{ $categories->links('components.pagination') }}

</x-panel-layout>
