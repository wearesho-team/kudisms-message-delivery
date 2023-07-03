<?php

declare(strict_types=1);

namespace Wearesho\Delivery\KudiSms\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\Delivery\KudiSms;

class ConfigTest extends TestCase
{
    protected const LOGIN = 'login';
    protected const PASSWORD = 'password';
    protected const SENDER = 'Sender';

    protected KudiSms\Config $fakeConfig;

    protected function setUp(): void
    {
        $this->fakeConfig = new KudiSms\Config(
            static::LOGIN,
            static::PASSWORD,
            static::SENDER
        );
    }

    public function testGetLogin(): void
    {
        $this->assertEquals(static::LOGIN, $this->fakeConfig->getUsername());
    }

    public function testGetPassword(): void
    {
        $this->assertEquals(static::PASSWORD, $this->fakeConfig->getPassword());
    }

    public function testGetSenderName(): void
    {
        $this->assertEquals(static::SENDER, $this->fakeConfig->getSenderId());
    }
}
