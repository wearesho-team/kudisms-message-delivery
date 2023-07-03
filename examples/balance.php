<?php

require_once(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use Wearesho\Delivery\KudiSms;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dotenv->required(['KUDISMS_USERNAME', 'KUDISMS_PASSWORD', 'KUDISMS_SENDER',]);

$service = KudiSms\Service::instance();
$balance = $service->balance();

echo "KudiSMS Balance " . PHP_EOL;
echo "Currency: " . $balance->getCurrency() . PHP_EOL;
echo "Amount: " . $balance->getAmount() . " NGN " . PHP_EOL;
