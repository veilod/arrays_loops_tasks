<?php
/**
 * Created by PhpStorm.
 * User: IgorPc
 * Date: 14.09.2016
 * Time: 15:42
 */

$arr = array('26' , '17' , '136' , '12' , '79' , '15') ;
$result = 0;

foreach ($arr as $value) {
    $result += ($value * $value);
}


echo "Сумма квадратов элементов этого массива равна {$result} .";