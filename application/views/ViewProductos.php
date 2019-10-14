<!DOCTYPE html>
<html lang="en">
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
        max-height: 180px;
    }
</style>
<body class="hold-transition skin-blue sidebar-mini" onload="main()">
<div class="wrapper">
    <?php $this->load->view("include/menu.php") ?>
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Usuarios</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="margin-bottom: 15px">
                </div>
                <div class="col-md-6" style="margin-bottom: 15px">
                    <button class="btn  btn-default" onclick="document.getElementById('btnSave').value = 1; document.getElementById('divStatus').style.display = 'none';" data-toggle="modal" data-target="#modal-agregar" style="float: right">Agregar Producto</button>
                </div>
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Lista de Usuarios en el Sistema</h3>

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
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Seccion</th>
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
            <div class="modal fade bs-example-modal-lg" id="modal-agregar">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Productos</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form  enctype="multipart/form-data" method="POST" id="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nombre del Producto</label>
                                            <input type="text" class="form-control"
                                                   placeholder="Introduce el Nombre el Producto" maxlength="50" name="nombreProducto">
                                        </div>
                                        <div class="form-group">
                                            <label>Seleciona la seccion</label>
                                            <select class="form-control" name="tipo">
                                                <?php foreach ($secciones as $key)
                                                {
                                                    echo '<option value="'.$key["id"].'">'.$key["nombre"].'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Precio del producto</label>
                                            <input type="text" class="form-control"
                                                   placeholder="Introduce el Precio $" maxlength="50" name="precio">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Notas del producto</label>
                                            <textarea class="form-control" rows="3" placeholder="Introduce las notas" name="notas">

                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Seleciona una Foto del Producto</label>
                                            <input type="file" id="exampleInputFile" name="fotoProducto" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                            <p class="help-block">Los archivos no puedne pesar mas de 1MB y tienen que esta en formato PNG o JPG</p>
                                        </div>


                                        <input value="" style="display: none" name="idProducto">
                                    </form>
                                    <div class="form-group" id="divStatus">

                                        <label><input type="checkbox" value="" name="estado" id="cbEstado"> Cambiar Estado de Visualizacion</label>

                                        <p class="help-block">Si desabilitas el producto no sera visible en la pagina principal</p>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btnSave" value="1"
                                    onclick="insertProducto($('#btnSave').val())">
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
    let btnform;
    let cbEstado;
    function main() {
        $('.select2').select2();
        consultProducto("", 1);
        form =  document.getElementById("form");
        cbEstado = document.getElementById("cbEstado");
    }



    function insertProducto(mode)//ESTE METODO LA HACE DE DOS INSERA Y ACTUALIZA
    {
        data = new FormData(form);
        data.append('mode', mode);
        if(mode === 2) {
            data.append("estado", ((cbEstado.checked) ? 1 : 0));
        }
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('index.php/Productos/createProducto')?>');
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
                    consultProducto("", 1);
                }
                else {
                    alert("Se produjo un error");

                }
            }
        };
    }

    function consultProducto(indexSearch, mode) {

        data = new FormData();
        data.append('search', indexSearch);
        data.append('mode', mode);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('index.php/Productos/consultProductos')?>');
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
        form.elements['nombreProducto'].value = data[0]['descripcion'];
        form.elements['tipo'].value = data[0]['seccion'];
        form.elements['precio'].value = data[0]['precio'];
        form.elements['notas'].value = data[0]['notas'];
        form.elements['idProducto'].value = data[0]['idProducto'];
        document.getElementById("btnSave").value = 2;
        var status = parseInt(data[0]['estado']);
        cbEstado.checked = ((status == 1) ? true : false);
        document.getElementById("divStatus").style.display = "inline";
    }

    function generateTable(data) {
        var modalFunction = "data-toggle='modal' data-target='#modal-agregar'";
        var html = "";
        data.forEach(function (index) {
            html += `<tr onclick='consultProducto(${index['idProducto']}, 2)' ${modalFunction}'>`;//IMAGEN
            html += `<td>${index['idProducto']}</td>`;//ID
            html += `<td>${index['descripcion']}</td>`;//USER NAME
            html += `<td>${index['precio']}</td>`;//USER NAME
            html += `<td>${index['seccion']}</td>`;//NOMBRE DLE USUARIO
            html += `<td><span class="label label-success">${index['estado']}</span></td></tr>`//ESTADO DEL USUARIO
        });
        document.getElementById("tbData").tBodies.item(0).innerHTML = html;
    }
</script>

</body>
</html>