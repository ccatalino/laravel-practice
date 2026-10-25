<?php
$status = 'shipped';

$label = match ($status) {
    'pending' => 'Waiting',
    'shipped' => 'On the way',
    default => 'Unknown',
};

echo $label . PHP_EOL;