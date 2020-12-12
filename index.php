<?php require_once 'templates/header.php'; ?>

<div class="modal fade" id="modal_contacto" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header bg-success text-white">
      <h5 class="modal-title" id="staticBackdropLabel">Ingreso exitoso</h5>
    </div>
    <div class="modal-body text-dark">
      Gracias por confiar en nosotros <br> Te contactaremos pronto por correo o telefono
    </div>
    <div class="modal-footer">
      <a href="index.php" class="btn btn-success" role="button">Ok</a>
    </div>
  </div>
</div>
</div>

    <section class="container-fluid">
      <div class="row mt-5">
        <div class="col-12 col-lg-6 text-center">
          <img src="img/perrito_viajero.png" class="img-fluid tamanio-Imagen">
        </div>
        <div class="col-12 col-lg-6 d-flex align-self-center text-center text-lg-start">
          <h1 class="texto-main fw-bold">¡ Guaf, Guaf ! <br> Tu página preferida sobre los caninos de todo el mundo</h1>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-lg-5 text-sm-center text-lg-end">
          <img src="img/perrito_veraniego.png" class="img-fluid tamanio-Imagen">
        </div>
        <div class="col-12 col-lg-5 bg-warning bg-gradient d-flex align-self-center shadow-lg text-center rounded-pill py-4">
          <h1>Somos una inmensa familia. <br> ¡Revisa nuestra biblioteca e infórmate sobre nosotros!</h1>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-lg-6 text-sm-center text-lg-end">
          <img src="img/perrito_contacto.png" class="img-fluid tamanio-Imagen">
        </div>
        <div class="col-12 col-md-8 mx-md-auto mx-lg-0 col-lg-3 align-self-center">
          <form method="post" class="shadow-lg">
            <div class="card bg-warning rounded fs-5 bg-gradient">
              <div class="card-header text-center">
                <label>Datos de contacto</label>
              </div>
              <div class="card-body">
                <div class="" id="alert_contacto">

                </div>
                <div class="form-group row">
                  <label for="nombre_contacto" class="col-form-label col-4 text-center">Nombre</label>
                  <div class="col-6">
                    <input type="text" class="form-control" id="nombre_contacto">
                    <div class="invalid-feedback" id="nombre_contacto">
                      <span>Ingresa solo letras</span>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="apellido_contacto" class="col-form-label col-4 text-center">Apellido</label>
                  <div class="col-6">
                    <input type="text" class="form-control" id="apellido_contacto">
                    <div class="invalid-feedback" id="apellido_contacto">
                      <span>Ingresa solo letras</span>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telefono_contacto" class="col-form-label col-4 text-center">Teléfono</label>
                  <div class="col-6">
                    <input type="number" class="form-control" id="telefono_contacto" min="0" max="99999999999">
                    <div class="invalid-feedback" id="telefono_contacto">
                      <span>569XXXXXXXX</span>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="correo_contacto" class="col-form-label col-4 text-center">Correo</label>
                  <div class="col-6">
                    <input type="text" class="form-control" id="correo_contacto">
                    <div class="invalid-feedback" id="correo_contacto">
                      <span>Ingresa un correo válido</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="form-group row">
                  <div class="col text-center">
                    <button type="button" class="btn btn-danger btn-lg" id="button_contacto">Contáctame</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

    </section>

<?php require_once 'templates/footer.php'; ?>

<script type="text/javascript" src="js/contacto.js"></script>

</body>
</html>
