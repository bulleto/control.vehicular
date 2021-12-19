console.log("Conectado a js y base");



$('#cars').on('change', function(e) {

    e.preventDefault();

    console.log("Haz echo clic");

    var opcion= this.value;

    console.log(opcion);

    var datos =  new FormData();
    datos.append('opcion',opcion);
    var backend = new XMLHttpRequest();
    backend.open('POST','partials/index_back.php',true);

    backend.onload = function(){
        if(this.status===200){
            var respuesta = JSON.parse(backend.responseText);
            console.log(respuesta);

            if (respuesta['response']==='dos') {
                Swal.fire({
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1000
                });
                setTimeout(function(){
                    location.reload();
                }, 1000);

            }else{
                Swal.fire(
                    'Error inesperado!',
                    'Cmoniquese con el admisntrador.',
                    'error',
                );

            }

        }
    }
    backend.send(datos);





});





