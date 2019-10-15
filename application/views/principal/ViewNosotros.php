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
                <img src="<?= base_url()?>assets/img/consolass.jpg" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
                <main class="col-lg-12 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        Nosotros
                    </h2>
                    <p><?=$principal[0]['nosotros_completo']?></p>
                      
                </main>

                
        </div>
    </div>
      <?php $this->load->view('include/principalFooter.php');?>
</body>
</html>