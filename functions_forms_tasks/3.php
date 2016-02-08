<?php
$max_number = (int) $_GET [word1];
echo "Максимальное кол-во символов";
var_dump ($max_number);
echo $max_number;
echo "<br />";
$arr = file("3.txt");
echo "Выводим содержимое файла"."<br />";
for ($i=0; $i<count ($arr); $i++){
	print_r ($arr[$i]);
}
for ($i=0; $i<count ($arr); $i++){
	$arr_txt = explode(" ", $arr[$i]);
	 for ($y=0; $y<count ($arr_txt); $y++){
		 
		 if (strlen ($arr_txt[$y])>$max_number){
			echo "<br />";
			$a = strlen ($arr_txt[$y]);
			echo $a;
			echo "<br />";
			echo "Кол-во символов данного элемента больше макс. ";
			print_r($arr_txt[$y]);
			echo "<br />";
			$arr[$i] = "";
		 }
	 }
}
$fp = fopen("3.txt", "w");
fputs($fp, implode("", $arr));
fclose($fp);
echo "Снова выводим содержимое:"."<br />";
for ($i=0; $i<count ($arr); $i++){
	print_r ($arr[$i]);
}
