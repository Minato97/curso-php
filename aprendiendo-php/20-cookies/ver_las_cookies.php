<?php
if (isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
} else{
    echo "No existe la cookie"."<br/>";
}

?>
<a href="crear_cookies.php">Crear cookies</a>
<a href="borrar_cookie.php">Borrar las cookies</a>