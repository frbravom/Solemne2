<?php
include("lib/libs.php");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Leyes</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                <div class="card-header">
                    Formulario para Agregar Leyes
                    <form id="formAgregar" action="" method="POST" class="needs-validation">
                        <div class="form-group">
                            <label>Numero de Ley</label>
                            <input class="form-control" id="numero" name="numero" type="text" placeholder="Escriba el numero" required>
                            <div class="invalid-feedback">Escriba el numero correcto</div>
                        </div>

                        <div class="form-group">
                            <label>Fecha de Publicacion</label>
                            <input class="form-control" id="fechaPub" name="fechaPub" type="date" placeholder="Seleccione fecha" required>
                            <div class="invalid-feedback">Escoja la fecha correcta</div>
                        </div>
                        
                        <div class="form-group">
                            <label>Fecha de Promulgacion</label>
                            <input class="form-control" id="fechaPro" name="fechaPro" type="date" placeholder="Seleccione fecha" required>
                            <div class="invalid-feedback">Escoja la fecha correcta</div>
                        </div>
                        
                        
                        <div class="form-group"
                             <label>Titulo</label>
                            <input id="titulo" class="form-control" name="titulo" type="text" placeholder="Escriba el titulo" required>
                            <div class="invalid-feedback">Escriba el titulo correcto</div>
                        <input id="btnenviar" type="button" value="Enviar" > 
                    </form>
                    <div id="mensaje"></div>
                    <script>

                        $("#btnenviar").click(function (event) {
                            var form = $("#formAgregar");

                            if (form[0].checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            } else {
                                cargadatos();
                            }
                            form.addClass("was-validated");
                        });

                        function cargadatos() {
                            var nombre = $("#nombre").val();
                            var apellido = $("#apellido").val();
                            var fechaPub = $("#fechaPub").val();
                            var fechaPro = $("#fechaPro").val();
                            $("#mensaje").load("cargadatos.php",
                                    {"nombre": nombre,
                                        "apellido": apellido,
                                    "fechaPub" : fechaPub,
                                    "fechaPro" : fechaPro});
                        }
                    </script>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>

    </body>
</html>
