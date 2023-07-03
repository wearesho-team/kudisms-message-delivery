<?php

declare(strict_types=1);

namespace Wearesho\Delivery\KudiSms;

class Config implements ConfigInterface
{
    public string $username;

    public string $password;

    public string $senderId;

    public function __construct(
        string $username,
        string $password,
        string $senderId
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->senderId = $senderId;
    }

    public function getSenderId(): string
    {
        return $this->senderId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
