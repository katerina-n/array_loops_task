<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 17:29
 */

$arr=[2, 5, 9, 15, 0, 4];
foreach ($arr as $value){
    if(($value>3)&&($value<10)){
        echo $value."<br>";
    }
}
?>