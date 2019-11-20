<?php
$eenheid=array(500, 200, 100, 50, 20, 10, 5, 2, 1);
$getal= intval($argv[1]);
foreach ($eenheid as $key => $value) {
  if ($getal > $value || $getal==$value) {
    $over=floor($getal/$value);
    $getal=$getal%$value;
    print($over. "x". $value .PHP_EOL);
  }
}
