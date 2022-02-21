import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap'

let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
let btnDangerEl = document.getElementsByClassName("itemDelete")
let modalYesBtn = document.getElementsByClassName('modal-yes-btn')[0]

for (let item of btnDangerEl){
    item.addEventListener('click', function (e){
        let id = e.currentTarget.closest('tr').children[1].innerHTML

        modalYesBtn.addEventListener('click', function (){
            deleteRequest('products', id)
        })
    })
}

function deleteRequest(apiUrl, id){
     fetch(apiUrl + '/' + id, {
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Content-type': 'application/json; charset=UTF-8',
            'Accept': 'application/json'
        },
        method: 'DELETE'
    })
         .then((res) => console.log(res.url))
}
