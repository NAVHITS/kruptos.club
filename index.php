<?php
header(“Location: https://www.kruptos.club”);
$file=“iplog.txt”;
$f=fopen($file,‘a’); 
fwrite($f,“————————-“.”n”);
fwrite($f,“IP Address:”.$_SERVER[‘REMOTE_ADDR’].”n”); 
fwrite($f,“User Agemt:”.$_SERVER[‘HTTP_USER_AGENT’].”n”); 
fwrite($f,“Host Name:”.php_uname(‘n’).”n”); 
fwrite($f,“Operating System:”.php_uname(‘v’).”(“.php_uname(‘s’).”)”.“n”); 
fwrite($f, '['.$timestamp.']: '.$ipaddress.' '.$webpage.' '.$browser. "\n<br><br>");
fclose($f);
?>
