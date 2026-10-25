<?php

// Union types and nullsafe
function formatId(int|string $id): string
{
    return 'ID-' . $id;
}
echo formatId(7) . PHP_EOL;
echo formatId('A9') . PHP_EOL;

$user = null;
echo $user?->getname() ?? 'Guest';
echo PHP_EOL;