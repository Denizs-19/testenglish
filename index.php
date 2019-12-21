<?php
include("ozel/admin/banli_ipler.php");
$ip =$_SERVER['REMOTE_ADDR'];
foreach($banli_ipler as $banned) {  
    if($ip == $banned){ 
    echo "<h1 style:color='red';>Admin Tarafindan Banlandiniz.</h1>";
}
if($ip != $banned){
header("Location: giris.php");
}
exit;
}
?>
