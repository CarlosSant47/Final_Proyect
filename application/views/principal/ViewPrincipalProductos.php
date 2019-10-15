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
    <?php $this->load->view('include/menuPrincipal.php');?>
    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="<?= base_url()?>assets/img/all.jpg" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5">Productos</h2>
            </div>
        </div>
    </div>

    <div class="container pt-4 productos">
        <div class="row">
                <main class="col-lg-12 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        Productos
                    </h2>

                    <div class="row">
                      <div class="card-columns">
                        <?php
                            $html = "";
                            foreach ($productos as $row) {
                                $html .= '<div class="card">';
                                $html .= '<a href='.base_url().'index.php/Principal/Producto?producto='.$row['id'].'>';
                                $html .= '<img src="'.$row['img'].'" class="card-img-top img-fluid">';
                                $html .= '<div class="card-body">';
                                $html .= '<h3 class="card-title text-center text-uppercase">'.$row['descripcion'].'</h3>';
                                $html .= '<p class="card-text text-uppercase">'.$row['notas'].'</p>';
                                $html .= '<p class="precio lead text-center mb-0">$ 25</p>';
                                $html .= '</div></a></div>';

                            }
                            echo $html;
                        ?>
                    
                      </div><!--.card-columns-->
                    </div>
                </main>


        </div>
    </div>
    <?php $this->load->view('include/principalFooter.php');?>
</body>
