<?php

require_once("status_codes.php");
$result = array_rand($status_code,4);

echo("<pre>");
var_dump($result);
echo ("</pre>");
echo $result;


?>