console.log("conectado a javaScript");
document.querySelector("#register").addEventListener("submit",enviar);

function enviar(e){
    e.preventDefault();

    console.log("haz dado clic");

    var usuario = document.querySelector("#usuario").value,
        password = document.querySelector("#password").value,
        vehiculos = document.querySelector("#vehiculos").value,
        licencia = document.querySelector("#licencia").value,
        email = document.querySelector("#email").value,
        telefono = document.querySelector("#telefono").value,
        direccion = document.querySelector("#direccion").value,
        postal = document.querySelector("#postal").value,
        estado = document.querySelector("#estado").value;
        

    if(usuario ==='' || password === ''|| vehiculos === ''|| licencia === ''|| email === ''|| telefono === '' || direccion === '' || postal === '' || estado === ''){
        swal.fire(
            'OUPS!',
            'Los campos estan vacios',
            'error'
        )
    }else{
        console.log(usuario);

        let entrar = true;
        if(entrar == true){
            // -> console.log("exito")
            //creamos el objeto de datos que enviaremos por medio de ajax
            var info = new FormData();
            //agregamos los valores al objeto con append y una llave
            info.append('usuario',usuario);
            info.append('password',password);
            info.append('vehiculos',vehiculos);
            info.append('licencia',licencia);
            info.append('email',email);
            info.append('telefono',telefono);
            info.append('direccion',direccion);
            info.append('postal',postal);
            info.append('estado',estado);

            var backend = new XMLHttpRequest();
            backend.open('POST','partials/registro_back.php',true);

            backend.onload = function(){
                if(this.status===200){
                    var respuesta = JSON.parse(backend.responseText);
                    console.log(respuesta);

                    if (respuesta['response']==='dos') {
                        Swal.fire(
                            'Usuario: '+ respuesta['usuario']+ ', ya Existe!',
                            'Intenta con otro usuario',
                            'error'
                        );
                         
                    }else{                        
                        Swal.fire({                            
                            icon: 'success',
                            title: 'Acción Exitosa! ',
                            text:'Usuario Registrado',
                            showConfirmButton: false,
                            timer: 3000
                          });                        
                        setTimeout(function(){
                            location.href="login.php";
                        }, 3000);
                    }
                }else{
                    Swal.fire(
                        'Error de Conexion!',
                        'Contactanos',
                        'error'
                    );
                }
            }
            backend.send(info);

        }else{
            console.log("error");
        }

    }
        
}