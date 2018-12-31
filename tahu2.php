<?php
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";

//flag

echo $ijo."[+]===========================================[+]\n";
echo $turkis." _____  _  _   _ _   _  $red BOT TAHU VIP+\n";
echo $pink."|__ __/  \| |_| | | | | $kuning Happy New Year 2019\n";
echo $red."  | |/ _  \  _  | |_| | $ijo Created By : Shadow Bot\n";
echo $biru."  |_|_/  \_\| |_|_____| $turkis YT : SHADOW BOT CHANNEL\n";
echo $ijo."[+]===========================================[+]\n\n";
    

echo $pink."Token : $kuning";
$token = trim(fgets(STDIN));
echo $pink."Device Id : $kuning";
$device_id = trim(fgets(STDIN));
echo $pink."Jumlah : $kuning";
$jumlah = trim(fgets(STDIN));
echo $pink."Jeda ?(ex:0)\nInput : $kuning";
$wait = trim(fgets(STDIN));
echo"\n";
echo $biru."[>]".$putih." Bot Akan Jalan Dalam 5 Detik ...\n\n";
sleep(5);
echo $ijo."HAPPY NUYUL ^_^\n\n";
sleep(1);

$i=0;
while($i<$jumlah){
  sleep($wait);
  $i++;
  flush();
	
echo "$turkis [$kuning+$turkis] $putih Coin =>$ijo $coin";
$coin=coin($token,$jumlah,$wait);
	
echo "$turkis [$kuning+$turkis] $putih Penghasilan =>$ijo $cash";
$cash=cash($token,$jumlah,$wait);
	
echo "$turkis [$kuning+$turkis] $putih Diamond =>$ijo $diamond";
$diamond=diamond($token,$device_id,$jumlah,$wait);
	
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
    $i++;
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
$i++;
flush(); } 

function diamond($token,$device_id,$jumlah,$wait){
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, "https://api.indkota.com/System/Invite/rewarded_video");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 
"member_token='.$token.'&device_id=$device_id");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

  $headers = array();
  $headers[] = "Host: api.indkota.com";
  $headers[] = "Accept: application/json, text/javascript, */*; q=0.01";
  $headers[] = "Origin: file://";
  $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4 Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/70.0.3538.80 Mobile Safari/537.36";
  $headers[] = "Content-Type: application/x-www-form-urlencoded";
  $headers[] = "Accept-Language: id-ID,en-US;q=0.9";
  $headers[] = "X-Requested-With: com.tahu.fep";
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $result = curl_exec($ch);
  if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
  }
  curl_close ($ch);
sleep($wait);
	
$i++;
flush();}
	
?>
