<?php

require_once("mail.php");

$ch=curl_init();

$url='http://192.168.250.43:8801/Default.aspx';

$cookie_file=tempnam('./temp','cookie');

$post_fields='__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE=%2FwEPDwUKLTMxMDU4MDQxNw9kFgICAQ9kFgYCAQ8QZGQWAQIBZAIDDxAPFgYeDURhdGFUZXh0RmllbGQFCFJPT01OQU1FHg5EYXRhVmFsdWVGaWVsZAUGcm9vbWlkHgtfIURhdGFCb3VuZGdkEBUVBualvOagixHnoJTnqbbnlJ%2Flhazlr5MzIBHnoJTnqbbnlJ%2Flhazlr5M0ABHnoJTnqbbnlJ%2Flhazlr5M1AA%2FlrabkuInmpbwgICAgICAP5a2m5Zub5qW8ICAgICAgD%2BWtpuS6lOalvCAgICAgIBDopb%2FljJfkuIDmpbwgICAgEOilv%2BWMl%2BS4iealvCAgICAQ6KW%2F5YyX5Zub5qW8ICAgIBDopb%2FljJfkupTmpbwgICAgEOilv%2BWNl%2BS6jOalvCAgICAQ6KW%2F5Y2X5LiJ5qW8ICAgIBDopb%2FljZfkuIPmpbwgICAgEOilv%2BWNl%2BWFq%2BalvCAgICAQ6KW%2F5Y2X5Lmd5qW8ICAgIA%2Fop6PmlL7mpbwgICAgICAP6Z2S5bm05qW8ICAgICAgEOWQjuWLpOW3peWvkyAgICAR6LWk5bOw6Lev5ZCO5YukMgAS5ZCO5Yuk5YWs5a%2BT5LiJ55u4FRUABDE4NTMEMTg1NQQxODU2BDIxNTQEMjMyOQQyNDU5BDI2MjgEMjkxOAQzMjc3BDM1MjEEMzc2NQQ0MDI2BDQxNTAENDQyNQQ0NzYyBDUzMDYENTMwNwQ1NzI0BDU3OTIENTc4OBQrAxVnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dkZAIHDxBkZBYBZmQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgQFBGJ1eVIFBXVzZWRSBQxJbWFnZUJ1dHRvbjEFDEltYWdlQnV0dG9uMq%2Br%2BM3HEK%2B1B3kd%2BA47Ft24KBB61JLwTeDPM5TXAk09&__VIEWSTATEGENERATOR=CA0B0334&drlouming=1&drceng=2918&txt_fangjian=301&radio=buyR&ImageButton1.x=36&ImageButton1.y=16';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post_fields);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file);

$contents=curl_exec($ch);

curl_close($ch);

echo $contents;

//$yyes=date('Y-m-d',strtotime("-1 day"));
//$yes=date('Y-m-d',strtotime("-2 day"));
//
//$arr=[];
//$pattern='@'.$yyes."([\s\S]*)".$yes.'@';
//preg_match($pattern,$contents,$arr);
//preg_match_all("@<font color=\"Black\">(.*)</font>@U",$arr[1],$arr);
//
//$fare=(float)$arr[1][2];
//
//if ($fare<10)
//    reminder($fare);
//
//echo $fare;

?>
