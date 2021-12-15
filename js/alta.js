console.log("conectado a javaScript");
document.querySelector("#register").addEventListener("submit",enviar);

function enviar(e){
    e.preventDefault();

    console.log("haz dado clic");

    var marca = document.querySelector("#marca").value,
        combustible = document.querySelector("#combustible").value,
        modelo = document.querySelector("#modelo").value,
        tipo = document.querySelector("#tipo").value,
        placas = document.querySelector("#placas").value,
        cilindros = document.querySelector("#cilindros").value,
        niv = document.querySelector("#niv").value,
        motor = document.querySelector("#motor").value,
        poliza = document.querySelector("#poliza").value;
        propietario = document.querySelector("#propietario").value;
        seguro = document.querySelector("#seguro").value;

        

    if(marca ==='' || combustible === ''|| niv === ''|| motor === ''|| placas  === ''|| modelo === '' || tipo === '' || cilindros === '' || poliza === ''){
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
            info.append('marca',marca);
            info.append('combustible',combustible);
            info.append('modelo',modelo);
            info.append('tipo',tipo );
            info.append('placas',placas);
            info.append('cilindros',cilindros);
            info.append('niv',niv);
            info.append('motor',motor);
            info.append('poliza',poliza);
            info.append('propietario',propietario);
            info.append('seguro',seguro);

            var backend = new XMLHttpRequest();
            backend.open('POST','partials/alta_back.php',true);

            backend.onload = function(){
                if(this.status===200){
                    var respuesta = JSON.parse(backend.responseText);
                    console.log(respuesta);

                    if (respuesta['response']==='dos') {
                        Swal.fire(
                            'Vehiculo: '+ respuesta['marca']+' ' +respuesta['placas']+ ', ya Existe!',
                            'Intenta con otro',
                            'error'
                        );
                         
                    }else{                        
                        Swal.fire({                            
                            icon: 'success',
                            title: 'Acción Exitosa! ',
                            text:'Vehiculo Registrado',
                            showConfirmButton: false,
                            timer: 3000
                          });                        
                        setTimeout(function(){
                            location.href="vehiculos.php";
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