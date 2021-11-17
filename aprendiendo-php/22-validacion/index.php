<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios</title>
</head>
<body>
    <h1>Validar formularios en php</h1>
    <?php
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == 'faltan_valores'){
            echo '<strong style="color:red">Introduce todos los datos en los campos del formulario</strong>';
        }
    }
    ?>
    <form action="procesar_formulario.php" method="POST">
    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre"  pattern="[A-Za-z]+"><br>

    <label for="apellidos">Apellidos</label><br>
    <input type="text" name="apellidos"  pattern="[A-Za-z]+"><br>

    <label for="edad">Edad</label><br>
    <input type="number" name="edad"  pattern="[0-9]+"><br>

    <label for="email">Email</label><br>
    <input type="email" name=email ><br>

    <label for="pass">Password</label><br>
    <input type="password" name="pass"><br>

    <input type="submit">



    </form>
</body>
</html>