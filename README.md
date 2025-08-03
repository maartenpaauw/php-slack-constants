# PHP enums for Slack API events

[![Latest Version on Packagist](https://img.shields.io/packagist/v/maartenpaauw/php-slack-constants.svg?style=flat-square)](https://packagist.org/packages/maartenpaauw/php-slack-constants)
[![Tests](https://img.shields.io/github/actions/workflow/status/maartenpaauw/php-slack-constants/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/maartenpaauw/php-slack-constants/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/maartenpaauw/php-slack-constants.svg?style=flat-square)](https://packagist.org/packages/maartenpaauw/php-slack-constants)

This package provides a PHP string-backed enum for the Slack API events with full support for the Events API and RTM
API. The package helps you maintain consistency by preventing typos and provides context about each event, such as
whether it's supported by certain APIs or if it's deprecated.

## Support Me

<p class="filament-hidden">
    <a href="https://filamentphp.com/plugins/maartenpaauw-model-states">
        <img src="https://raw.githubusercontent.com/maartenpaauw/model-states-for-filament-docs/main/assets/images/model-states-for-filament-banner.jpg"
            alt="Model States for Filament"
            width="700px" />
    </a>
</p>

You can support me by [buying Model States for Filament](https://filamentphp.com/plugins/maartenpaauw-model-states).


## Installation

You can install the package via composer:

```bash
composer require maartenpaauw/php-slack-constants
```

## Usage

```php
use Maartenpaauw\Slack\Constants\Events;

Events::AppMention->value; // app_mention
Events::AppMention->supportsEventsApi(); // true
Events::AppMention->supportsRtmApi(); // false
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Maarten Paauw](https://github.com/maartenpaauw)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
