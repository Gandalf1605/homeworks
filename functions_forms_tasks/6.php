<?php
/**
 * Created by PhpStorm.
 * User: parus
 * Date: 09.02.2016
 * Time: 12:18
 */

$text_arr = $_GET[word1];
function sortArray($a)
{
    $arr = explode(" ", $a);
    echo "<pre>";
        print_r($arr);
    echo "</pre>";
    echo "<br />";
    $size = count($arr) - 1;
    echo "Максимальный индекс массива: ".$size;
    echo "<br />";
//Сортируем массив
    for ($i = $size; $i >= 0; $i--) {
        for ($j = 0; $j <= ($i - 1); $j++)
            if (strlen($arr[$j]) > strlen($arr[$j + 1])) {
                $k = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $k;
            }
    }


// Выводим самые длиные элементы. За счет сортировки они находятся в конце массива.
    echo "Выводим три самых длинных слова: ";
    echo "<br />";

    for ($i = $size; $i>=$size-2; $i--){
        echo "<pre>";
            print_r($arr[$i]);
        echo "</pre>";
    }
}
sortArray($text_arr);