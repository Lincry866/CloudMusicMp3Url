<?php 
error_reporting(E_ALL & ~E_NOTICE);
$url="http://music.163.com/api/song/detail/?id=". $_GET['mid'] ."&ids=[".$_GET['mid']."]";
//$url="http://music.163.com/api/song/detail/?id=366752&ids=[366752]";
$ch=curl_init();
$timeout=5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,$timeout);
$data=curl_exec($ch);
curl_close($ch);
echo json_encode($data) ;

 ?>