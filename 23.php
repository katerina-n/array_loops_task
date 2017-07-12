<form action="23.php" method="get">
    <input type="text" name="number"/>
    <input type="submit"/>
</form>
<?php

$str=implode($_GET);
if((int)$str)
{
    $a=(int)$str;
    $c=intval($a/100);
$d=intval($a/10)-$c*10;
$o=$a%10;
$summa=$c+$d+$o;
}
echo $summa;

?>