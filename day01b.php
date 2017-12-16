<?php
$data = file_get_contents('day01.txt');
$data = trim($data);
$data = str_split($data);

$floor = 0;

foreach($data as $i => $item) {
	if($item === '(') {
		$floor++;
	} elseif($item === ')') {
		$floor--;
	}
	if($floor === -1) {
		var_dump($i + 1);
		exit;
	}
}
