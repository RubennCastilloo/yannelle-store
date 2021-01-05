const btnProducto = document.querySelector('#new-product');

eventListeners();

function eventListeners() {
    if(btnProducto){
        btnProducto.addEventListener('click', subirProducto);
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

function subirProducto(e){
    e.preventDefault();

    const titulo = document.querySelector('#titulo').value,
            descripcion = document.querySelector('#contenido').value,
            categoria = document.querySelector('#categoria-tienda').value,
            alertaImagen1 = document.querySelector('#file-input'),
            imagen1 = document.querySelector('#file-input')[0].files[0],
            imagen2 = document.querySelector('#file-input2')[0].files[0],
            imagen3 = document.querySelector('#file-input3')[0].files[0];

    if (titulo === '' || descripcion === '' || categoria === '' || alertaImagen1 === '') {
        notificacionFlotante('error', 'Todos los campos son obligatorios')
    } else {
        data = new FormData();

                data.append('titulo', titulo);
                data.append('descripcion', descripcion);
                data.append('categoria', categoria);
                data.append('imagen1', imagen1);
                data.append('imagen2', imagen2);
                data.append('imagen3', imagen3);

                $.ajax({
                  url: 'php/nuevo-producto.php',
                  type: 'post',
                  data: data,
                  contentType: false,
                  processData: false,
                  success: function(data) {
                    var response = JSON.parse(data);
                      console.log(response);

                      
                  }
              });
  
    }
}