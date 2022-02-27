<div class="modal fade" id="deleteAllModal" tabindex="-1"  style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Вы уверены?</h3>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    <b>Внимение! </b>Все элементы будут удалены!
                </div>
                <form action="/" method="POST">
                    @csrf
                    @method('delete')
                    <p class="visually-hidden modal-all-items-id">id</p>
                    <div class="modal-footer flex-column border-top-0">
                        <x-button type="danger" class="w-100 mx-0 modal-yes-btn">Да</x-button>
                        <x-button type="primary" btn class="w-100 mx-0 modal-no-btn" data-bs-dismiss="modal" data-bs-target="#deleteAllModal">Нет</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
