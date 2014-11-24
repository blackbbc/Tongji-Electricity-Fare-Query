<?php

require_once("mail.php");

$ch=curl_init();

$url='http://192.168.250.43:8801/Default.aspx';

$cookie_file=tempnam('./temp','cookie');

$post_fields='__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE=%2FwEPDwUKLTMxMDU4MDQxNw9kFgICAQ9kFgYCAQ8QZGQWAQIFZAIDDxAPFgYeDURhdGFUZXh0RmllbGQFCFJPT01OQU1FHg5EYXRhVmFsdWVGaWVsZAUGcm9vbWlkHgtfIURhdGFCb3VuZGdkEBUTBualvOagiw4yMOWPt%2BalvCAgICAgIA4xOeWPt%2BalvCAgICAgIA8wN%2BWPt%2BWFrOWvkyAgICAPMDjlj7flhazlr5MgICAgDzA55Y%2B35YWs5a%2BTICAgIA8xMOWPt%2BWFrOWvkyAgICAPMTTlj7flhazlr5MgICAgDzEy5Y%2B35YWs5a%2BTICAgIA8xNeWPt%2BWFrOWvkyAgICAPMTPlj7flhazlr5MgICAgDuacrOenkTYgICAgICAgDuacrOenkTUgICAgICAgDuacrOenkTQgICAgICAgDueglOeptjMgICAgICAgDueglOeptjIgICAgICAgDzE25Y%2B35YWs5a%2BTICAgIA8xN%2BWPt%2BWFrOWvkyAgICAPMTjlj7flhazlr5MgICAgFRMABDQ4MzMENDgzNAExAzQyNQM2NTkDNzQ4Azk4OQQxMjc1BDE1MzgEMTUzOQQzMDAxBDMwMDIEMzAwMwQzMDA0BDMwMDUEMzcwMQQzNzAyBDM3MDMUKwMTZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2RkAgcPEGRkFgFmZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WBAUEYnV5UgUFdXNlZFIFDEltYWdlQnV0dG9uMQUMSW1hZ2VCdXR0b24yP0IHOglFMkkyTHTZ3WzHnXk7IQL9ZmWyLTBUtnBHv04%3D&__VIEWSTATEGENERATOR=CA0B0334&drlouming=5&drceng=3001&txt_fangjian=621&radio=buyR&ImageButton1.x=36&ImageButton1.y=18';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post_fields);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file);

$contents=curl_exec($ch);

curl_close($ch);



$arr=[];
$pattern='@'.'orange">'.'([\s\S]*)'.'</span>'.'@U';
preg_match($pattern,$contents,$arr);

$fare=(float)$arr[1];

if ($fare<10)
    reminder($fare);

echo $fare;

?>
