
const btnSub = document.getElementById("loginForm")
btnSub.addEventListener('submit',(function(e){
e.preventDefault();    
    let userData = new FormData(document.forms.namedItem("loginData"))
    userData.append("login", "login")
    fetch('../sesion/sessionValidator.php',{
        method: 'POST',
        body: userData
    }).then((res) => res.json()).then((response) => {
        console.log();
        if(response === "success"){
            window.location.replace("../../views/categorias.php")
        }
        if(response === "error"){
             var valHtml = `<div class="text-center alert alert-danger" role="alert">Hay un error con tus credenciales, intenta de nuevo o contacta con el administrador</div>`;
            document.getElementById("alert").innerHTML = valHtml;
            setTimeout(() => { document.getElementById("alert").innerHTML = ``; }, 2500);
        }
        
    })
}))