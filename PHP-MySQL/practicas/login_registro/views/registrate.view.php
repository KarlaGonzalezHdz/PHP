<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Raleway:wght@100&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor">
        <h1 class="titulo"> Registrate</h1>
        <hr class="border">
        <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST"  class="formulario" name="login">
            <div class="form-group">
            <i class=" icono izquierda fa fa-user"></i>
            <input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
            <i class=" icono izquierda fa fa-lock"></i>
            <input type="password" name="password" class="password" placeholder="Contraseña">
            </div>
            <div class="form-group">
            <i class=" icono izquierda fa fa-lock"></i>
            <input type="password" name="password2" class=" password_btn" placeholder="Confirmar contraseña">
            <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>
        </form>
        <p class="texto-registrate">
            ¿Ya tienes cuenta?
            <a href="login.php">Iniciar sesion</a>

        </p>

    </div>
</body>

</html>