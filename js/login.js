console.log("Conectado a js y base");

document.querySelector("#login").addEventListener("submit", enviar);

function enviar(e){

    e.preventDefault();
    console.log("Haz echo clic");

    var usuario = document.querySelector("#usuario").value,
    password = document.querySelector("#password").value;

    //console.log(usuario + password);


    var datos =  new FormData();
    datos.append('usuario',usuario);
    datos.append('password',password);


    //objeto ajax
    var respuesta = new XMLHttpRequest();

    console.log(respuesta);
    
    respuesta.open('POST','partials/login_back.php',true);
    respuesta.onload = function(){
        if(this.status===200){
            var respuesta = JSON.parse(respuesta.responseText);
                    console.log(respuesta);

                    if (respuesta['response']==='dos') {
                          Swal.fire({                            
                            icon: 'success',
                            title: '¡Inicio correcto! ',
                            text:'Bienvenido' + respuesta['usuario'],
                            showConfirmButton: false,
                            timer: 3000
                          });                        
                        setTimeout(function(){
                            location.href="index3.php";
                        }, 3000);
                         
                    }else{
                        Swal.fire(
                            'Login incorrecto!',
                            'usuario incorrecto',
                            'error',
                        );
                        
                    }

        }
    }
    respuesta.send(datos);

}
