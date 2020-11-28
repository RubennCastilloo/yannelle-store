const categoria = document.querySelector('#categoria');
const subcategoria = document.querySelector('#subcategoria');

//Usuarios
const agregarUsuario = document.querySelector('#add-user');
const listadoUsuarios = document.querySelector('#listado-usuarios tbody');
const btnEditarUsuario = document.querySelector('#edit-user');

eventListeners();

function eventListeners() {
    if (categoria) {
      categoria.addEventListener('change', cambiarSubcategoria);
    }
    if (agregarUsuario) {
      agregarUsuario.addEventListener('click', nuevoUsuario);
    }
    if (listadoUsuarios) {
      listadoUsuarios.addEventListener('click', eliminarUsuario);
    }
    if (btnEditarUsuario) {
      btnEditarUsuario.addEventListener('click', editarUsuario)
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

function cambiarSubcategoria(){
    var selectedOption = this.options[categoria.selectedIndex];
    // console.log(selectedOption.value + ': ' + selectedOption.text);
    if (selectedOption.value === "tech") {
      //   console.log('Selecciono tech');
        subcategoria.innerHTML = `
        <option value="">Seleccionar</option>
        <option value="apple">Apple</option>
        <option value="amazon">Amazon</option>
        <option value="google">Google</option>
        <option value="youtube">Youtube</option>
        <option value="facebook">Facebook</option>
        <option value="code">Code</option>
        <option value="mas-tech">Más Tech</option>
        `;
    }
    if (selectedOption.value === "entretenimiento") {
      // console.log('Selecciono entretenimiento');
      subcategoria.innerHTML = `
        <option value="">Seleccionar</option>
        <option value="peliculas">Peliculas</option>
        <option value="tv">TV</option>
        <option value="videojuegos">Videojuegos</option>
        <option value="libros">Libros</option>
        <option value="musica">Música</option>
        <option value="podcast">Podcast</option>
        <option value="mas-entretenimiento">Más Entretenimiento</option>
        `;
    }
    if (selectedOption.value === "ciencia") {
      // console.log('Selecciono entretenimiento');
      subcategoria.innerHTML = `
        <option value="">Seleccionar</option>
        <option value="espacio">Espacio</option>
        <option value="salud">Salud</option>
        <option value="energia">Energía</option>
        <option value="ambiente">Ambiente</option>
        <option value="mas-ciencia">Más Ciencia</option>
        `;
    }
    if (selectedOption.value === "") {
      // console.log('No ha seleccionado nada');
      subcategoria.innerHTML = `
        <option value="">No hay valores</option>
        `;
    }
  }

  function nuevoUsuario(e) {
    e.preventDefault();
    
    const name = document.querySelector('#name').value.trim(),
          lastName = document.querySelector('#last-name').value.trim(),
          mail = document.querySelector('#mail').value.trim().toLowerCase(),
          twitter = document.querySelector('#twitter').value.trim(),
          password = document.querySelector('#password').value.trim(),
          confirmPassword = document.querySelector('#confirm-password').value.trim(),
          perfilPicture = document.querySelector('#perfil-picture').value,
          image = $('#perfil-picture')[0].files[0],
          linkTwitter = document.querySelector('#link-twitter').value;

          if (name === '' || lastName === '' || mail === '' || twitter === '' || password === '' || confirmPassword === '' || perfilPicture === '' || linkTwitter === '') {
            notificacionFlotante('error', 'Todos los campos son obligatorios');
          } else {
            if (confirmPassword !== password) {
              notificacionFlotante('error', 'Password no coincide');
            } else {
                data = new FormData();

                data.append('name', name);
                data.append('lastName', lastName);
                data.append('mail', mail);
                data.append('twitter', twitter);
                data.append('password', password);
                data.append('image', image);
                data.append('linkTwitter', linkTwitter);

                $.ajax({
                  url: 'php/nuevo-usuario.php',
                  type: 'post',
                  data: data,
                  contentType: false,
                  processData: false,
                  success: function(data) {
                    var response = JSON.parse(data);
                      console.log(response);

                      

                      if (response.response === 'correct') {
                        notificacionFlotante('success', 'Usuario Registrado Correctamente');
                        // document.querySelector('form').reset();
                        const form = document.querySelector('#form-users');
                      
                      const listaUsuario = document.createElement('tr');
                      listaUsuario.innerHTML = `
                      <td>${response.name}</td>
                      <td>${response.last_name}</td>
                      <td>${response.mail}</td>
                      <td>
                          <a href="edit-user.php?id=${response.id}" id="add-user" class="btn btn-sm btn-info">
                              <i class="fa fa-edit fa-lg"></i>&nbsp;
                              <span>Editar</span>
                          </a>
                          <button id="add-user" class="btn btn-sm btn-danger delete-user" data-id="${response.id}">
                              <i class="fa fa-trash fa-lg"></i>&nbsp;
                              <span>Borrar</span>
                          </button>
                      </td>
                      `;
                      
                      form.appendChild(listaUsuario);

                      document.querySelector('form').reset();
                      }
                      if(response.response === 'existe'){
                        notificacionFlotante('error', 'El correo ya se encuentra registrado');
                      }
                      if (response.response === 'error') {
                        notificacionFlotante('error', 'Houston Tenemos un Problema');
                      }
                  }
              });
            }
          }
  }

function eliminarUsuario(e) {
  if(e.target.parentElement.classList.contains('delete-user')){
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
        
        xhr.open('POST', 'php/borrar-usuario.php', true);

        xhr.onload = function() {
          if(this.status === 500) {
            notificacionFlotante('error', 'Houston, tenemos un error 500');
          }
          if (this.status === 200) {
            const respuesta = JSON.parse(xhr.responseText);
            // console.log(respuesta);
            if (respuesta.response === 'correcto') {
              //Eliminar el registro del DOM
              // console.log(e.target.parentElement.parentElement.parentElement);
              e.target.parentElement.parentElement.parentElement.remove();
              if (result.value) {
                Swal.fire(
                  'Eliminado',
                  'Usuario eliminado correctamente',
                  'success'
                )
              }
              
            }
            if (respuesta.response === 'error') {
              if (result.value) {
                Swal.fire(
                  'Error',
                  'No se puede eliminar el Usuario',
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

function editarUsuario(e) {
  e.preventDefault();

  const name = document.querySelector('#name').value,
        lastName = document.querySelector('#last-name').value,
        mail = document.querySelector('#mail').value,
        twitter = document.querySelector('#twitter').value,
        password = document.querySelector('#password').value,
        passwordConfirm = document.querySelector('#confirm-password').value,
        id= document.querySelector('#id-user').value;

  let type;

        if (name === '' || lastName === '' || mail === '' || twitter === '') {
          notificacionFlotante('error', 'Hay campos que se deben llenar');
        } else {
          if (password !== '' && passwordConfirm !== '') {
            if (password !== passwordConfirm) {
              notificacionFlotante('error', 'Password no coincide');
            } else {
                  type = 'con';
                  data = new FormData();

                  data.append('name', name);
                  data.append('lastName', lastName);
                  data.append('mail', mail);
                  data.append('twitter', twitter);
                  data.append('password', password);
                  data.append('id', id);
                  data.append('type', type);

                  $.ajax({
                    url: 'php/editar-usuario.php',
                    type: 'post',
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                      var response = JSON.parse(data);
                        console.log(response);
                        if (response.response === 'correct') {
                          notificacionFlotante('success', 'Usuario editado correctamente');
                          document.querySelector('form').reset();
                          setTimeout(() => {
                            window.location.href = './users.php';
                          }, 1500);
                        }
                        if (response.response === 'error') {
                          notificacionFlotante('error', 'Houston Tenemos un Problema');
                        }
                    }
                });
            }

          } else {
                  type = 'sin';
                  data = new FormData();

                  data.append('name', name);
                  data.append('lastName', lastName);
                  data.append('mail', mail);
                  data.append('twitter', twitter);
                  data.append('id', id);
                  data.append('type', type);

                  $.ajax({
                    url: 'php/editar-usuario.php',
                    type: 'post',
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                      var response = JSON.parse(data);
                        console.log(response);
                        if (response.response === 'correct') {
                          notificacionFlotante('success', 'Usuario editado correctamente');
                          document.querySelector('form').reset();
                          setTimeout(() => {
                            window.location.href = './users.php';
                          }, 1500);
                        }
                        if (response.response === 'error') {
                          notificacionFlotante('error', 'Houston Tenemos un Problema');
                        }
                    }
                });
          }
        }
}