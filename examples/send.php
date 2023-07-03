<?php

require_once(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use Wearesho\Delivery;

$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
    ->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
    ->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
    ->immutable()
    ->make();

$dotenv = Dotenv\Dotenv::create($repository, __DIR__);
$dotenv->load();
$dotenv->required(['KUDISMS_USERNAME', 'KUDISMS_PASSWORD', 'KUDISMS_SENDER',]);

$service = Delivery\KudiSms\Service::instance();

do {
    $recipient = readline("Recipient: ");
    if (!preg_match("/^234\d{10}$/", (string)$recipient)) {
        echo "Invalid recipient!" . PHP_EOL;
        $recipient = false;
    }
} while (!$recipient);

do {
    $message = readline("Message: ");
    if ((mb_strlen($message) > 80) || (mb_strlen($message) < 1)) {
        $message = false;
    }
} while (!$message);

try {
    $service->send(new Delivery\Message($message, $recipient));
} catch (Delivery\Exception $exception) {
    echo "Error occured: " . $exception->getMessage() . PHP_EOL;
}
