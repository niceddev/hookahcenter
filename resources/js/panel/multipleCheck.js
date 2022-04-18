let deleteAllButton = document.querySelector('.heading > div > .btn-danger');
let selectAllCheckbox = document.querySelector('.check-all');
let checkboxes = document.querySelectorAll('tbody .form-check-input');
let modalForm = document.querySelector('#deleteAllModal form');
let itemsId = document.querySelectorAll('.item-id');
let allItemsId = [];

if(allItemsId.length === 0){
    deleteAllButton?.setAttribute('disabled', 'disabled');
}else{
    deleteAllButton.removeAttribute('disabled');
}

selectAllCheckbox?.addEventListener('click', function (e){
    if (selectAllCheckbox.checked){
        itemsId.forEach((val) => {
            let id = parseInt(val.innerHTML);
            if(!allItemsId.includes(id)){
                allItemsId.push(id);
            }
        })

        checkboxes.forEach((checkbox) => {
            checkbox.checked = true;
        });
        deleteAllButton.removeAttribute('disabled');
    }else{
        allItemsId = [];
        checkboxes.forEach((checkbox) => {
            checkbox.checked = false;
        });
        deleteAllButton.setAttribute('disabled', 'disabled');
    }

    modalForm.setAttribute('action', location.pathname + '/' + allItemsId);
});

checkboxes.forEach((e) => {
    e?.addEventListener('click', function (){
        let id = parseInt(e.closest('tr').querySelector('.item-id').innerHTML);
        let idIndex = allItemsId.indexOf(id);

        if (!allItemsId.includes(id)){
            allItemsId.push(id);
        }else{
            allItemsId.splice(idIndex, 1);
        }

        modalForm.setAttribute('action', location.pathname + '/' + allItemsId);

        if(allItemsId.length === 0){
            deleteAllButton.setAttribute('disabled', 'disabled');
        }else{
            deleteAllButton.removeAttribute('disabled');
        }
    });
})
