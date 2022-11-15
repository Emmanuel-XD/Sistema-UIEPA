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
            <td id="nombre">${r.nombre}</td>
            <td id="correo">${r.correo}</td>
            <td id="fecha">${r.fecha}</td>
            <td id="rol">${r.rol_id}</td>
            <td>
            <a href="editUser.php?accion=edit_users&id=${r.id} " class="btn btn-warning" id="editForm">
            <i class="fa fa-edit "></i> </a>
            <a href="../includes/functions.php?accion=delete_users&id=${r.id} " class="btn btn-danger btn-del" id="deleteForm">
            <i  class="fa fa-trash "></i></a></button>
            </td>
            </tr>
            `
        })
        document.getElementById("user_table").innerHTML = html;
    
    })

};
function deleteUser() {
    
    console.log(document.getElementById('correo').innerText)
    var Data = new FormData()
    Data.append('action', 'delete_user')
    Data,append('id', 'd')
    
}
window.addEventListener('load', getUsers) 
window.addEventListener('change', getUsers) 