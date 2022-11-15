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
            <a class="btn btn-warning" id="editForm">
            <i  class="fa fa-edit "></i> </a>
            <a class="btn btn-danger btn-del" id="deleteForm">
            <i  class="fa fa-trash "></i></a></button>
            </td>
            </tr>
            `
        })
        document.getElementById("user_table").innerHTML = html;
    
    })

};
function deleteUser() {
    var Data = new FormData()
    Data.append('action', '')
    
}
window.addEventListener('load', getUsers) 
window.addEventListener('change', getUsers) 
document.getElementById("deleteForm").addEventListener('click',)