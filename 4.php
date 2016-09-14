<?php
/**
 * Created by PhpStorm.
 * User: IgorPc
 * Date: 14.09.2016
 * Time: 16:03
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $item) {
    echo "Ключи: {$key} ";
    echo "<br>";
}


echo "<br>";
echo "<br>";

foreach ($arr as $key => $item) {
    echo "Значения: {$item}";
    echo "<br>";
}