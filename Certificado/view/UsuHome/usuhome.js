var usu_id = $('#usu_idx').val();

$(document).ready(function(){

    $.post("../../controller/usuario.php?op=total", { usu_id : usu_id }, function (data) {
        data = JSON.parse(data);
        $('#lbltotal').html(data.total);
    });

    $.post("../../controller/usuario.php?op=total", { usu_id : usu_id }, function (data) {
        data = JSON.parse(data);
        $('#lblnuevainfo').html(data.total);
    });

    $.post("../../controller/usuario.php?op=total_usuarios_ptd", function (data) {
        data = JSON.parse(data);
        $('#lblotrainfo').html(data.total);
    });


    $('#cursos_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"../../controller/usuario.php?op=listar_cursos_top10",
            type:"post",
            data:{usu_id:usu_id},
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 10,
        "order": [[ 0, "desc" ]],
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
    });

});

function certificado(curd_id){
    console.log(curd_id);
    window.open('../Certificado/index.php?curd_id='+ curd_id +'','_blank');
}
