<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 12.07.2017
 * Time: 16:20
 */


$a=rand(300001, 10000000000);
$b=rand(0,9);
$chislo=(string)$a;
$v=(string)$b;
$int=substr_count( $chislo, $v);
echo "V chislo ".$chislo. " kolichestvo vxogdeniu chisla ".$v. " ravno = ".$int;

?>