<?php
/**
 * Created by PhpStorm.
 * User: parus
 * Date: 08.02.2016
 * Time: 12:32
 */

function getCommonWords($aa1, $bb1){


    $arr1 = explode("|", $aa1);
    $arr2 = explode("|", $bb1);

    for ($i=0; $i<count($arr1); $i++){
        for ($y=0; $y<count($arr2); $y++){

            if ($arr1[$i]==$arr2[$y]){
                echo "Одинаковые слова:";
                print_r($arr1[$i]."<br />");
            }
        }

    }
};

$a1 = $_GET ['word1'];
$b1 = $_GET ['word2'];

getCommonWords($a1, $b1);
