<?php
function total(int ... $nums):int
{
    return array_sum($nums);
}

echo total (1, 2, 3) . PHP_EOL;
echo total (... [4, 5, 6]) . PHP_EOL;
