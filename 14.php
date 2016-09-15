<?php
/**
 * Created by PhpStorm.
 * User: IgorPc
 * Date: 15.09.2016
 * Time: 13:14
 */




$arr = [4, 2, 5, 19, 13, 0, 10];
$e = 10;

foreach ($arr as $item) {
    if ($item == $e && $item == $e && $item == $e) {
        echo "Есть!";
        break;
    }
    else {
        echo " Нет!";
    }

}

