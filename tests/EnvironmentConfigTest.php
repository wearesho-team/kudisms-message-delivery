<?php

declare(strict_types=1);

namespace Wearesho\Delivery\KudiSms\Tests;

use Horat1us\Environment\Exception;
use PHPUnit\Framework\TestCase;
use Wearesho\Delivery\KudiSms;

class EnvironmentConfigTest extends TestCase
{
    protected const USERNAME = 'username';
    protected const PASSWORD = 'password';
    protected const SENDER = 'sender';

    protected KudiSms\EnvironmentConfig $fakeConfig;

    protected function setUp(): void
    {
        $this->fakeConfig = new KudiSms\EnvironmentConfig();
    }

    public function testSuccessGetUSERNAME(): void
    {
        putenv('KUDISMS_USERNAME=' . static::USERNAME);

        $this->assertEquals(static::USERNAME, $this->fakeConfig->getUsername());
    }

    public function testFailedGetUSERNAME(): void
    {
        $this->expectException(Exception\Missing::class);

        putenv('KUDISMS_USERNAME');

        $this->fakeConfig->getUsername();
    }

    public function testSuccessGetPassword(): void
    {
        putenv('KUDISMS_PASSWORD=' . static::PASSWORD);

        $this->assertEquals(static::PASSWORD, $this->fakeConfig->getPassword());
    }

    public function testFailedGetPassword(): void
    {
        $this->expectException(Exception\Missing::class);

        putenv('KUDISMS_PASSWORD');

        $this->fakeConfig->getPassword();
    }

    public function testSuccessGetSenderName(): void
    {
        putenv('KUDISMS_SENDER=' . static::SENDER);

        $this->assertEquals(static::SENDER, $this->fakeConfig->getSenderId());
    }

    public function testSuccessGetDefaultSenderName(): void
    {
        $this->expectException(Exception\Missing::class);

        putenv('KUDISMS_SENDER');

        $this->fakeConfig->getSenderId();
    }
}
