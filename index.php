<?php
include("lib/libs.php");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include("header.php"); ?>

    </head>
    <body>
        <?php include("menu.php"); ?>
        <div class="container">
            <h1 align="center">Estudio de Abogados, el bueno de Saul</h1>
            <div class="card text-center">
                <div class="card-header">
                    Aplicación web para revisión de leyes
                </div>
                <div class="card-body">
                    <img class="card-img-top" src="<?= URLBASE ?>/img/banner.png" style="height:16rem;width:22rem" alt="Card image cap">
                    <p></p>
                    <a href="<?= URLBASE ?>editar.php" class="btn btn-primary">Ir a editar leyes</a>
                </div>
                <div class="card-footer text-muted">
                    última actualización hace 5 días
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>

    </body>
</html>
