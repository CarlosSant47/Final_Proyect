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
                            style="float: right" onclick="document.getElementById('btnSave').value = 1;">Agregar Usuario
                    </button>
                </div>
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#modulos" data-toggle="tab" aria-expanded="true">Modulos</a>
                            </li>
                            <li class=""><a href="#tipo" data-toggle="tab" aria-expanded="false">Tipos de Usuario</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="modulos">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Modulos del Sistema</h3>
                                        <div class="box-tools">
                                            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control pull-right"
                                                       placeholder="Search">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-default"><i
                                                            class="fa fa-search"></i>
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
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tipo">
                                <!-- The timeline -->

                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>


            </div>
            <div class="modal fade" id="modal-agregar">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    onclick="document.getElementById('formModulos').reset()">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Usuarios</h4>
                        </div>
                        <div class="modal-body">

                            <form enctype="multipart/form-data" method="POST" id="formModulos">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Modulo</label>
                                            <input type="text" class="form-control" placeholder="Introduce el Modulo"
                                                   maxlength="20" name="nombreModulo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Selesciona un icono</label>
                                            <select id="cmbIcon" class="form-control select2" style="width: 100%;"
                                                    name="icono">
                                                <?php foreach ($icons as $key) {
                                                    echo "<option value='fa $key'>$key</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ruta de Acceso</label>
                                            <input type="text" class="form-control" placeholder="Introduce la ruta"
                                                   maxlength="80" name="ruta">
                                        </div>
                                    </div>
                                </div>
                                <input value="" style="display: none" name="idModulo">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btnSave" value="1"
                                    onclick="insertModulo($('#btnSave').val())">
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
        consultModulos("", 1);
        //form =  document.getElementById("formUsuarios");
    }

    function insertModulo(mode)//ESTE METODO LA HACE DE DOS INSERA Y ACTUALIZA
    {
        data = new FormData(document.forms['formModulos']);
        data.append('mode', mode);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('index.php/Modulos/insertModulos')?>');
        xhr.send(data);
        xhr.overrideMimeType("application/json");
        xhr.onload = function () {
            if (xhr.status != 200) {
                alert(`Error ${xhr.status}: ${xhr.statusText}`);
            } else {
                console.log(xhr.response);
                var result = JSON.parse(xhr.response);
                if (result['statusInsert']) {
                    alert("La operacion se realizo con exito");
                    consultModulos("", 1);
                }
                else {
                    alert("Se produjo un error");

                }
            }
        };
    }

    function consultModulos(indexSearch, mode) {

        data = new FormData();
        data.append('search', indexSearch);
        data.append('mode', mode);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('index.php/Modulos/consultModulos')?>');
        xhr.send(data);
        xhr.overrideMimeType("application/json");
        xhr.onload = function () {
            if (xhr.status != 200) {
                alert(`Error ${xhr.status}: ${xhr.statusText}`);
            } else {
                console.log(xhr.response);
                if (mode === 1)//ES PARA GENERAR LA TABLA
                    generateTable(JSON.parse(xhr.response));
                else
                    showInformationModal(JSON.parse(xhr.response));
            }
        };
    }

    function showInformationModal(data) {
        document.getElementById("formModulos").elements['nombreModulo'].value = data[0]['nombre'];
        //document.getElementById("formModulos").elements['nombreModulo'] = data[0]['nombre'];
        document.getElementById("formModulos").elements['ruta'].value = data[0]['ruta'];
        document.getElementById("formModulos").elements['idModulo'].value = data[0]['idModulo'];
        document.getElementById("btnSave").value = 2;
    }

    function generateTable(data) {
        var modalFunction = "data-toggle='modal' data-target='#modal-agregar'";
        var html = "";
        data.forEach(function (index) {
            html += `<tr onclick='consultModulos(${index['idModulo']}, 2)' ${modalFunction}'>`;//IMAGEN
            html += `<td></td>`;//ID
            html += `<td>${index['nombre']}</td>`;//USER NAME
            html += `<td><i class="${index['icono']}"></i></td>`;//NOMBRE DLE USUARIO
            html += `<td>${index['ruta']}</td>`;//TIPO DE USUARIO
            html += `<td><span class="label label-success">${index['estado']}</span></td></tr>`//ESTADO DEL USUARIO
        });
        document.getElementById("tbData").tBodies.item(0).innerHTML = html;
    }
</script>
</body>
</html>