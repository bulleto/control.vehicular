console.log("conectado a javaScript");
document.querySelector("#register").addEventListener("submit",enviar);

function enviar(e){
    e.preventDefault();

    console.log("haz dado clic");

    var usuario = document.querySelector("#usuario").value,
        password = document.querySelector("#password").value,
        
        
        email = document.querySelector("#email").value,
        telefono = document.querySelector("#telefono").value;
        

    if(usuario ==='' || password === '' || email === ''|| telefono === '' ){
        swal.fire(
            'OUPS!',
            'Los campos estan vacios',
            'error'
        )
    }else{
        console.log(usuario);
        console.log(password);
        console.log(email);
        console.log(telefono);

        let entrar = true;
        if(entrar == true){
            // -> console.log("exito")
            //creamos el objeto de datos que enviaremos por medio de ajax
            var info = new FormData();
            //agregamos los valores al objeto con append y una llave
            info.append('usuario',usuario);
            info.append('password',password);  
            info.append('email',email);
            info.append('telefono',telefono);
           

            var backend = new XMLHttpRequest();
            backend.open('POST','partials/perfil_back.php',true);
            backend.onload = function(){
                if(this.status===200){
                    var respuesta = JSON.parse(backend.responseText);
                            console.log(respuesta);
        
                            if (respuesta['response']==='dos') {
                                  Swal.fire({                            
                                    icon: 'success',
                                    title: '¡Datos Acualizados! ',
                                    text:'Todo correcto!',
                                    showConfirmButton: false,
                                    timer: 3000
                                  });                        
                                setTimeout(function(){
                                    location.href="logout.php";
                                }, 3000);
                                 
                            }else if (respuesta['response']==='tres') {
                                Swal.fire(
                                    'Usuario: '+ respuesta['usuario']+ ', ya Existe!',
                                    'Intenta con otro usuario',
                                    'error'
                                );
                                 
                            }
                            else{
                                Swal.fire(
                                    'Error inesperado!',
                                    'Los datos son incorrectos.',
                                    'error',
                                );
                                
                            }
        
                }
            }
            backend.send(info);

        }else{
            console.log("error");
        }

    }
        
}