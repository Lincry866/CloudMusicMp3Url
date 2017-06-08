<?php 
error_reporting(E_ALL & ~E_NOTICE);
//$url="http://music.163.com/weapi/song/enhance/player/url?csrf_toke=params=".$_GET['Params']."&encSecKey=".$_GET['EncSecKey'];
$url="http://music.163.com/weapi/song/enhance/player/url?csrf_toke=";
$pdata="params=".$_GET['params']."&encSecKey=".$_GET['encseckey'];
$ch=curl_init();
$timeout=5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$pdata);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,$timeout);
$data=curl_exec($ch);
curl_close($ch);
echo json_encode($data);

 ?>