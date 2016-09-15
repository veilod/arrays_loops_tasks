<?php
/**
 * Created by PhpStorm.
 * User: IgorPc
 * Date: 15.09.2016
 * Time: 9:51
 */



echo "<table border='1'>";

for ($i = 1; $i <= 10; $i++){
    echo "<tr>";
    for ($j = 1 ; $j <= 10 ; $j++ ){
        echo "<td>" . $i * $j . "</td>";

    }
    echo "</tr>";

}
echo "</table>";