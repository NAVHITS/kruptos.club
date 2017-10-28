<?php
$file = "ips.txt";
$returnurl = "kruptos.club";

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$referrer = $_SERVER['HTTP_REFERER'];
if ($referred == "") {
$referrer = "This page was accessed directly";
}
date_default_timezone_set('asia/kolkata');
$time = date("h:i:sa");
$date = date("d/m/Y");
$handle = fopen($file, 'a') or die('Cannot open file:  '.$file);
$file_contents = (string)$ip + "\t" + (string)$browser + "\n" +  $referrer + "\n" +  (string)$date + "\t" + (string)$time + "\n\n";
fwrite($handle, $file_contents);
fclose($handle);
header("Location: {$returnurl}");
?>
