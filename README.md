<h1 align="center">🕷️ Roach PHP Laravel Adapter</h1>

<p align="center">
  <strong>Seamless Laravel integration and Artisan toolkit for Roach PHP web scraping</strong>
</p>

<p align="center">
  <a href="#key-features">Key Features</a> •
  <a href="#requirements">Requirements</a> •
  <a href="#installation">Installation</a> •
  <a href="#usage">Usage</a> •
  <a href="#testing">Testing</a> •
  <a href="#credits">Credits</a> •
  <a href="CHANGELOG.md">Changelog</a>
</p>

<p align="center">
  <a href="RELEASE-GATE.md"><img src="https://img.shields.io/badge/Audit-Verified-10b981?logo=shield" alt="Audit Verified"></a>
  <a href="https://packagist.org/packages/alex-kassel/roach-php-laravel"><img src="https://img.shields.io/packagist/v/alex-kassel/roach-php-laravel?color=f59e0b&logo=packagist&logoColor=white" alt="Latest Version"></a>
  <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-10%20%7C%2011%20%7C%2012%20%7C%2013-ff2d20?logo=laravel&logoColor=white" alt="Laravel Support"></a>
  <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-8.2+-777bb4?logo=php&logoColor=white" alt="PHP Support"></a>
  <a href="phpstan.neon"><img src="https://img.shields.io/badge/PHPStan-Level%208-8b5cf6?logo=php&logoColor=white" alt="PHPStan Level 8"></a>
</p>

---

## Key Features

* **Laravel Service Container Bridge:** First-class dependency injection and configuration bindings for all spiders and item pipelines.
* **Artisan Scaffolding:** Generate spiders, middlewares, and item processors instantly via `php artisan roach:spider`.
* **Queue Integration:** Asynchronously dispatch spider runs onto Laravel Queues for background processing.
* **Multi-Version Laravel Compatibility:** Fully tested across Laravel 10.x, 11.x, 12.x, and 13.x.

---

## Requirements

* **PHP:** 8.2+ (tested on PHP 8.2, 8.3, and 8.4)
* **Laravel Framework:** 10.x | 11.x | 12.x | 13.x
* **Core Library:** `alex-kassel/roach-php-core: ^1.0`

---

## Installation

Install the package via Composer:

```bash
composer require alex-kassel/roach-php-laravel
```

Optionally publish the configuration file:

```bash
php artisan vendor:publish --tag="roach-config"
```

---

## Usage

Generate a new spider:

```bash
php artisan roach:spider ExampleSpider
```

Start the spider through the Roach facade or dependency injection:

```php
use RoachPHP\Laravel\Facades\Roach;

// Run synchronously
Roach::startSpider(\App\Spiders\ExampleSpider::class);

// Or dispatch as a queued job
Roach::queueSpider(\App\Spiders\ExampleSpider::class);
```

---

## Testing

Execute the test suite using Artisan:

```bash
php artisan test -c packages/alex-kassel/roach-php-laravel/phpunit.xml
```

---

## Credits

This package is a modern community fork and continuation of the original `roach-php/laravel` created by **Kai Sassnowski**.

* **Kai Sassnowski** ([@kaisassnowski](https://github.com/kaisassnowski)) — Original Author & Architecture
* **Alexander Macenko** ([@alex-kassel](https://github.com/alex-kassel)) — Fork Maintainer & Modern Laravel Compatibility
* **All Contributors** — Thanks to all Open Source contributors who have contributed to Roach PHP

---

## Changelog

Please see [CHANGELOG.md](CHANGELOG.md) for more information on what has changed recently.

---

## Security Vulnerabilities

Please review [Security Policies](https://github.com/alex-kassel/roach-php-laravel/security/policy) on how to report vulnerabilities.

---

## License

The MIT License (MIT). Please see [LICENSE.md](LICENSE.md) for more information.
