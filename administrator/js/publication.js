
const btnFiles= document.querySelector('#upload-files');
const btnCopy = document.querySelector('.copy-url');
const listadoArchivos = document.querySelector('.listado-archivos tbody');
const todosArchivos = document.querySelector('.todos-archivos');
const btnPublish = document.querySelector('#new-publication');
const listadoPublicaciones = document.querySelector('.listado-publicaciones tbody');
const btnEditPublication = document.querySelector('#edit-publication');

eventListeners();

function eventListeners() {
    if (btnFiles) {
      btnFiles.addEventListener('click', uploadFiles);
    }
    if (listadoArchivos) {
      listadoArchivos.addEventListener('click', actionFiles);
    }
    if (todosArchivos) {
      todosArchivos.addEventListener('click', deleteFiles);
    }
    if (btnPublish) {
      btnPublish.addEventListener('click', publishContent)
    }
    if (listadoPublicaciones) {
      listadoPublicaciones.addEventListener('click', deletePublication)
    }
    if (btnEditPublication) {
      btnEditPublication.addEventListener('click', editPublication);
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

function uploadFiles(e){
    e.preventDefault();

    const file = document.querySelector('#link-input').value,
        uploadFile = $('#link-input')[0].files[0];

    if (file === '') {
        notificacionFlotante('error', 'Debes seleccionar un archivo para subirlo');
    } else {
        data = new FormData();

        data.append('file', uploadFile);

        $.ajax({
          url: 'php/subir-archivos.php',
          type: 'post',
          data: data,
          contentType: false,
          processData: false,
          success: function(data) {
            var response = JSON.parse(data);
              // console.log(response);

              const url = window.location.pathname;

              

              if (response.response === 'correct') {
                notificacionFlotante('success', 'Archivo subido');
                // document.querySelector('form').reset();
                const table = document.querySelector('#files-table');
              
              const listaUsuario = document.createElement('tr');
              listaUsuario.innerHTML = `
                <td class="url-file">
                  <input type="hidden" name="" value="../uploads/files/${response.archivo}" class="input-hid">
                  <a href="../uploads/files/${response.archivo}" target="_blank">${response.archivo}</a>
                </td>
                <td>
                  <button class="copy-url btn btn-sm btn-success">
                    <i class="fa fa-copy copy-url"></i>  Copiar URL
                  </button>

                  <button class="btn btn-sm btn-danger delete-file" data-id="${response.id}">
                      <i class="fa fa-trash fa-lg delete-file"></i>&nbsp;
                      <span>Borrar</span>
                  </button>
                </td>
              `;
              
              table.appendChild(listaUsuario);

              document.querySelector('#link-input').value = "";
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

function actionFiles(e){

  if(e.target.classList.contains('copy-url')){
    e.preventDefault();
    const value = e.target.parentElement.parentElement.cells[0].classList.contains('url-file');
    if(value){
      var cop = e.target.parentElement.parentElement.cells[0].firstChild.nextSibling.getAttribute('value');
      var split = cop.split('.');
      var len = split.length -1;
      var temporal = document.createElement('input');
      temporal.type = "text";
      // console.log(split[len]);

      var splitName = cop.split('/');
      var lenName = splitName.length - 1;
      if(split[len] === 'jpg' || split[len] === 'png' || split[len] === 'gif'){
        temporal.value = `<img src="${cop}" alt="${splitName[lenName]}">`;
      } else {
        temporal.value = `<a src="${cop}" target="_blank" alt="${splitName[lenName]}">`;
      }

      // console.log(temporal);

      document.body.appendChild(temporal);

      temporal.select();
      document.execCommand('Copy');

      document.body.removeChild(temporal);
      notificacionFlotante('success', 'Copiado al portapapeles')
    }
  }


  if(e.target.parentElement.classList.contains('delete-file')){
    e.preventDefault();
    const id = e.target.parentElement.getAttribute('data-id');
    var fileName = e.target.parentElement.parentElement.parentElement.cells[0].firstChild.nextSibling.getAttribute('value');

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
        data.append('file', fileName);
  
        const xhr = new XMLHttpRequest();
        
        xhr.open('POST', 'php/borrar-archivo.php', true);

        xhr.onload = function() {
          if(this.status === 500) {
            notificacionFlotante('error', 'Houston, tenemos un error 500');
          }
          if (this.status === 200) {
            const respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta);
            if (respuesta.response === 'correct') {
              //Eliminar el registro del DOM
              // console.log(e.target.parentElement.parentElement.parentElement);
              e.target.parentElement.parentElement.parentElement.remove();
              if (result.value) {
                Swal.fire(
                  'Eliminado',
                  'Archivo eliminado correctamente',
                  'success'
                )
              }
              
            }
            if (respuesta.response === 'error') {
              if (result.value) {
                Swal.fire(
                  'Error',
                  'No se puede eliminar el archivo',
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

function deleteFiles(e) {
  if(e.target.parentElement.classList.contains('delete-files')){
    e.preventDefault();
    const id = e.target.parentElement.getAttribute('data-id');
    const fileName = e.target.parentElement.parentElement.parentElement.cells[0].firstChild.nextSibling.getAttribute('value');

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
        data.append('file', fileName);
  
        const xhr = new XMLHttpRequest();
        
        xhr.open('POST', 'php/borrar-archivo.php', true);

        xhr.onload = function() {
          if(this.status === 500) {
            notificacionFlotante('error', 'Houston, tenemos un error 500');
          }
          if (this.status === 200) {
            const respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta);
            if (respuesta.response === 'correct') {
              //Eliminar el registro del DOM
              // console.log(e.target.parentElement.parentElement.parentElement);
              e.target.parentElement.parentElement.parentElement.remove();
              if (result.value) {
                Swal.fire(
                  'Eliminado',
                  'Archivo eliminado correctamente',
                  'success'
                )
              }
              
            }
            if (respuesta.response === 'error') {
              if (result.value) {
                Swal.fire(
                  'Error',
                  'No se puede eliminar el archivo',
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

  if(e.target.classList.contains('copy-url')){
    e.preventDefault();
    const value = e.target.parentElement.parentElement.cells[0].classList.contains('url-file');
    if(value){
      var cop = e.target.parentElement.parentElement.cells[0].firstChild.nextSibling.getAttribute('value');
      var split = cop.split('.');
      var len = split.length -1;
      var temporal = document.createElement('input');
      temporal.type = "text";
      // console.log(split[len]);

      var splitName = cop.split('/');
      var lenName = splitName.length - 1;
      if(split[len] === 'jpg' || split[len] === 'png' || split[len] === 'gif'){
        temporal.value = `<img src="${cop}" alt="${splitName[lenName]}">`;
      } else {
        temporal.value = `<a src="${cop}" target="_blank" alt="${splitName[lenName]}">`;
      }

      // console.log(temporal);

      document.body.appendChild(temporal);

      temporal.select();
      document.execCommand('Copy');

      document.body.removeChild(temporal);
      notificacionFlotante('success', 'Copiado al portapapeles')
    }
  }
}

function publishContent(e) {
  e.preventDefault();
  const titulo = document.querySelector('#titulo').value.trim(),
        subtitulo = document.querySelector('#subtitulo').value.trim(),
        cover = document.querySelector('#cover-input').value.trim(),
        contenido = document.querySelector('#contenido').value,
        categoria = document.querySelector('#categoria').value.trim(),
        subcategoria = document.querySelector('#subcategoria').value.trim(),
        editor = document.querySelector('#editor').value.trim(),
        twitter = document.querySelector('#twitter').value.trim(),
        coverUpload = $('#cover-input')[0].files[0];

        if (titulo === '' || subtitulo === '' || cover === '' || contenido === '' || categoria === '' || subcategoria === '') {
          notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {
            data = new FormData();

            data.append('titulo', titulo);
            data.append('subtitulo', subtitulo);
            data.append('coverUpload', coverUpload);
            data.append('contenido', contenido);
            data.append('categoria', categoria);
            data.append('subcategoria', subcategoria);
            data.append('editor', editor);
            data.append('twitter', twitter);

            $.ajax({
              url: 'php/publicaciones.php',
              type: 'post',
              data: data,
              contentType: false,
              processData: false,
              success: function(data) {
                var response = JSON.parse(data);
                  console.log(response);              

                  if (response.response === 'correct') {
                    notificacionFlotante('success', 'Nota publicada');
                    document.querySelector('form').reset();
                    const table = document.querySelector('#publications-table');
                  
                  const listaUsuario = document.createElement('tr');
                  listaUsuario.innerHTML = `
                      <tr>
                        <td>${response.titulo}</td>
                        <td>${response.editor}</td>
                        <td>${response.fecha}</td>
                        <td>
                            <a href="edit-publication.php?id=${response.id}" class="btn btn-sm btn-info">
                                <i class="fa fa-edit"></i>
                            </a>
                            <input type="hidden" name="" value="${response.portada}" id="file-name">
                            <button class="btn btn-sm btn-danger delete-publication" data-id="${response.id}">
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

function deletePublication(e){
  if(e.target.parentElement.classList.contains('delete-publication')){
    e.preventDefault();
    const id = e.target.parentElement.getAttribute('data-id');
    const fileName = document.querySelector('#file-name').value;
    
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
        data.append('file', fileName);
  
        const xhr = new XMLHttpRequest();
        
        xhr.open('POST', 'php/borrar-publicacion.php', true);

        xhr.onload = function() {
          if(this.status === 500) {
            notificacionFlotante('error', 'Houston, tenemos un error 500');
          }
          if (this.status === 200) {
            const respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta);
            if (respuesta.response === 'correct') {
              //Eliminar el registro del DOM
              // console.log(e.target.parentElement.parentElement.parentElement);
              e.target.parentElement.parentElement.parentElement.remove();
              if (result.value) {
                Swal.fire(
                  'Eliminado',
                  'Nota eliminada correctamente',
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

function editPublication(e){
  e.preventDefault();

  const titulo = document.querySelector('#titulo').value.trim(),
        subtitulo = document.querySelector('#subtitulo').value.trim(),
        portada = document.querySelector('#update-cover').value,
        contenido = document.querySelector('#contenido').value,
        categoria = document.querySelector('#categoria').value.trim(),
        subcategoria = document.querySelector('#subcategoria').value.trim(),
        id = document.querySelector('#id-publication').value,
        coverUpload = $('#update-cover')[0].files[0],
        coverName = document.querySelector('#cover-name').value;

  let tipo;

        if (titulo === '' || subtitulo === '' || contenido === '' || categoria === '' || subcategoria === '') {
          notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {
            data = new FormData();

            data.append('titulo', titulo);
            data.append('subtitulo', subtitulo);
            data.append('contenido', contenido);
            data.append('categoria', categoria);
            data.append('subcategoria', subcategoria);
            data.append('id', id);

            if (portada !== '') {

                tipo = 'con'

                data.append('tipo', tipo);
                data.append('coverUpload', coverUpload);
                data.append('coverName', coverName);

                $.ajax({
                  url: 'php/editar-publicacion.php',
                  type: 'post',
                  data: data,
                  contentType: false,
                  processData: false,
                  success: function(data) {
                    var response = JSON.parse(data);
                      console.log(response);              
    
                      if (response.response === 'correct') {
                        notificacionFlotante('success', 'Nota editada');
                        setTimeout(() => {
                          window.location.href = './publications.php';
                        }, 1500);
                      }
                      if (response.response === 'error') {
                        notificacionFlotante('error', 'No hay nuevo contenido por editar');
                      }
                  }
                });
            } else {
                tipo = 'sin'

                data.append('tipo', tipo);

                $.ajax({
                  url: 'php/editar-publicacion.php',
                  type: 'post',
                  data: data,
                  contentType: false,
                  processData: false,
                  success: function(data) {
                    var response = JSON.parse(data);
                      console.log(response);              
    
                      if (response.response === 'correct') {
                        notificacionFlotante('success', 'Nota editada');
                        setTimeout(() => {
                          window.location.href = './publications.php';
                        }, 1500);
                      }
                      if (response.response === 'error') {
                        notificacionFlotante('error', 'No hay nuevo contenido por editar');
                      }
                  }
                });
            }
        }
}