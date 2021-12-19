console.log("conectado a javaScript");
document.querySelector("#register").addEventListener("submit",enviar);

function enviar(e){
    e.preventDefault();

    console.log("haz dado clic");

    var placas = document.querySelector("#placas").value,
        niv = document.querySelector("#niv").value;



    if(niv === ''|| placas  === ''){
        swal.fire(
            'OUPS!',
            'Los campos estan vacios',
            'error'
        )
    }else{
        console.log(placas);

        let entrar = true;
        if(entrar == true){
            // -> console.log("exito")
            //creamos el objeto de datos que enviaremos por medio de ajax
            var info = new FormData();
            //agregamos los valores al objeto con append y una llave

            info.append('placas',placas);
            info.append('niv',niv);

            var backend = new XMLHttpRequest();
            backend.open('POST','partials/baja_back.php',true);

            backend.onload = function(){
                if(this.status===200){
                    var respuesta = JSON.parse(backend.responseText);
                    console.log(respuesta);

                    if (respuesta['response']==='dos') {
                        Swal.fire({
                            icon: 'success',
                            title: '¡Todo correcto! ',
                            text:'Vehiculo eliminado!',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        setTimeout(function(){
                            location.href="index3.php";
                        }, 3000);

                    }else{
                        Swal.fire(
                            'Error inesperado!',
                            'Ha ocurrido un error',
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