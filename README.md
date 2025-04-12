# Squad Modules for Divi Stubs

[![Packagist stats](https://img.shields.io/packagist/dt/mralaminahamed/squad-modules-lite-stubs.svg)](https://packagist.org/packages/mralaminahamed/squad-modules-lite-stubs/stats)
[![Packagist](https://img.shields.io/packagist/v/mralaminahamed/squad-modules-lite-stubs.svg?color=4CC61E&style=popout)](https://packagist.org/packages/mralaminahamed/squad-modules-lite-stubs)
[![Tweet](https://img.shields.io/badge/Tweet-share-d5d5d5?style=social&logo=twitter)](https://twitter.com/intent/tweet?text=https%3A%2F%2Fgithub.com%2Fmralaminahamed%2Fphpstan-squad-modules-lite-stubs&url=I%20use%20mralaminahamed%2Fphpstan-squad-modules-lite-stubs%20for%20IDE%20completion%20and%20static%20analysis)
[![Build Status](https://app.travis-ci.com/mralaminahamed/phpstan-squad-modules-lite-stubs.svg?branch=master)](https://app.travis-ci.com/mralaminahamed/phpstan-squad-modules-lite-stubs)

This package provides stub declarations for the [Squad Modules for Divi plugin](https://wordpress.org/plugins/squad-modules-lite/)
functions, classes and interfaces.
These stubs can help plugin and theme developers leverage IDE completion
and static analysis tools like [PHPStan](https://github.com/phpstan/phpstan).

The stubs are generated directly from the [source](https://wordpress.org/plugins/squad-modules-lite/)
using [php-stubs/generator](https://github.com/php-stubs/generator).

## Requirements

- PHP >=7.1

## Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev mralaminahamed/squad-modules-lite-stubs
```

Alternatively you may download `squad-modules-lite-stubs.stub` directly.

## Usage in PHPStan

Include stubs in PHPStan configuration file.

```yaml
parameters:
    bootstrapFiles:
        - vendor/mralaminahamed/squad-modules-lite-stubs/squad-modules-lite-constants-stubs.stub
        - vendor/mralaminahamed/squad-modules-lite-stubs/squad-modules-lite-stubs.stub
```
