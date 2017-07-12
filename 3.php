<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 17:14
 */

$arr=[26, 17, 136, 12, 79, 15];
$result=0;
foreach($arr as $value){
    $result=$result+$value*$value;
}
echo $result;
?>