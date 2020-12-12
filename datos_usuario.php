<?php require_once 'templates/header.php'; ?>

<div class="modal fade" id="modal_eliminar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header bg-danger text-white">
      <h5 class="modal-title" id="staticBackdropLabel">Peligro</h5>
    </div>
    <div class="modal-body text-dark">
      Tu cuenta se eliminará para siempre. ¿Estas seguro?
    </div>
    <div class="modal-footer">
      <a href="api/usuarios/delete.php" class="btn btn-danger" role="button">Ok</a>
      <a class="btn btn-danger" role="button" data-bs-dismiss="modal">Cerrar</a>
    </div>
  </div>
</div>
</div>

<section class="container-fluid py-5">
  <div class="row mt-5">
    <div class="col-12 col-md-8 col-lg-5 mx-auto">
      <div class="card shadow-lg rounded-lg border-0">
        <div class="card-header bg-warning text-center">
          <h4>Tus datos de usuario</h4>
        </div>
        <div class="card-body text-dark py-5">
          <?php $usuario = $_SESSION["usuario"]; ?>
          <div class="row py-3">
            <div class="col-6 text-center">
              <span>Nombre</span>
            </div>
            <div class="col-6 text-center">
              <span class="fw-bold"> <?php echo $usuario->nombre; ?> </span>
            </div>
          </div>
          <div class="row py-3">
            <div class="col-6 text-center">
              <span>Apellido</span>
            </div>
            <div class="col-6 text-center">
              <span class="fw-bold"> <?php echo $usuario->apellido; ?> </span>
            </div>
          </div>
          <div class="row py-3">
            <div class="col-6 text-center">
              <span>Correo</span>
            </div>
            <div class="col-6 text-center">
              <span class="fw-bold"> <?php echo $usuario->correo; ?> </span>
            </div>
          </div>
          <div class="row py-3">
            <div class="col-6 text-center">
              <span>Telefono</span>
            </div>
            <div class="col-6 text-center">
              <span class="fw-bold"> <?php echo $usuario->telefono; ?> </span>
            </div>
          </div>
        </div>
        <div class="card-footer py-4">
          <div class="row">
            <div class="col-6 text-center">
              <a class="btn btn-danger bnt-lg" role="button" href="api/usuarios/cerrar_sesion.php">Cerrar Sesion</a>
            </div>
            <div class="col-6 text-center">
              <a class="btn btn-danger bnt-lg" role="button" id="button_suscripcion"> Eliminar Suscripción</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>




<script type="text/javascript" src="js/datos_usuario.js"></script>


<?php require_once 'templates/footer.php'; ?>
</body>
</html>
