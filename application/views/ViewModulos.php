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
                    <button class="btn  btn-default" data-toggle="modal" data-target="#modal-agregar" style="float: right">Agregar Usuario</button>
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
                                    <th>ID</th>
                                    <th>Usuario</th>
                                    <th>Empleado</th>
                                    <th>Tipo Usuario</th>
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
                            <form  enctype="multipart/form-data" method="POST" id="formUsuarios">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Usuario</label>
                                    <input type="text" class="form-control" id="txtUsuario" placeholder="Introduce el Usuario" maxlength="20" name="usuario">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contraseña</label>
                                    <input type="password" class="form-control" id="txtContraseña" placeholder="Introduce la contraseña" maxlength="20" name="contrasena">
                                </div>
                                <div class="form-group">
                                    <label>Seleciona el Tipo de Usuario</label>
                                    <select class="form-control" name="tipo">
                                        <?php foreach ($tipo as $key)
                                        {
                                            echo '<option value="'.$key["id"].'">'.$key["tpnombre"].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Seleciona una Foto de Perfil</label>
                                    <input type="file" id="exampleInputFile" name="fotoperfil" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    <p class="help-block">Los archivos no puedne pesar mas de 1MB y tienen que esta en formato PNG o JPG</p>
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btnSave" onclick="btnGuardarAction()">Guardar Cambios</button>
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
        //consultUsuarios();
        //form =  document.getElementById("formUsuarios");
    }

    function consultUsuarios() {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('index.php/Usuarios/consultUsuarios')?>');
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
            html += `<tr><td><center><img src="${index['imgUser']}" class="img-circle" alt="User Image" width="24px"></center></td>`;//IMAGEN
            html += `<td>${index['idUsuario']}</td>`;//ID
            html += `<td>${index['usuario']}</td>`;//USER NAME
            html += `<td>${index['nombre']}</td>`;//NOMBRE DLE USUARIO
            html += `<td>${index['tipo']}</td>`;//TIPO DE USUARIO
            html += `<td><span class="label label-success">${index['estado']}</span></td></tr>`//ESTADO DEL USUARIO
        });
        document.getElementById("tbData").tBodies.item(0).innerHTML = html;

    }


    function btnGuardarAction()
    {
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