function getUsers() {

    var reqData = new FormData()
    reqData.append('accion', 'get_users')
    
    fetch('../includes/functions.php',{
        method: 'POST',
        body: reqData
    }).then((res) => res.json()).then((Response) => {
        let html = ``
        Response.map(function(r){
            html += `
            <tr>
            <td>${r.nombre}</td>
            <td>${r.correo}</td>
            <td>${r.fecha}</td>
            <td>${r.rol_id}</td>
            <td>
            <a class="btn btn-warning" href="../includes/editar_insumo.php?id=<?php echo $fila['id']?> ">
            <i  class="fa fa-edit "></i> </a>
            <a href="../includes/eliminar_insumo.php?id=<?php echo $fila['id']?> " class="btn btn-danger btn-del" >
            <i  class="fa fa-trash "></i></a></button>
            </td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#entrega<?php echo $fila['id']; ?>">
            <i class="fa fa-archive" aria-hidden="true"></i>
            </button>
            </td>
            </tr>
            `
        })
        document.getElementById("user_table").innerHTML = html;
    
    })

};
window.addEventListener('load', getUsers) 
window.addEventListener('change', getUsers) 