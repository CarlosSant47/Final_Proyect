<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Empleado</title>
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
                    <h2>Empleados</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="margin-bottom: 15px">
                </div>
                <div class="col-md-6" style="margin-bottom: 15px">
                    <button class="btn  btn-default" data-toggle="modal" data-target="#modal-agregar" style="float: right">Agregar Empleado</button>
                </div>
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Lista de Empleados</h3>

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
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    
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
                            <h4 class="modal-title">Empleados</h4>
                        </div>
                        <div class="modal-body">
                            <form  enctype="multipart/form-data" method="POST" id="formUsuarios">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control" id="txtUsuario" placeholder="Introduce el Nombre" maxlength="20" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="txtContraseña" placeholder="Introduce el Apellido Paterno" maxlength="20" name="paterno">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Apellido Materno</label>
                                    <input type="text" class="form-control" id="txtContraseña" placeholder="Introduce el Apellido Materno" maxlength="20" name="materno">
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
        consultEmpleados();
        form =  document.getElementById("formUsuarios");
    }

    function consultEmpleados() {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('index.php/Empleados/consultEmpleados')?>');
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
            
            html += `<td>${index['idEmpleado']}</td>`;//ID
            html += `<td>${index['nombre']}</td>`;//USER NAME
            html += `<td>${index['paterno']}</td>`;//NOMBRE DLE USUARIO
            html += `<td>${index['materno']}</td></tr>`;//TIPO DE USUARIO
        });
        document.getElementById("tbData").tBodies.item(0).innerHTML = html;

    }


    function btnGuardarAction()
    {
        var data = new FormData(form);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('index.php/Empleados/addEmpleado')?>');
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
                    alert("Se agrego con exito");
                    consultEmpleados();
                }
                

            }
        };

    }

</script>

</body>
</html>