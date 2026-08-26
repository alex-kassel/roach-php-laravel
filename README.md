<h1 align="center">🕷️ Roach PHP Laravel Adapter</h1>

<p align="center">
  <strong>Laravel 10–13 adapter for Roach PHP web scraping toolkit. Community fork of roach-php/laravel.</strong>
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

> [!NOTE]
> **Community Fork**  
> This package is a Laravel adapter fork of the original [`roach-php/laravel`](https://github.com/roach-php/laravel) created by [Kai Sassnowski](https://github.com/kaisassnowski).
>
> *As described by the original author:*  
> *"Roach is a complete web scraping toolkit for PHP. It is heavily inspired (read: a shameless clone) of the popular [Scrapy](https://scrapy.org) package for Python."*
>
> **Improvements in this Fork:**
> - **Laravel 13 Support:** Compatible with Laravel 10.x, 11.x, 12.x, and Laravel 13.x.
> - **Enhanced Core Dependency:** Configured to pull our [`alex-kassel/roach-php-core`](https://github.com/alex-kassel/roach-php-core) fork to leverage lazy DOM crawler loading and native JSON response handling.
>
> 📖 **Laravel Documentation:** [https://roach-php.dev/docs/laravel](https://roach-php.dev/docs/laravel) • **Core Docs:** [https://roach-php.dev](https://roach-php.dev)

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

Execute the test suite using PHPUnit:

```bash
composer test
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
