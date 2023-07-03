# KudiSMS Integration
[![Test & Lint](https://github.com/wearesho-team/kudisms-message-delivery/actions/workflows/php.yml/badge.svg?branch=master)](https://github.com/wearesho-team/kudisms-message-delivery/actions/workflows/php.yml)
[![Latest Stable Version](https://poser.pugx.org/wearesho-team/kudisms-message-delivery/v/stable.png)](https://packagist.org/packages/wearesho-team/kudisms-message-delivery)
[![Total Downloads](https://poser.pugx.org/wearesho-team/kudisms-message-delivery/downloads.png)](https://packagist.org/packages/wearesho-team/kudisms-message-delivery)
[![codecov](https://codecov.io/gh/wearesho-team/kudisms-message-delivery/branch/master/graph/badge.svg)](https://codecov.io/gh/wearesho-team/kudisms-message-delivery)

[wearesho-team/message-delivery](https://github.com/wearesho-team/message-delivery) implementation of
[Delivery\ServiceInterface](https://github.com/wearesho-team/message-delivery/blob/1.3.4/src/ServiceInterface.php)

[KudiSMS Documentation](https://developer.kudisms.net/)

## Quick Start
- Install to your Project
```bash
composer require wearsho-team/kudisms-message-delivery:^1.0
```
- Configure environment

| Variable         | Required | Description              |
|------------------|----------|--------------------------|
| KUDISMS_LOGIN    | Yes      | Your login to gateway    |
| KUDISMS_PASSWORD | Yes      | Your password to gateway |
| NUDISMS_SENDER   | Yes      | SMS Sender name          |

- Use in your code
```php
<?php
use Wearesho\Delivery\Message;
use Wearesho\Delivery\KudiSms;

$service = KudiSms\Service::instance();
$service->send(new Message("Text", "3809700000000"));
```

You can also see [examples](./examples).

## Usage
### Configuration
[ConfigInterface](./src/ConfigInterface.php) have to be used to configure requests.
Available implementations:
- [Config](./src/Config.php) - simple implementation using class properties
- [EnvironmentConfig](./src/EnvironmentConfig.php) - loads configuration values from environment using
  [getenv](http://php.net/manual/ru/function.getenv.php)

## Authors
- [Oleksandr <Horat1us> Letnikow](mailto:reclamme@gmail.com)

## License
[MIT](./LICENSE)
