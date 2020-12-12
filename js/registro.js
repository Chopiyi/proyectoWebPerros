

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

    let input_nombre = document.querySelector('#nombre_registro');
    let input_apellido = document.querySelector('#apellido_registro');
    let input_telefono = document.querySelector('#telefono_registro');
    let input_correo = document.querySelector('#correo_registro');
    let input_contraseña = document.querySelector('#contraseña_registro');
    let input_contraseña2 = document.querySelector('#contraseña2_registro');

    let nombre;
    let apellido;
    let telefono;
    let correo;
    let contraseña;
    let contraseña2;

    let nombreEsValido = false;
    let apellidoEsValido = false;
    let telefonoEsValido = false;
    let correoEsValido = false;
    let contraseñaEsValido = false;


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

    input_contraseña.addEventListener('input', function(){
      contraseña = event.target.value;
      input_contraseña2.value = "";
      input_contraseña2.classList.remove('is-valid');
      input_contraseña2.classList.add('is-invalid');
      if(contraseña !== '' && contraseña.length >= 6 && contraseña.length <= 12){
        input_contraseña.classList.remove('is-invalid');
        input_contraseña.classList.add('is-valid');
      } else {
        input_contraseña.classList.remove('is-valid');
        input_contraseña.classList.add('is-invalid');
        contraseñaEsValido = false;
      }
    });

    input_contraseña2.addEventListener('input', function(){
      contraseña2 = event.target.value;
      if(contraseña2 !== contraseña){
        input_contraseña2.classList.remove('is-valid');
        input_contraseña2.classList.add('is-invalid');
        contraseñaEsValido = false;
      } else {
        input_contraseña2.classList.remove('is-invalid');
        input_contraseña2.classList.add('is-valid');
        contraseñaEsValido = true;
      }
    });

    input_telefono.addEventListener('input', function(){
      telefono = event.target.value;
      if(isNaN(telefono) || telefono.length != 11 ){
        input_telefono.classList.remove('is-valid');
        input_telefono.classList.add('is-invalid');
        telefonoEsValido = false;
      } else {
        input_telefono.classList.remove('is-invalid');
        input_telefono.classList.add('is-valid');
        telefonoEsValido = true;
      }
    });


  document.querySelector('#button_registro').addEventListener('click', function(){

    let alert = document.querySelector("#alert_registro");
    alert.innerHTML = " ";
    alert.classList.remove('alert', 'alert-warning', 'alert-danger');
    let mensaje = document.createElement('span');

    let usuario = {};
    usuario.nombre = nombre;
    usuario.apellido = apellido;
    usuario.correo = correo;
    usuario.clave = contraseña2;
    usuario.telefono = telefono;

    let form = new FormData();
    form.append('correo', usuario.correo);
    form.append('nombre', usuario.nombre);
    form.append('apellido', usuario.apellido);
    form.append('telefono', usuario.telefono);
    form.append('clave', usuario.clave);

    if(nombreEsValido && apellidoEsValido && contraseñaEsValido && correoEsValido && telefonoEsValido){

      axios.post('api/usuarios/create.php', form).then(function (respuesta){
        console.log(respuesta);
        if(respuesta.data.resultado){
          $('#modal_exito').modal('show');
        } else {
          alert.classList.add('alert', 'alert-danger');
          mensaje.textContent = "Error en la conexión";
          alert.appendChild(mensaje);
        }
      }).catch(function (error){
        console.log(error);
      });
    } else {
      alert.classList.add('alert', 'alert-warning');
      mensaje.textContent = "Ingresa correctamente todos los campos";
      alert.appendChild(mensaje);
    }
  });
})();
