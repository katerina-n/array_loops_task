


<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 13.07.2017
 * Time: 0:19
 *
 *  Создать генератор случайных таблиц. Есть переменные:
 * $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
 * Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon',
 * 'brown','green'). Необходимо создать скрипт, который по заданным условиям выведет
 * таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным
 * образом из массива $colors. В каждой ячейке должно находиться случайное число.
 */
$colors = array('red','yellow','blue','gray','maroon','brown','green');

$a=rand(3,7);
$b=rand(3,7);

echo "<table border='1'>";
for($i=1; $i<=$a; $i++){
   echo  "<tr>";


    for($j=1; $j<=$b; $j++ ){
        $i=rand(0,6);
      echo "<td style='background-color:".$colors[$i]."'>".rand(111,200000)."</td>";
    }
   echo  "</tr>";
}



echo "</table>";

?>