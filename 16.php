<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 17:56
 *
 * Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9
 */
$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $key => $value){
    if(($key!=3)&&($key!=6)){
        echo $value." ";

    }
    else{
        echo "<br>". $value." ";
    }
}


?>