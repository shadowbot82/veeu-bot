<?php
@system("clear");
//warna
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";

//flag
print"$ijo
======================================================\n__     _______ _____ _   _ 
\ \   / / ____| ____| | | | @author : Shadow Bot
 \ \ / /|  _| |  _| | | | | Subscribe Channel gw yak:)
  \ V / | |___| |___| |_| | Invite Code : PX283E
   \_/  |_____|_____|\___/\n ======================================================\n$putih";
//link
$link = "https://www.veeuapp.com/v1.0/incentive/tasks?access_token=".$access_token;
//body
$video = array(
   'locale' => 'in_ID',
	  'task_extra_info' => '',
	  'task_name' => 'watch_video_ball_01',
	  'timezone' => 'GMT+07:00');
//encode
$body0 = json_encode($video,true);
//header
$head = array();
$head[] = "Host: www.veeuapp.com";
          "Connection: Keep-Alive";
          "Accept-Encoding: gzip";
          "User-Agent: okhttp/3.10.0";
$header = array();
$header[] = "Content-Type: application/json";              
             "charset=UTF-8";
             "Content-Length: 96";
             "Host: www.veeuapp.com";
             "Connection: Keep-Alive";
             "Accept-Encoding: gzip";
             "User-Agent: okhttp/3.10.0";
//config
include(readline("masukan config: "));

//intro
echo "$kuning.[>] $putih sedang login.....\n";
sleep(1);

//get info
while (true) :
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.veeuapp.com/v1.0/me?access_token=".$access_token,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTPHEADER => $head,
    CURLOPT_SSL_VERIFYPEER => 0,
      ));
$result = curl_exec($curl);                                   curl_close($curl);
$jres = json_decode($result,true);
echo "$ijo.[*]  sukses !!!\n";
echo "$putih|user: $biru".$jres['user']['nickname']."\n";
echo "$putih|email: $biru".$jres['user']['email']."\n";
break;
endwhile;

//konfirmasi
$konfir =readline("$putih.[?] $turkis konfirmasi (y/n): ");
       if($konfir == 'y' OR $konfir == 'Y'){
        @system("clear");
        }
        else{
        echo "$red.[!] ".$putih."login dibatalkan\n";
        exit;
        }

//intro2

echo "$kuning.[>] $putih memproses data !!!\n";
sleep(1);
echo "$kuning.[>] $putih mejalankan bot......\n";
sleep(1);
//include
include('modules');


//bot_nonton
while (true) :
sleep(1);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $link,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $body0,
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_SSL_VERIFYPEER => 0,
      ));
$result_video = curl_exec($curl);                                   curl_close($curl);
$jvid = json_decode($result_video,true);

if($jvid['code'] == '4040') {
echo "$red.[!] $putih nonton video:$red ".$jvid['message']."$putih\n";
sleep(1);
//info user
echo "$putih|user: $biru".$jres['user']['nickname']."\n";
echo "$putih|email: $biru".$jres['user']['email']."\n";

exit;
}
else{
echo "$kuning.[>] $ijo sukses $putih| user: $biru".$jres['user']['nickname']."$ijo
[!] $turkis reward_point:$putih ".$jvid['task']['reward_point']."$ijo | $turkis complete_seconds:$putih ".$jvid['task']['extra']['complete_seconds']."$ijo
[!] $turkis current_point:$putih ".$jvid['point']['current_point']."$ijo | $turkis today_revenue_point:$putih ".$jvid['point']['today_revenue_point']."
=======================================================\r\n";}
endwhile;
?>
