<?php

$S = 'Hello world!';
$a = str_split(strrev($S));
$b = [];

foreach($a as $i) {
	if (!in_array($i, $b)) {
		$b[] = $i;
	}
}
$c = strrev(implode('',$b));
echo $c;
