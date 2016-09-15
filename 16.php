<?php
/**
 * Created by PhpStorm.
 * User: IgorPc
 * Date: 15.09.2016
 * Time: 15:05
 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

$str = '';
foreach ($arr as $elem)
{
    if ($elem == 3 or $elem == 6 or $elem == 9)
    {

        $str .= $elem.', ';
    }
    else
    {
        $str .= $elem.'<br>';
    }

}
echo $str;

//  не доделал
