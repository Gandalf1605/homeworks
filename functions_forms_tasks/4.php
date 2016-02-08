<?php
$dir_name = $_GET [word1];
echo $dir_name;
function getFiles ($a){
	$arr = scandir ($a);
	echo '<pre>';
	print_r ($arr);
	echo '</pre>';
}
getFiles ($dir_name);