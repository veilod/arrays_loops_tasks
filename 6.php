<?php
/**
 * Created by PhpStorm.
 * User: IgorPc
 * Date: 14.09.2016
 * Time: 16:25
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $item) {
    $en[] = $key;

    $ru[] = $item;

}

foreach ($en as $value) {
    echo $value . "<br>";
}


echo "<br>";
echo "<br>";

foreach ($ru as $rus) {
    echo $rus . "<br>";
}