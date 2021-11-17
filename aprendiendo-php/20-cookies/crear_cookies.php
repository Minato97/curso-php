<?php
//basica
setcookie("micookie", "valor de mi galleta");

//cookie con caducidad
setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));

header('Location:ver_las_cookies.php');
?>
