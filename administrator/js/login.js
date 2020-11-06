const btnLogin = document.querySelector('#login');

eventListeners();

function eventListeners() {
	if (btnLogin) {
		btnLogin.addEventListener('click', login);
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

function login(e) {
    e.preventDefault();
    const email = document.querySelector('#email').value.trim().toLowerCase(),
        password = document.querySelector('#password').value.trim();

        if (email === '' || password === '') {
            notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {
            data = new FormData();

            data.append('email', email);
            data.append('password', password);

            $.ajax({
                url: '../php/login.php',
                type: 'post',
                data: data,
                contentType: false,
                processData: false,
                success: function(data) {
                    var response = JSON.parse(data);
                    console.log(response);              

                    if (response.response === 'correct') {
                        notificacionFlotante('success', 'Datos correctos, iniciando sesión...');
                        setTimeout(() => {
                            window.location.href = '../index.php';
                        }, 1000);
                    }
                    if (response.response === 'badPassword') {
                        notificacionFlotante('error', 'Los datos proporcionados no son correctos');
                    }
                    if (response.response === 'notExists') {
                        notificacionFlotante('error', 'El correo no se encuentra registrado');
                    }

                }
            });
        }
}
