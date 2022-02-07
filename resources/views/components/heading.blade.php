<div class="py-5 bg-light d-flex justify-content-between align-items-baseline">

    {{ $slot }}

    <h3>Общее количество: {{ $dataset->total() }}</h3>

</div>
