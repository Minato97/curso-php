<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <form method="POST" action="recibir.php">
        <p>
        <label>Nombre</label>
        <input type="text" name="nombre">
        </p>
        <p>
        <label>Apellidos</label>
        <input type="text" name="apellidos">
        </p>

        <input type="submit" value="Enviar datos">


    </form>
    
</body>
</html>