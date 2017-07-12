<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 12.07.2017
 * Time: 23:08
 */

for($i=0; $i<=10; $i++){
    $arr[$i]=rand(1, 4);
}
print_r($arr);
echo "<br>";
$pro=1;
foreach ($arr as $key => $value){
    if($key%2==0){
$pro=$pro*$arr[$key];
    }
    else{
        echo $arr[$key]." ";
    }
}
echo "<br> Proizvedenie = ".$pro;



?>