<?php
include("ayar.php");
session_start();
$kull=$_POST["admina"];
$sifre=$_POST["admins"];

foreach($admins as $admin){
    if($kull == $admin){
    if($sifre == "123456"){
echo '<form action="banla.php" method="post">
<table cellspacing="5" cellpadding="5" border="1px">
<tr>
<td>Banlanacak IP Adresini Yaziniz.</td><td><input type="text" name="ipadres"/></td></tr><tr><td></td><td><input type="submit" value="Kullaniciyi Banla"/></td></tr></table></form>';
exit;
}
 }else{
    echo "Lutfen Kendi Sayfaniza Donun Siz Admin Degilsiniz..";
 }
}
?>