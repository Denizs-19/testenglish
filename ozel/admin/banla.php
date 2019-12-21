<?php
$ac = fopen("banli_ipler.php","a+");

$ip = $_POST["ipadres"];

$banla='$banli_ipler[]='.'"'.$ip.'"'.';';

echo $ip .''.'Kullanici Basariyla Banlandi';
fwrite($ac,$banla);
?>