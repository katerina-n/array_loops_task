<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 17:16
 */

for($i=0; $i<=10; $i++) {
    $arr[$i]=rand(1,26);
}
foreach($arr as $key ){
    echo $key."<br>";
}
echo"------------------------------------------<br>";
foreach($arr as $value ){
    echo $value."<br>";
}

?>