<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <?php $this->load->view('include/header.php'); ?>
</head>

<style>
    textarea{
        max-width: 100%;
        height: 150px;
        min-width: 100%;
        min-height: 200px;
        max-height: 200px;
        height: 200px;
    }
    </style>
<body class="hold-transition skin-blue sidebar-mini" onload="main()">
<div class="wrapper">

    <?php $this->load->view("include/menu.php")?>

    <div class="content-wrapper">

        <div class="content">
            
            <div class="row">
                <div class="col-md-6" style="margin-bottom: 15px">
                </div>
                
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Descripciones de la Pagina Principal</h3>

                        </div>
                        <div class="box-body">
                            <form  enctype="multipart/form-data" method="POST" id="form">
                                <div class="col-md-6">
                                	<div class="form-group">
                                            <label for="exampleInputEmail1">Nosotros Resumida</label>
                                            <textarea class="form-control" placeholder="Escribe un nostros resumidos" name="nosotrosr">
                                            	<?= $principal[0]['nosotros'] ?>
                                            </textarea>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                            <label for="exampleInputEmail1">Nosotros Completa</label>
                                            <textarea class="form-control" value='oliwis' placeholder="Introduce el Nosotros" name="nosotroscom">
                                            		<?= $principal[0]['nosotros_completo'] ?>
                                            </textarea>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                            <label for="exampleInputEmail1">Contacto</label>
                                            <textarea class="form-control" placeholder="Introduce el Contacto" name="contacto">
                                            	<?= $principal[0]['contacto'] ?>
                                            </textarea>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                            <label for="exampleInputEmail1">Descripcion de Primera Compra</label>
                                            <textarea class="form-control" placeholder="Introduce una breve descripcion" name="compra">
                                            	<?= $principal[0]['primeracompra'] ?>
                                            </textarea>
                                        </div>
                                </div>
                                <div class="col-md-12">
                                	<button type="button" class="btn btn-primary" id="btnSave" value="1"
                                    onclick="save()	">
                                Guardar Cambios
                            </button>
                                </div>
                               	
                            </form>
                        </div>
                    </div>
                </div>
           
    </div>

    <div class="control-sidebar-bg"></div>
</div>
<script type="text/javascript">
	let form;
	function main()
	{
		form = document.getElementById('form');
	}


	function save()
	{
		var data = new FormData(form);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('index.php/Admin/updatePrincipal')?>');
        xhr.send(data);
        xhr.overrideMimeType("application/json");
        xhr.onload = function () {
            if (xhr.status != 200) {
                alert(`Error ${xhr.status}: ${xhr.statusText}`);
            } else {
                console.log(xhr.response);
                data = JSON.parse(xhr.response);
                if(data['insertStatus'])
                {
                    alert("Se actualizo con exito");
                    consultEmpleados();
                }
                

            }
        };
	}
</script>
</body>


</html>
