<?php

// HTTP Header Tool - HeadByte Version 1.0 ( Beta )
// Coded By Afrizal F.A - ICWR-TECH
// PHP Code - USE PHP CURL

error_reporting(0);
while(true) {


echo "\nOption : ";
$op = trim(fgets(STDIN));
if($op == "set cookie") {
echo "\nSet Cookie File : ";
$cookie = trim(fgets(STDIN));
}
if($op == "post") {
echo "\nSelect Type Post Header : ";
$tpost = trim(fgets(STDIN));
if($tpost == "fields") {
echo "\nURL : ";
$urlf = trim(fgets(STDIN));
echo "\nPOST FIELDS : ";
$postf = trim(fgets(STDIN));
echo "\n";
$c = curl_init();
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_URL, $urlf);
curl_setopt($c, CURLOPT_POSTFIELDS, $postf);
curl_setopt($c, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($c, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($c, CURLOPT_VERBOSE, 10);
$postf = curl_exec($c);
if($postf) {
} else {
echo "\nCheck Network Or Target";
}
echo "\n";
}
if($tpost == "bruteforce") {
echo "\nURL : ";
$urlb = trim(fgets(STDIN));
$c = curl_init();
}
}
if($op == "get") {
echo "\nSelect Type Get Header : ";
$tget = trim(fgets(STDIN));
if($tget == "direct") {
echo "\nURL : ";
$urld = trim(fgets(STDIN));
$gdirect = curl_init();
curl_setopt($gdirect, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($gdirect, CURLOPT_URL, $urld);
curl_setopt($gdirect, CURLOPT_VERBOSE, true);
$direct_res = curl_exec($gdirect);
if($direct_res) {
echo "\n$direct_res\n";
} else {
echo "\nCheck Network Or Target";
}
}
if($tget == "cookie") {
echo "\nURL : ";
$urld = trim(fgets(STDIN));
$gcookie = curl_init();
curl_setopt($gcookie, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($gcookie, CURLOPT_URL, $urld);
curl_setopt($gcookie, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($gcookie, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($gcookie, CURLOPT_VERBOSE, true);
$direct_res = curl_exec($gdirect);
if($direct_res) {
echo "\n$direct_res\n";
} else {
echo "\nCheck Network Or Target";
}
}
}


}
?>
