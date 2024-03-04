var usu_id = $('#usu_idx').val();

$(document).ready(function(){
    $.post("../../controller/usuario.php?op=mostrar", { usu_id : usu_id }, function (data) {
        data = JSON.parse(data);
        $('#usu_nom').val(data.usu_nom);
        $('#usu_apep').val(data.usu_apep);
        $('#usu_apem').val(data.usu_apem);
        $('#usu_correo').val(data.usu_correo);
        $('#usu_telf').val(data.usu_telf);
        $('#usu_pass').val(data.usu_pass);
        $('#usu_sex').val(data.usu_sex).trigger("change");
    });
});


$(document).on("click","#btnactualizar", function(){

    $.post("../../controller/usuario.php?op=update_perfil", { 
        usu_id : usu_id,
        usu_nom : $('#usu_nom').val(),
        usu_apep : $('#usu_apep').val(),
        usu_apem : $('#usu_apem').val(),
        usu_pass : $('#usu_pass').val(),
        usu_sex : $('#usu_sex').val(),
        usu_telf : $('#usu_telf').val()
     }, function (data) {
    });

    Swal.fire({
        title: 'Correcto!',
        text: 'Se actualizo Correctamente',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    })
});

// Para camara
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const captureBtn = document.getElementById('capture-btn');
const saveBtn = document.getElementById('save-btn');
const constraints = {
    video: true
};

async function initCamera() {
    try {
        const stream = await navigator.mediaDevices.getUserMedia(constraints);
        handleSuccess(stream);
    } catch (e) {
        console.error('Error al acceder a la cámara: ', e);
    }
}

function handleSuccess(stream) {
    video.srcObject = stream;
}

captureBtn.addEventListener('click', function() {
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
});

saveBtn.addEventListener('click', function() {
    const imgData = canvas.toDataURL('image/png');
    // Envía la imagen a través de AJAX o la guardas en un campo de formulario para enviarlo al servidor
});

initCamera();