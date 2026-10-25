<?php
enum Status: string
{
    case Pending = 'pending';
    case Delivered = 'delivered';

    public function label(): string
    {
        return ucfirst($this->value);
    }
}

echo Status::Delivered->label() . PHP_EOL;
echo Status::from('pending')->label() . PHP_EOL;
var_dump(Status::tryFrom('lost'));
echo count(Status::cases()) . PHP_EOL;