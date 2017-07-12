<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 17:49
 */
$arr=[4, 2, 5, 19, 13, 0, 10];

foreach($arr as $value){
    if(($value==3)||($value==2)||($value==4)){
        echo 'Есть!';
        break;
    }
}


?>