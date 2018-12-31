<?php
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";

//flag
print"$ijo
========================================================\n
[]  [] [][][] [][][]$red  !!!! WARNING !!!!$pink
[]  [] []     []   []$red ==> Bot Ilegal <==$pink
[][][] [][]   []   []$kuning bisa kena $red Banned$pink
[]  [] []     []   []$pink pergunakan dengan bijak$ijo
[]  [] [][][] [][][]$biru  Created$turkis By$ijo Haykal$pink Hernandez$kuning\n$ijo
========================================================\n$biru";
function id($token,$jumlah,$wait)
{
$x = 0;
while($x < $jumlah) { $rand = rand(1,99999);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.indkota.com//Content/Billing/billing?member_token='.$token.'&billing_id=$rand");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
$result = curl_exec($ch); curl_close ($ch);
echo $result."\n"; sleep($wait); $x++;
flush(); } } echo "Token ?\nInput : ";
$token = trim(fgets(STDIN));
echo "Jumlah ?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda ?(ex:0)\nInput : ";
$wait = trim(fgets(STDIN));
$submit = id($token,$jumlah,$wait);

?>
