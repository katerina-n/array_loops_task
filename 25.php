<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 12.07.2017
 * Time: 16:57
 */

for($i=0; $i<=10; $i++){
    $arr[$i]=rand(1, 35);
}

print_r($arr);
$max=$arr[0];
$min=$arr[0];
$keymax=0;
$keymin=0;
for( $i=1; $i<=count($arr)-1; $i++){
    if($arr[$i]>=$max){
        $max=$arr[$i];
        $keymax=$i;
    }
    else{
        if($arr[$i]<$min) {
            $min = $arr[$i];
            $keymin=$i;
        }
    }
}



echo "<br> min= ".$min." max=  ".$max;

foreach ($arr as $key =>$value){
    if($key==$keymin){
        $arr[$keymin]=$max;
    }
    else{
        if($key==$keymax){
            $arr[$keymax]=$min;
        }
    }
}
echo "<br>";
print_r($arr);
?>