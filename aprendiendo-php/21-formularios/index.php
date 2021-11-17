<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>Formularios</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre: </label>
             <p><input type="text" name="nombre" autofocus ></p>
        <label for="apellido">Apellido: </label>
             <p><input type="text" name="apellido" required></p>
             
        <textarea name="" id="" cols="30" rows="10"></textarea><br>

        <select name="peliculas">
            <option value="spiderman">Spiderman</option>
            <option value="batman"> Batman</option>
        </select>
        <input type="submit" value="Enviar">



    </form>
    
</body>
</html>
<?php

?>