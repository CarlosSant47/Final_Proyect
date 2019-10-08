<?php
$menu = $this->session->userdata('modulos');
$empleado = $this->session->userdata('empleado');
$usuario = $this->session->userdata('userContent');?>

<header class="main-header">
    <a href="index2.html" class="logo">
        <span class="logo-mini"><b>A</b>LT</span>
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url("assets/storage/".$usuario["imagenUsuario"])?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?= $empleado["nombre"] ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= base_url("assets/storage/".$usuario["imagenUsuario"])?>" class="img-circle"
                                 alt="User Image">
                            <p>
                                <?= $empleado["nombre"] ?> - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?= base_url("index.php/Login/logoutAction") ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url("assets/storage/".$usuario["imagenUsuario"])?>"
                     class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $empleado["nombre"] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <?php
            $html = '';
            foreach ($menu as $item) {
                $html .= '<li><a href="'.base_url($item["ruta"]).'"><i class="' . $item["icon"] . '"></i> <span>' . $item["nombre"] . '</span></a></li>';
            }
            echo $html;
            ?>
        </ul>
    </section>
</aside>