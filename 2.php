<?php
/**
 * Created by PhpStorm.
 * User: IgorPc
 * Date: 14.09.2016
 * Time: 15:35
 */

$arr = array('1' , '20' , '15' , '17' , '24' , '35');
$result = 0;
foreach ($arr as $item) {
    $result +=  $item;

}

  echo " Сумма эдементов массива равна {$result} .";