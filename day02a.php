<?php
$data = file_get_contents('day02.txt');
$data = trim($data);
$data = explode("\n", $data);

$total = 0;

foreach($data as $item) {
	$sizes = explode('x', $item);
	sort($sizes);

	$total +=
		3 * $sizes[0] * $sizes[1] +
		2 * $sizes[1] * $sizes[2] +
		2 * $sizes[0] * $sizes[2];
}

var_dump($total);
