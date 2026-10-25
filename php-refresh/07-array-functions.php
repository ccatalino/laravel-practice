<?php
$n = [1, 2, 3, 4];

print_r(array_map(fn($x) => $x *2, $n));
print_r(array_filter($n, fn($x) => $x % 2 === 0));
echo array_reduce($n, fn($sum, $x) => $sum + $x, 0) . PHP_EOL;

$items = [['id' => 3], ['id' => 1], ['id' => 2]];
usort($items, fn($a, $b) => $a['id'] <=> $b['id']);
print_r($items);
