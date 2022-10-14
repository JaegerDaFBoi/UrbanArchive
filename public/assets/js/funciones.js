
document.getElementById('btn-agregar').addEventListener('click',(e)=>{
e.preventDefault();

    let frm = document.getElementById('frm-registrar');

    let formData = new FormData(frm);

    $.ajax({
        method: 'post',
        url:'php/funciones.php',
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: (e)=>{

        }
    })


})