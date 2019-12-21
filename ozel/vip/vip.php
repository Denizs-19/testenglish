<?php
$kull=$_POST["vipa"];
$sifre=$_POST["vips"];
$kulld="Vip";
$sifred="Vip";
if($kull==$kulld && $sifre==$sifred){
echo "Burasi Vip Paneli";
}else{
    echo "Lutfen Kendi Sayfaniza Donun Siz Vip Degilsiniz..";
}

?>