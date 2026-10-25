<?php
class Shipment
{
    public function __construct(
        public readonly string $trackingNumber,
        public string $status = 'pending',
    ){}
}

$s = new Shipment('TRK-001');
echo $s->trackingNumber . PHP_EOL;
echo $s->status . PHP_EOL;
