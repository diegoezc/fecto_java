<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    
    <title>Aplicación CRUD PHP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <?php include('./code_php/conexion.php'); ?>
  </head>

  <body>
  <div id="particles-js"></div>
    <nav class="menu">
            <div class="menu_container">
                <h1 class="menu_logo"><a href="index.php">Pagina Web</a></h1>
                <ul class="menu_links">
                    <li class="menu_item">
                        <a href="empleado.php" class="menu_link">Empleados</a>
                    </li>
                    <li class="menu_item menu_item--show">
                        <a href="" class="menu_link">usuarios <img src="assets/icons/arrow.svg" alt="" class="menu_arrow"></a>
                        <ul class="menu_nesting">
                            <li class="menu_inside">
                                <a href="ver_usuario.php" class="menu_link menu_link--inside">ver usuarios</a>
                            </li>
                            <li class="menu_inside">
                                <a href="ver_producto.php" class="menu_link menu_link--inside">ver producto</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu_item">
                        <a href="" class="menu_link">Log <img src="assets/icons/arrow.svg" alt="" class="menu_arrow"></a>
                        <ul class="menu_nesting">
                            <li class="menu_inside">
                                <a href="producto.php" class="menu_link menu_link--inside"> Crear producto</a>
                            </li>
                            <li class="menu_inside">
                                <a href="reset.php" class="menu_link menu_link--inside"> Crear usuario</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu_item">
                        <a href="mercancia.php" class="menu_link">mercancia</a>
                    </li>
                </ul>
        </nav>

        <div style="margin-top: 200px;"></div>
        