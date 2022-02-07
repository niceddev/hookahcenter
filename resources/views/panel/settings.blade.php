<x-panel-layout>

    <x-slot name="title">Настройки</x-slot>

    <div class="list-group container-fluid p-5">
        <form method="POST" action="{{ route('panel.logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Выход</button>
        </form>
    </div>

</x-panel-layout>
