

function soloLetras(texto) {
    let valido = true;
    for (var i = 0; i < texto.replace(/ /g, "").length; i++) {
      if (texto.replace(/ /g, "").charAt(i).toLowerCase() === texto.replace(/ /g, "").charAt(i).toUpperCase()) {
        valido = false;
      }
    }
    return valido;
  };

  function validarMail(mail) {

    let valido = false;
    if ( /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(mail)) {
      valido = true;
    }
    return valido;
  };



(function(){

  let input_nombre = document.querySelector('#nombre_contacto');
  let input_apellido = document.querySelector('#apellido_contacto');
  let input_telefono = document.querySelector('#telefono_contacto');
  let input_correo = document.querySelector('#correo_contacto');

  let nombre;
  let apellido;
  let telefono;
  let correo;

  let nombreEsValido;
  let apellidoEsValido;
  let correoEsValido;
  let telefonoEsValido;

  input_nombre.addEventListener('input', function(){
    nombre = event.target.value;
    if(nombre !== '' && soloLetras(nombre)){
      input_nombre.classList.remove('is-invalid');
      input_nombre.classList.add('is-valid');
      nombreEsValido = true;
    } else {
      input_nombre.classList.remove('is-valid');
      input_nombre.classList.add('is-invalid');
      nombreEsValido = false;
    }
  });

  input_apellido.addEventListener('input', function(){
    apellido = event.target.value;
    if(apellido !== '' && soloLetras(apellido)){
      input_apellido.classList.remove('is-invalid');
      input_apellido.classList.add('is-valid');
      apellidoEsValido = true;
    } else {
      input_apellido.classList.remove('is-valid');
      input_apellido.classList.add('is-invalid');
      apellidoEsValido = false;
    }
  });

  input_telefono.addEventListener('input', function(){
    telefono = event.target.value;
    if(isNaN(telefono) === false && telefono !== '' && telefono.length === 11){
      input_telefono.classList.remove('is-invalid');
      input_telefono.classList.add('is-valid');
      telefonoEsValido = true;
    } else {
      input_telefono.classList.remove('is-valid');
      input_telefono.classList.add('is-invalid');
      telefonoEsValido = false;
    }
  });

  input_correo.addEventListener('input', function(){
    correo = event.target.value;
    if(correo !== '' && validarMail(correo)){
      input_correo.classList.remove('is-invalid');
      input_correo.classList.add('is-valid');
      correoEsValido = true;
    } else {
      input_correo.classList.remove('is-valid');
      input_correo.classList.add('is-invalid');
      correoEsValido = false;
    }
  });

  document.querySelector('#button_contacto').addEventListener('click', function(){

    let alert = document.querySelector('#alert_contacto');
    alert.innerHTML = "";
    alert.classList.remove('alert', 'alert-danger', 'my-2');
    let mensaje = document.createElement('span');

    if(nombreEsValido && apellidoEsValido && telefonoEsValido && correoEsValido){
        $('#modal_contacto').modal('show');
    } else {
      alert.classList.add('alert', 'alert-danger', 'my-2');
      mensaje.textContent = "Ingrese todos los datos correctamente";
      alert.appendChild(mensaje);
    }

  });

})();
