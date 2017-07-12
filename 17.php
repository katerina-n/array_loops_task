<?php
$arr=['December','January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November'];
foreach ($arr as $key => $value){
    if($key==date("m")){
        $month=$value;
echo "<b>".$month." "."</b>";
    }
    else {
        echo $value . " ";
    }
}



?>