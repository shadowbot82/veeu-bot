<?php
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";

//flag

echo $ijo."[+]==========================================[+]\n";
echo $turkis." _____  _  _   _ _   _  $red BOT TAHU VIP+\n";
echo $pink."|__ __/  \| |_| | | | | $kuning Happy New Year 2019\n";
echo $red."  | |/ _  \  _  | |_| | $ijo Created By : Shadow Bot\n";
echo $biru."  |_|_/  \_\| |_|_____| $turkis YT : SHADOW BOT CHANNEL\n";
echo $ijo."[+]==========================================[+]\n\n";
    

echo "Token ?\nInput : ";
$token = trim(fgets(STDIN));
echo "Jumlah ?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda ?(ex:0)\nInput : ";
$wait = trim(fgets(STDIN));

$i=0;
while($i<$jumlah){
  sleep($wait);
  $i++;
  flush();
	
echo $turkis."[+]".$white."Coin => $ijo $coin";
$coin=coin($token,$jumlah,$wait);
echo $turkis."Penghasilan => $ijo $cash\n";
$cash=cash($token,$jumlah,$wait);
	
 }

function coin($token,$jumlah,$wait) {

	

	$rand 	= rand(1,99999);
    $ch 	= curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.indkota.com/Content/Content/read?member_token='.$token.'&content_id=$rand&lang=indonesian&device_id=$rand");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    $result = curl_exec($ch);
    curl_close ($ch);
	echo $result."\n";
    sleep($wait);
    $x++;
    flush();
	} 


function cash($token,$jumlah,$wait)
{

 $rand = rand(1,99999);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.indkota.com//Content/Billing/billing?member_token='.$token.'&billing_id=$rand");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
$result = curl_exec($ch); 
curl_close ($ch);
echo $result."\n"; 
sleep($wait); 
$x++;
flush(); } 





?>
