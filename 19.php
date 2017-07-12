<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 12.07.2017
 * Time: 12:45
 */

$arr=[ 'sunday', 'monday', 'thursday', 'wednesday', 'tuesday', 'friday', 'saturday'];
foreach ($arr as $key => $value){
    if($key==date("w")){
        echo "<b>".$value."<br>"."</b>";
    }
    else{
        echo $value."<br>";
    }
}
?>