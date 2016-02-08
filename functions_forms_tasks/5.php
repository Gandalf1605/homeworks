<?php
$dir_name = $_GET [word1];
$file_name = $_GET [word2];
echo "Имя директории: ".$dir_name;
echo '<br>';
echo "Искомое имя файла: ".$file_name;
function getFiles ($a, $b){
	$counter = 0;
	$arr = scandir ($a);
	echo '<pre>';
	for ($i=0; $i<count ($arr); $i++){
	  	
	  $pos = strpos ($arr[$i], $b);
	  
	  
	  if ($pos === false){
		  
	  }
		else {  $counter = $counter+1;
		  echo '<pre>';
		  print_r ($arr[$i]);
		  echo '</pre>';
		}
		}  
	  if ($counter ==0){
		  echo "Искомые файлы не найдены";
	  }
	}
	echo '</pre>';

getFiles ($dir_name, $file_name);