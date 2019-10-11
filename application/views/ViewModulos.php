<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php $this->load->view('include/header.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="main()">
<div class="wrapper">
    <?php $this->load->view("include/menu.php") ?>
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Modulos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="margin-bottom: 15px">
                </div>
                <div class="col-md-6" style="margin-bottom: 15px">
                    <button class="btn  btn-default" data-toggle="modal" data-target="#modal-agregar"
                            style="float: right">Agregar Usuario
                    </button>
                </div>
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Modulos del Sistema</h3>
                            <div class="box-tools">
                                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right"
                                           placeholder="Search">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover" id="tbData">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Modulo</th>
                                    <th>Icono</th>
                                    <th>Ruta</th>
                                    <th>Estado</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-agregar">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Usuarios</h4>
                        </div>
                        <div class="modal-body">

                            <form enctype="multipart/form-data" method="POST" id="formUsuarios">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Modulo</label>
                                            <input type="text" class="form-control" placeholder="Introduce el Modulo"
                                                   maxlength="20" name="usuario">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label>Seleciona un icono</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <?php foreach ($icons as $key) {
                                                    echo "<option>$key</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <span class="label label-primary"><i class="fa fa-500px"></i></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Seleciona el Tipo de Usuario</label>
                                    <select class="form-control" name="tipo">
                                        <?php foreach ($tipo as $key) {
                                            echo '<option value="' . $key["id"] . '">' . $key["tpnombre"] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>


                                <div class="form-group">

                                    <div class="col-10">
                                        <div class="form-group">
                                            <label>Seleciona un icono</label>
                                            <select class="form-control select2" style="width: 100%;">

                                                <?php foreach ($icons as $key) {
                                                    echo "<option>$key</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btnSave" onclick="btnGuardarAction()">
                                Guardar Cambios
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
    </div>
    <div class="control-sidebar-bg"></div>
</div>
<script>
    let form;

    function main() {
        $('.select2').select2();
        consultModulos();
        //form =  document.getElementById("formUsuarios");
    }

    function consultModulos() {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('index.php/Modulos/consultModulos')?>');
        xhr.send();
        xhr.overrideMimeType("application/json");
        xhr.onload = function () {
            if (xhr.status != 200) {
                alert(`Error ${xhr.status}: ${xhr.statusText}`);
            } else {
                console.log(xhr.response);
                generateTable(JSON.parse(xhr.response));
            }
        };
    }

    function generateTable(data) {
        var html = "";
        data.forEach(function (index) {
            html += `<tr>`;//IMAGEN
            html += `<td>${index['idModulo']}</td>`;//ID
            html += `<td>${index['nombre']}</td>`;//USER NAME
            html += `<td><i class="${index['icono']}"></i></td>`;//NOMBRE DLE USUARIO
            html += `<td>${index['ruta']}</td>`;//TIPO DE USUARIO
            html += `<td><span class="label label-success">${index['estado']}</span></td></tr>`//ESTADO DEL USUARIO
        });
        document.getElementById("tbData").tBodies.item(0).innerHTML = html;
    }

    function btnGuardarAction() {
        var data = new FormData(form);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('index.php/Usuarios/addUser')?>');
        xhr.send(data);
        xhr.overrideMimeType("application/json");
        xhr.onload = function () {
            if (xhr.status != 200) {
                alert(`Error ${xhr.status}: ${xhr.statusText}`);
            } else {
                console.log(xhr.response);
            }
        };
    }
</script>
</body>
</html>