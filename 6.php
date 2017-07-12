<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 17:25
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en=[];
$ru=[];
foreach ($arr as $key =>$value){
    $en[]=$key;
    $ru[]=$value;
}
print_r($en);
echo"<br>";
print_r($ru);

?>