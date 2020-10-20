const submit = document.querySelector('#new-publication');
const categoria = document.querySelector('#categoria');
const subcategoria = document.querySelector('#subcategoria');

eventListeners();

function eventListeners() {
    submit.addEventListener('click', leerContenido);
    categoria.addEventListener('change', cambiarSubcategoria);
}

function leerContenido(e) {
    e.preventDefault();
    const contenido = document.querySelector('#contenido').value;
    console.log(contenido);
}

function cambiarSubcategoria(){
    var selectedOption = this.options[categoria.selectedIndex];
    console.log(selectedOption.value + ': ' + selectedOption.text);
    if (selectedOption.value === "1") {
      //   console.log('Selecciono tech');
        subcategoria.innerHTML = `
        <option value="">Seleccionar</option>
        <option value="Apple">Apple</option>
        <option value="Amazon">Amazon</option>
        <option value="Google">Google</option>
        <option value="Youtube">Youtube</option>
        <option value="Facebook">Facebook</option>
        <option value="Code">Code</option>
        `;
    }
    if (selectedOption.value === "2") {
      // console.log('Selecciono entretenimiento');
      subcategoria.innerHTML = `
        <option value="">Seleccionar</option>
        <option value="Peliculas">Peliculas</option>
        <option value="TV">TV</option>
        <option value="Videojuegos">Videojuegos</option>
        <option value="Libros">Libros</option>
        <option value="Música">Música</option>
        <option value="Podcast">Podcast</option>
        `;
    }
    if (selectedOption.value === "") {
      // console.log('No ha seleccionado nada');
      subcategoria.innerHTML = `
        <option value="">No hay valores</option>
        `;
    }
  }