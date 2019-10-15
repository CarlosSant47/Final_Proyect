<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consolas</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php $this->load->view('include/headerPrincipal.php'); ?>
</head>
<body>
</body>
<?php $this->load->view('include/menuPrincipal.php');?>

<div class="container">
        <div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
                <li data-target="#slider-principal" data-slide-to="1"></li>
                <li data-target="#slider-principal" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="<?= base_url()?>assets/img/andro.jpg" alt="Nuestras Instalaciones">
                    <div class="carousel-caption">
                        <h3 class="text-uppercase">Todo tipo de videjuegos</h3>
                    </div> 
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url()?>assets/img/god.jpg" alt="Conoce nuestros servicios">
                    <div class="carousel-caption">
                        <h3 class="text-uppercase">Conoce nuestras consolas</h3>
                    </div> 
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url()?>assets/img/jue2.jpg" alt="Promoción">
                    <div class="carousel-caption">
                        <h3 class="text-uppercase">Nuevo sitio web, oferta en todas las consolas</h3>
                    </div> 
                </div> <!--.carousel-item-->
                
            </div> <!--.carousel-inner-->

            <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a href="#slider-principal" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
        </div>
    </div>
    <section class="nuevo-sitio py-5">
        <h1 class="text-center text-uppercase mt-4 encabezado">
            <span class="text-lowercase d-block">bienvenido a nuestro </span> sitio Web
        </h1>
        <p class="text-center mt-4">Te sentirás como gamer con nuestras <br>
            consolas nuevas.</p>
    </section>

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4 text-center mb-4">
                <div class="imagen-servicio">
                    <img src="<?= base_url()?>assets/img/serv_playq.jpg" class="img-fluid">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">
                            <h2 class="text-center text-uppercase encabezado">
                                <span class="text-lowercase d-block">Conoce sobre</span> nosotros
                            </h2>
                            <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                        </div>
                    </div> <!--.row-->
                </div> <!--.imagen-destacada-->
            </div> <!--.col-md-4-->
            <div class="col-md-4 text-center mb-4">
                <div class="imagen-servicio">
                    <img src="<?= base_url()?>assets/img/serv3.jpg" class="img-fluid">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">
                            <h2 class="text-center text-uppercase encabezado">
                                <span class="text-lowercase d-block">Nuestros</span> servicios
                            </h2>
                            <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                        </div>
                    </div> <!--.row-->
                </div> <!--.imagen-destacada-->
            </div> <!--.col-md-4-->
            <div class="col-md-4 text-center mb-4">
                <div class="imagen-servicio">
                    <img src="<?= base_url()?>assets/img/aerv2.jpg" class="img-fluid">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">
                            <h2 class="text-center text-uppercase encabezado">
                                <span class="text-lowercase d-block">Visita nuestra</span> tienda
                            </h2>
                            <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                        </div>
                    </div> <!--.row-->
                </div> <!--.imagen-destacada-->
            </div> <!--.col-md-4-->
        </div>
    </div>
    <section class="productos container py-5">
        <h2 class="encabezado text-center text-uppercase mt-4">
          <span class="text-lowercase d-block">nuestros</span> productos
        </h2>
        <div class="row py-5">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="<?= base_url()?>assets/img/producto_mini_01.jpg">
                        <div class="card-body">
                            <h3 class="card-title text-center text-uppercase">Producto 1</h3>
                            <p class="card-text text-uppercase">
                                Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                            </p>
                            <p class="precio mb-0 lead text-center">$25</p>
                        </div>
                    </a>
                </div> <!--.card-->
            </div><!--.col-md-3-->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="<?= base_url()?>assets/img/producto_mini_02.jpg">
                        <div class="card-body">
                            <h3 class="card-title text-center text-uppercase">Producto 2</h3>
                            <p class="card-text text-uppercase">
                                Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                            </p>
                            <p class="precio mb-0 lead text-center">$25</p>
                        </div>
                    </a>
                </div> <!--.card-->
            </div><!--.col-md-3-->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="<?= base_url()?>assets/img/producto_mini_03.jpg">
                        <div class="card-body">
                            <h3 class="card-title text-center text-uppercase">Producto 3</h3>
                            <p class="card-text text-uppercase">
                                Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                            </p>
                            <p class="precio mb-0 lead text-center">$25</p>
                        </div>
                    </a>
                </div> <!--.card-->
            </div><!--.col-md-3-->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="<?= base_url()?>assets/img/producto_mini_04.jpg">
                        <div class="card-body">
                            <h3 class="card-title text-center text-uppercase">Producto 4</h3>
                            <p class="card-text text-uppercase">
                                Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                            </p>
                            <p class="precio mb-0 lead text-center">$25</p>
                        </div>
                    </a>
                </div> <!--.card-->
            </div><!--.col-md-3-->
        </div><!--.row-->
    </section>


    <div class="citas container-fluid py-5">
      <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 text-center">
              <h3 class="text-uppercase">Haz tu primera compra</h3>
              <p class="mt-5">
                  <?= $principal[0]['primeracompra'] ?>
              </p>
              <a href="#" class="btn btn-primary mt-3 text-uppercase">Leer más</a>
          </div>
      </div>
    </div>

<?php $this->load->view('include/principalFooter.php');?>
</body>
</html>