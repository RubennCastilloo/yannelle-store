const btnEmail = document.querySelector('.btn-email');

eventListeners();

function eventListeners(){
    if (btnEmail) {
        btnEmail.addEventListener('click', registrarCorreo);
    }
}


function notificacionFlotante(tipo, texto) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      
      Toast.fire({
        type: tipo,
        title: texto
      })
  }

  

function registrarCorreo(e){
    e.preventDefault();
    const mail = document.querySelector('.form-email').value;
    var url = window.location.pathname;
    console.log(url.split('/').length);
    if(mail === '') {
        notificacionFlotante('error', 'El campo está vacio');
    } else {
        if(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
        .test(mail)){
        if (url.split('/').length <= 3) {
                data = new FormData();

                data.append('mail', mail);

                const xhr = new XMLHttpRequest();
        
                xhr.open('POST', 'administrator/php/suscripciones-correo.php', true);

                xhr.onload = function() {
                    if(this.status === 500) {
                        notificacionFlotante('error', 'Houston, tenemos un error 500');
                    }
                    if (this.status === 200) {
                        const respuesta = JSON.parse(xhr.responseText);
                        // console.log(respuesta);
                        if (respuesta.response === 'correct') {
                        notificacionFlotante('success', 'Te has suscrito correctamente a nuestro Newsletter');
                        document.querySelector('.form-email').value = '';
                    }
                    if(respuesta.response === 'existe'){
                        notificacionFlotante('warning', 'Ya te encuentras registrado a nuestro Newsletter');
                    }
                    }
                }

                xhr.send(data);

        } if(url.split('/').length == 4) {
                data = new FormData();

                data.append('mail', mail);

                const xhr = new XMLHttpRequest();
        
                xhr.open('POST', '../administrator/php/suscripciones-correo.php', true);

                xhr.onload = function() {
                    if(this.status === 500) {
                        notificacionFlotante('error', 'Houston, tenemos un error 500');
                    }
                    if (this.status === 200) {
                        const respuesta = JSON.parse(xhr.responseText);
                        // console.log(respuesta);
                        if (respuesta.response === 'correct') {
                        notificacionFlotante('success', 'Te has suscrito correctamente a nuestro Newsletter');
                        document.querySelector('.form-email').value = '';
                    }
                    if(respuesta.response === 'existe'){
                        notificacionFlotante('warning', 'Ya te encuentras registrado a nuestro Newsletter');
                    }
                    }
                }

                xhr.send(data);
        }
        if(url.split('/').length == 5) {
            data = new FormData();

            data.append('mail', mail);

            const xhr = new XMLHttpRequest();
    
            xhr.open('POST', '../../administrator/php/suscripciones-correo.php', true);

            xhr.onload = function() {
                if(this.status === 500) {
                    notificacionFlotante('error', 'Houston, tenemos un error 500');
                }
                if (this.status === 200) {
                    const respuesta = JSON.parse(xhr.responseText);
                    // console.log(respuesta);
                    if (respuesta.response === 'correct') {
                        notificacionFlotante('success', 'Te has suscrito correctamente a nuestro Newsletter');
                        document.querySelector('.form-email').value = '';
                    }
                    if(respuesta.response === 'existe'){
                        notificacionFlotante('warning', 'Ya te encuentras registrado a nuestro Newsletter');
                    }
                }
            }

            xhr.send(data);
    }
    } else {
        notificacionFlotante('error', 'No has introducido una cuenta de correo válida');
    }
} 
}