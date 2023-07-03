<?php

declare(strict_types=1);

namespace Wearesho\Delivery\KudiSms;

use Horat1us\Environment;

class EnvironmentConfig extends Environment\Config implements ConfigInterface
{
    public const DEFAULT_KEY_PREFIX = 'KUDISMS_';

    public function __construct(string $keyPrefix = self::DEFAULT_KEY_PREFIX)
    {
        parent::__construct($keyPrefix);
    }

    public function getUsername(): string
    {
        return $this->getEnv('USERNAME');
    }

    public function getPassword(): string
    {
        return $this->getEnv('PASSWORD');
    }

    public function getSenderId(): string
    {
        return $this->getEnv('SENDER');
    }
}
