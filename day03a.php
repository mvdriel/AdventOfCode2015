<?php
$data = file_get_contents('day03.txt');
$data = trim($data);
$data = str_split($data);

$locations = [];
$x = 0;
$y = 0;

$locations[0][0] = 1;

foreach($data as $item) {
	switch($item) {
		case '<':
			$x--;
			break;
		case '>':
			$x++;
			break;
		case '^':
			$y++;
			break;
		case 'v':
			$y--;
			break;
	}
	$locations[$x][$y] = 1;
}

$count = 0;
foreach($locations as $column) {
	foreach($column as $cell) {
		$count++;
	}
}

var_dump($count);
