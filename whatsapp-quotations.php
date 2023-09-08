<?php
$arquivo  = 'whatsapp-quotations/'. date('Y-m-d') .'.txt';
$handle   = fopen($arquivo, 'a+');
$texto    = "[". date('d/m H:i') ."]: ". $_GET['text'] ."\n";
$escrever = fwrite($handle, $texto);

fclose($handle);