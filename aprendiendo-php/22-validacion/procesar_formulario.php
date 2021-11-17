<?php
$error = 'Faltan_valores';

if(!empty($_POST['nombre']) &&!empty($_POST['apellidos'])&&!empty($_POST['edad'])&&!empty($_POST['email'])&&!empty($_POST['pass']))
{
$error= false;

$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$edad= $_POST['edad'];
$email= $_POST['email'];
$pass= $_POST['pass'];
} else{
    $error ='faltan_valores';
    header("Location:index.php?error=$error");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios PHP</title></title>
</head>
<body>
    <?php
    if($error == 'ok'): ?>
    <h1>Datos validados correctamente</h1>
        <p><?=$nombre?></p>
        <p><?=$apellido?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        
    <?php endif; ?>
    
</body>
</html>