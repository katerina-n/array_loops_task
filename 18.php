<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 12.07.2017
 * Time: 12:29
 */

$arr=['monday', 'thursday', 'wednesday', 'tuesday', 'friday', 'saturday', 'sunday'];
foreach ($arr as $key => $value){
    if($key==5||$key==6){
        echo "<b>".$value."<br>"."</b>";
    }
    else{
        echo $value."<br>";
    }
}

?>