const btnPublicar = document.querySelector('#new-description');
const editDescription = document.querySelector('#edit-description');
const listadoDescripciones = document.querySelector('.listado-descripciones tbody')

eventListeners();

function eventListeners() {
    if (btnPublicar) {
        btnPublicar.addEventListener('click', publicarDescripcion);
    }
    if (editDescription) {
        editDescription.addEventListener('click', editarDescripcion);
    }
    if (listadoDescripciones) {
        listadoDescripciones.addEventListener('click', eliminarDescripcion);
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

function publicarDescripcion(e) {
    e.preventDefault();
    
    const categoria = document.querySelector('#categoria').value,
    subcategoria = document.querySelector('#subcategoria').value,
    descripcion = document.querySelector('#contenido').value.trim();

    if (categoria === '' || subcategoria === '' || descripcion === '') {
        notificacionFlotante('error', 'Todos los campos son obligatorios');
    } else {
            data = new FormData();

            data.append('categoria', categoria);
            data.append('subcategoria', subcategoria);
            data.append('descripcion', descripcion);

            $.ajax({
                url: 'php/descripciones.php',
                type: 'post',
                data: data,
                contentType: false,
                processData: false,
                success: function(data) {
                    var response = JSON.parse(data);
                    console.log(response);              

                    if (response.response === 'correct') {
                        notificacionFlotante('success', 'Descripción publicada');
                        document.querySelector('form').reset();
                        const table = document.querySelector('#description-table');
                    
                        const listaUsuario = document.createElement('tr');
                        listaUsuario.innerHTML = `
                            <tr class="text-uppercase">
                                <td>${response.categoria}</td>
                                <td>${response.subcategoria}</td>
                                <td>
                                    <a href="edit-description.php?id=${response.id}" class="btn btn-sm btn-info">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger delete-description" data-id="${response.id}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                    `;
                    
                    table.appendChild(listaUsuario);

                    // document.querySelector('#link-input').value = "";
                    }
                    if(response.response === 'existe'){
                    notificacionFlotante('error', 'El nombre de archivo ya existe');
                    }
                    if (response.response === 'error') {
                    notificacionFlotante('error', 'Houston Tenemos un Problema');
                    }
                }
            });
        
    }
}

function editarDescripcion(e) {
    e.preventDefault();
    const categoria = document.querySelector('#categoria').value,
    subcategoria = document.querySelector('#subcategoria').value,
    descripcion = document.querySelector('#contenido').value.trim(),
    id = document.querySelector('#id-description').value;

    if (categoria === '' || subcategoria === '' || descripcion === '') {
        notificacionFlotante('error', 'Todos los campos son obligatorios');
    } else {
        data = new FormData();

        data.append('categoria', categoria);
        data.append('subcategoria', subcategoria);
        data.append('descripcion', descripcion);
        data.append('id', id);

        $.ajax({
            url: 'php/editar-descripciones.php',
            type: 'post',
            data: data,
            contentType: false,
            processData: false,
            success: function(data) {
                var response = JSON.parse(data);
                console.log(response);              

                if (response.response === 'correct') {
                    notificacionFlotante('success', 'Descripción editada');
                    setTimeout(() => {
                        window.location.href = './descriptions.php';
                      }, 1500);
                }
                if (response.response === 'error') {
                notificacionFlotante('error', 'Houston Tenemos un Problema');
                }
            }
        });
    }
}

function eliminarDescripcion(e){
    if(e.target.parentElement.classList.contains('delete-description')){
        e.preventDefault();
        const id = e.target.parentElement.getAttribute('data-id');
        
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
            const data = new FormData();
    
            data.append('id', id);
      
            const xhr = new XMLHttpRequest();
            
            xhr.open('POST', 'php/borrar-descripcion.php', true);
    
            xhr.onload = function() {
              if(this.status === 500) {
                notificacionFlotante('error', 'Houston, tenemos un error 500');
              }
              if (this.status === 200) {
                const respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);
                if (respuesta.response === 'correct') {
                  e.target.parentElement.parentElement.parentElement.remove();
                  if (result.value) {
                    Swal.fire(
                      'Eliminado',
                      'Descripción eliminada correctamente',
                      'success'
                    )
                  }
                  
                }
                if (respuesta.response === 'error') {
                  if (result.value) {
                    Swal.fire(
                      'Error',
                      'No se puede eliminar la nota',
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