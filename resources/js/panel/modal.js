let btnDangerEl = document.getElementsByClassName("itemDelete");
let modalItemTitle = document.querySelector('#deleteModal .modal-item-title');
let modalForm = document.querySelector('#deleteModal form');

for (let item of btnDangerEl){
    item.addEventListener('click', function (e){
        let id = e.currentTarget.closest('tr').querySelector('.item-id').innerHTML;
        let itemTitle = e.currentTarget.closest('tr').querySelector('.item-title').innerHTML;

        modalItemTitle.innerHTML = 'Удалить ' + itemTitle + '?';
        modalForm.setAttribute('action', location.pathname + '/' + id);
    })
}
