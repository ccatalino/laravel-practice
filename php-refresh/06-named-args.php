<?php
function makeShipment(string $from, string $to): string
{
    return $from . ' to ' . $to;
}

echo makeShipment(to: 'Cebu', from: 'Manila') . PHP_EOL;