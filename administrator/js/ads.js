const btnAds = document.querySelector('#new-ad');
const listadoAds = document.querySelector('.listado-ads tbody');

eventListeners();

function eventListeners() {
    if (btnAds) {
        btnAds.addEventListener('click', newAd);
    }
    if (listadoAds) {
        listadoAds.addEventListener('click', deleteAd)
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

function newAd(e) {
    e.preventDefault();

    const titulo = document.querySelector('#titulo').value.trim(),
        imagen = document.querySelector('#image').value,
        descripcion = document.querySelector('#description').value.trim(),
        link = document.querySelector('#link').value.trim(),
        ubicacion = document.querySelector('#ubicacion').value,
        image = $('#image')[0].files[0];

        if(titulo === '' || imagen === '' || descripcion === '' || link === '' || ubicacion === ''){
            notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {

                data = new FormData();

                data.append('titulo', titulo);
                data.append('descripcion', descripcion);
                data.append('link', link);
                data.append('ubicacion', ubicacion);
                data.append('image', image);

                $.ajax({
                    url: 'php/nueva-publicidad.php',
                    type: 'post',
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                    var response = JSON.parse(data);
                    console.log(response);

                    

                    if (response.response === 'correct') {
                        notificacionFlotante('success', 'Publicidad publicada correctamente');
                        document.querySelector('form').reset();
                        const form = document.querySelector('#ads-table');
                        
                        let resultadoUbicacion;
                        if(response.ubicacion === '1'){
                            resultadoUbicacion = 'Principal 1'
                        }
                        if(response.ubicacion === '2'){
                            resultadoUbicacion = 'Principal 2'
                        }
                        if(response.ubicacion === '3'){
                            resultadoUbicacion = 'Principal Aisde'
                        }
                        if(response.ubicacion === '4'){
                            resultadoUbicacion = 'Notas 1'
                        }
                        if(response.ubicacion === '5'){
                            resultadoUbicacion = 'Notas Aside'
                        }
                        if(response.ubicacion === '6'){
                            resultadoUbicacion = 'Categorias 1'
                        }
                        if(response.ubicacion === '7'){
                            resultadoUbicacion = 'Categorias Aside'
                        }
                    
                        const listaAds = document.createElement('tr');
                        listaAds.innerHTML = `
                            <tr>
                                <td>${response.titulo}</td>
                                <td>${response.fecha}</td>
                                <td>${resultadoUbicacion}</td>
                                <td>
                                    <input type="hidden" name="" value="${response.imagen}" id="file-name">
                                    <button class="btn btn-sm btn-danger delete-ad" data-id="${response.id}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        `;
                        
                        form.appendChild(listaAds);

                        document.querySelector('form').reset();
                    }
                  }
              });
        }
}

function deleteAd(e) {
    if(e.target.parentElement.classList.contains('delete-ad')){
        const id = e.target.parentElement.getAttribute('data-id');
        const imagen = document.querySelector('#file-name').value;
    
        Swal.fire({
            title: '¿Estas seguro(a)?',
            text: "Esta acción no se podrá deshacer",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#1d9e19',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, borrar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value) {
                // console.log(id);
                const data = new FormData();
        
                data.append('id', id);
                data.append('imagen', imagen);
        
                const xhr = new XMLHttpRequest();
                
                xhr.open('POST', 'php/borrar-ad.php', true);
        
                xhr.onload = function() {
                if(this.status === 500) {
                    notificacionFlotante('error', 'Houston, tenemos un error 500');
                }
                if (this.status === 200) {
                    const respuesta = JSON.parse(xhr.responseText);
                    // console.log(respuesta);
                    if (respuesta.response === 'correct') {

                    e.target.parentElement.parentElement.parentElement.remove();
                    if (result.value) {
                        Swal.fire(
                        'Eliminado',
                        'Publicidad eliminada correctamente',
                        'success'
                        )
                    }
                    
                    }
                    if (respuesta.response === 'error') {
                    if (result.value) {
                        Swal.fire(
                        'Error',
                        'No se puede eliminar la publicidad',
                        'error'
                        )
                    }
                    }
                }
                }
        
                xhr.send(data);
            
            }
        })
    }
}