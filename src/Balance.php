<?php

declare(strict_types=1);

namespace Wearesho\Delivery\KudiSms;

use Wearesho\Delivery;

class Balance implements Delivery\BalanceInterface
{
    public const CURRENCY = 'NGN';

    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCurrency(): ?string
    {
        return static::CURRENCY;
    }
}
