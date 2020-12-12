<?php require_once 'templates/header.php'; ?>

    <section class="container-fluid">
      <div class="row mt-5 pb-5 pt-5 row_busqueda">
        <div class="col-12 col-lg-5 mx-auto mt-5">
          <form method="post">
            <div class="row text-center texto-main">
              <h1>Busca tu raza favorita</h1>
            </div>
            <div class="row mt-4">
              <div class="col-5 mx-auto">
                <img src="img/perrito_buscador.png" class="img-fluid">
              </div>
            </div>
            <div class="row">
              <input id="input_buscar" type="text" class="col-form-group border border-warning border-3 shadow-lg" placeholder="Ingresa la raza que buscas aquí :)">
            </div>
            <div class="row text-center mb-5 mt-3">
              <div class="col-12 col-md-6 col-lg-6 mx-auto">
                <button type="button" id="button_buscar" class="btn btn-lg btn-danger">Buscar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section class="container-fluid">
      <div class="row mt-5 d-flex align-items-center rowPerros">
        <div class="col-12 col-md-6 col-lg-3" id="aleman">
          <div class="card border border-4 border-warning background-marino">
            <div class="card-header text-center border-bottom border-4 border-warning texto-main">
              <h4>Pastor Aleman</h4>
            </div>
            <div class="card-body text-center">
              <img src="img/pastor_aleman.png" class="img-fluid imagen-foot">
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" id="boxer">
          <div class="card border border-4 border-warning background-marino  shadow-lg">
            <div class="card-header text-cente r border-bottom border-4 border-warning texto-main">
              <h4>Boxer</h4>
            </div>
            <div class="card-body text-center">
              <img src="img/boxer.png" class="img-fluid imagen-foot">
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" id="perdiguero">
          <div class="card border border-4 border-warning background-marino  shadow-lg">
            <div class="card-header text-center border-bottom border-4 border-warning texto-main">
              <h4>Perdiguero de oro</h4>
            </div>
            <div class="card-body text-center">
              <img src="img/perdiguero_oro.png" class="img-fluid imagen-foot">
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" id="golden">
          <div class="card border border-4 border-warning background-marino  shadow-lg">
            <div class="card-header text-center border-bottom border-4 border-warning texto-main">
              <h4>Golden Retriever</h4>
            </div>
            <div class="card-body text-center">
              <img src="img/golden_retriever.png" class="img-fluid imagen-foot">
            </div>
          </div>
        </div>
        </div>
        <div class="row mt-3 rowPerros1">
          <div class="col-12 col-md-6 col-lg-3 position-sticky" id="bulldog">
            <div class="card border border-4 border-warning background-marino shadow-lg">
              <div class="card-header text-center border-bottom border-4 border-warning texto-main">
                <h4>Bulldog Frances</h4>
              </div>
              <div class="card-body text-center">
                <img src="img/bulldog_frances.png" class="img-fluid imagen-foot">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3" id="collie">
            <div class="card border border-4 border-warning background-marino  shadow-lg">
              <div class="card-header text-center border-bottom border-4 border-warning texto-main">
                <h4>Border Collie</h4>
              </div>
              <div class="card-body text-center">
                <img src="img/border_collie.png" class="img-fluid imagen-foot">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3" id="maltes">
            <div class="card border border-4 border-warning background-marino  shadow-lg">
              <div class="card-header text-center border-bottom border-4 border-warning texto-main">
                <h4>Maltes Blanco</h4>
              </div>
              <div class="card-body text-center">
                <img src="img/maltes_blanco.png" class="img-fluid imagen-foot">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3" id="san bernardo">
            <div class="card border border-4 border-warning background-marino  shadow-lg">
              <div class="card-header text-center border-bottom border-4 border-warning texto-main">
                <h4>San Bernardo</h4>
              </div>
              <div class="card-body text-center">
                <img src="img/san_bernardo.png" class="img-fluid imagen-foot">
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3 mb-5 rowPerros2">
          <div class="col-12 col-md-6 col-lg-3" id="beagle">
            <div class="card border border-4 border-warning background-marino  shadow-lg">
              <div class="card-header text-center border-bottom border-4 border-warning texto-main">
                <h4>Beagle</h4>
              </div>
              <div class="card-body text-center">
                <img src="img/beagle.png" class="img-fluid imagen-foot">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3" id="dalmata">
            <div class="card border border-4 border-warning background-marino  shadow-lg">
              <div class="card-header text-center border-bottom border-4 border-warning texto-main">
                <h4>Dalmata</h4>
              </div>
              <div class="card-body text-center">
                <img src="img/dalmata.png" class="img-fluid imagen-foot">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3" id="leonberger">
            <div class="card border border-4 border-warning background-marino  shadow-lg">
              <div class="card-header text-center border-bottom border-4 border-warning texto-main">
                <h4>Leonberger</h4>
              </div>
              <div class="card-body text-center">
                <img src="img/leonberger.png" class="img-fluid imagen-foot">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3" id="rotweiller">
            <div class="card border border-4 border-warning background-marino  shadow-lg">
              <div class="card-header text-center border-bottom border-4 border-warning texto-main">
                <h4>Rotweiller</h4>
              </div>
              <div class="card-body text-center">
                <img src="img/rotweiller.png" class="img-fluid imagen-foot">
              </div>
            </div>
          </div>
        </div>
    </section>

<?php require_once 'templates/footer.php'; ?>

<script type="text/javascript" src="js/busqueda.js"></script>
</body>
</html>
