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
                <img src="<?= $producto[0]['imagen']?>" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5"><?=$producto[0]['descripcion']?></h2>
            </div>
        </div>
    </div>
        <div class="container pt-4">
        <div class="row no-gutters">
                <main class="col-lg-8 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        <?=$producto[0]['descripcion']?>
                    </h2>
                    <?=$producto[0]['notas']?>
                    
                </main>

                <aside class="col-lg-4 pt-4 pt-lg-0">
                    <div class="sidebar pt-5 descripcion_producto">
                            <h2 class="text-center text-uppercase mt-4">Descripción</h2>
                            <p class="text-center"><?=$producto[0]['descripcion']?></p>

                            <h3 class="text-uppercase text-center mt-5">Precio</h3>
                            <p class="display-4 text-center ">$<?=$producto[0]['precio']?></p>
                    </div>
                </aside>
        </div>
    </div>
        <?php $this->load->view('include/principalFooter.php');?>
</body>
</html>