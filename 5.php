<?php
$filename = 'info.txt';
$handle = fopen($filename, "rb");
$contents = fread($handle, filesize($filename));
fclose($handle);
echo $contents;
?>