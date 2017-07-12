<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 17:31
 */
$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
$result='';
foreach ($arr as $value){
    $result=$result.(string)$value;
}
echo $result;
?>