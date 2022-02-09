import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap'
import Dropzone from "dropzone";

let myDropzone = new Dropzone("#img-dropzone", {
    url: 'zxcxz',
    maxFilesize: 8,
    paramName: 'randomizeIt'
});
