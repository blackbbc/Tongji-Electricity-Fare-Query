<?php

$ch=curl_init();

$url='http://nyglzx.tongji.edu.cn/web/datastat.aspx';

$cookie_file=tempnam('./temp','cookie');

$post_fields='__EVENTTARGET=&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE=%2FwEPDwUKLTYwNjgwNDAyOQ8WBB4Jcm9vbXRhYmxlBQ9qZGRhdGFfcm9vbXZpZXceCWRhdGF0YWJsZQULamRkYXRhX3ZpZXcWAgIDD2QWBgIDDxBkZBYBAgFkAgUPEA8WBB4NRGF0YVRleHRGaWVsZAUIUk9PTU5BTUUeC18hRGF0YUJvdW5kZ2QQFRIPMDflj7flhazlr5MgICAgDzA45Y%2B35YWs5a%2BTICAgIA8wOeWPt%2BWFrOWvkyAgICAPMTDlj7flhazlr5MgICAgDzEy5Y%2B35YWs5a%2BTICAgIA8xM%2BWPt%2BWFrOWvkyAgICAPMTTlj7flhazlr5MgICAgDzE15Y%2B35YWs5a%2BTICAgIA8xNuWPt%2BWFrOWvkyAgICAPMTflj7flhazlr5MgICAgDzE45Y%2B35YWs5a%2BTICAgIA4xOeWPt%2BalvCAgICAgIA4yMOWPt%2BalvCAgICAgIA7mnKznp5E0ICAgICAgIA7mnKznp5E1ICAgICAgIA7mnKznp5E2ICAgICAgIA7noJTnqbYyICAgICAgIA7noJTnqbYzICAgICAgIBUSDzA35Y%2B35YWs5a%2BTICAgIA8wOOWPt%2BWFrOWvkyAgICAPMDnlj7flhazlr5MgICAgDzEw5Y%2B35YWs5a%2BTICAgIA8xMuWPt%2BWFrOWvkyAgICAPMTPlj7flhazlr5MgICAgDzE05Y%2B35YWs5a%2BTICAgIA8xNeWPt%2BWFrOWvkyAgICAPMTblj7flhazlr5MgICAgDzE35Y%2B35YWs5a%2BTICAgIA8xOOWPt%2BWFrOWvkyAgICAOMTnlj7fmpbwgICAgICAOMjDlj7fmpbwgICAgICAO5pys56eRNCAgICAgICAO5pys56eRNSAgICAgICAO5pys56eRNiAgICAgICAO56CU56m2MiAgICAgICAO56CU56m2MyAgICAgICAUKwMSZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZGQCFQ88KwANAGQYAQUJR3JpZFZpZXcxD2dkpo89MpdfnmrRKMTX0Kg7J6iJAf0%3D&__VIEWSTATEGENERATOR=46929FBD&__EVENTVALIDATION=%2FwEWIwKgudf4CgKehO%2FXDgKS2sqQDQKbhO%2FXDgLvo6%2FWAQKchO%2FXDgKco5mFBAKo7ZuOCQKQtOGrAwLGtc2eAwKUkP3jDgKphpG2AgL3ot33AgL3ov2mCALP9anUDQLO9e2UAQLO9fEwAsHtjeQDAsHtlaACAsHtmdwCAsHtnfwCAs7toZgNAs7tpbgNAs7tqdQNAsHt7ZQBApnz9msChpiS3QMCtcKkWgL%2BhMCpBAK7ovXVAwLVvLqTBQKewdn%2BDgLeuZHECgK8w4S2BAKjm5WMBgut5h0dn8%2FsuxUY6%2BbZTamdsYka&DistrictDown=%E5%98%89%E5%AE%9A%E6%A0%A1%E5%8C%BA&BuildingDown=%E6%9C%AC%E7%A7%916+++++++&RoomnameText=621&Submit=%E6%9F%A5%E8%AF%A2';


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post_fields);
curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file);
$contents=curl_exec($ch);
curl_close($ch);


$yyes=date('Y-m-d',strtotime("-1 day"));
$yes=date('Y-m-d',strtotime("-2 day"));

$arr=[];
$pattern='@'.$yyes."([\s\S]*)".$yes.'@';
preg_match($pattern,$contents,$arr);
preg_match_all("@<font color=\"Black\">(.*)</font>@U",$arr[1],$arr);

echo $arr[1][2];

//print_r($arr);

?>
