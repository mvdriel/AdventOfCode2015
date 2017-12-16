<?php
$data = file_get_contents('day01.txt');
$data = trim($data);
$data = str_split($data);

$floor = 0;

foreach($data as $item) {
	if($item === '(') {
		$floor++;
	} elseif($item === ')') {
		$floor--;
	}
}

var_dump($floor);
