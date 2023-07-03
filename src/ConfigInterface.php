<?php

declare(strict_types=1);

namespace Wearesho\Delivery\KudiSms;

interface ConfigInterface
{
    public const GATEWAY_BASEURL = 'https://account.kudisms.net/api/';

    public function getSenderId(): string;

    public function getUsername(): string;

    public function getPassword(): string;
}
