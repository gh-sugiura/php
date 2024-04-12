<?php

$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$item = htmlspecialchars($_POST["item"], ENT_QUOTES);
$order = htmlspecialchars($_POST["order"], ENT_QUOTES);

echo "私の名前は、" . $name . "です。";
echo "<br/>";
echo "ご希望の商品は、" . $item . "で、";
echo "<br/>";
echo "注文数は、" . $order . "つです。";

?>