<?php
/**
 * Created by validacionformularios.
 * User: chalosalvador
 * Date: 28/7/17
 * Time: 15:24
 */

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<div class="container">

    <div class="row">
        <div class="col text-center">
            <h2>Formulario de registro</h2>
        </div>
    </div>

    <div class="row">
        <div class="offset-2 col-8">
            <form id="registro">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp" placeholder="Ingrese su nombre">
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="apellidoHelp" placeholder="Ingrese su apellido">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingrese su email">
                    <small id="emailHelp" class="form-text text-muted">Ingrese un mail con el formato usuario@email.com</small>
                </div>

                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input type="password" class="form-control" id="clave" name="clave" aria-describedby="claveHelp" placeholder="Ingrese su clave">
                    <small id="claveHelp" class="form-text text-muted">Su clave debe contener a menos 5 caracteres.</small>
                </div>

                <div class="form-group">
                    <label for="repetir_clave">Repita su clave</label>
                    <input type="password" class="form-control" id="repetir_clave" name="repetir_clave" aria-describedby="repetir_claveHelp" placeholder="Ingrese su clave de nuevo">
                    <small id="repetir_claveHelp" class="form-text text-muted">Vuelva a ingresar su clave.</small>
                </div>

                <button class="btn btn-primary">Enviar</button>
            </form>
        </div>

    </div>
</div>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/main.js"></script>
</body>
</html>
