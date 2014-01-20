# PHP Markup
[![Build Status](https://travis-ci.org/benja-M-1/php-markup.png?branch=master)](https://travis-ci.org/benja-M-1/php-markup) [![Latest Stable Version](https://poser.pugx.org/benjam1/php-markup/v/stable.png)](https://packagist.org/packages/benjam1/php-markup) [![Total Downloads](https://poser.pugx.org/benjam1/php-markup/downloads.png)](https://packagist.org/packages/benjam1/php-markup) [![Latest Unstable Version](https://poser.pugx.org/benjam1/php-markup/v/unstable.png)](https://packagist.org/packages/benjam1/php-markup) [![License](https://poser.pugx.org/benjam1/php-markup/license.png)](https://packagist.org/packages/benjam1/php-markup)

PHP Markup renders files written with a markup language.

## Markups

 * Markdown: .md, .markdown...
 * RestructuredText: .rst (http://docutils.sourceforge.net/)

## Installation

Install PHP Markup through [composer](http://getcomposer.org/)

```bash
$> composer require benjam1/php-markup
```

## Usage

```php
$markups = new BenjaM1\Markup();
$markups->addMarkup(new BenjaM1\Markdown());
$markups->addMarkup(new BenjaM1\Rest2Html());

$markups->render('foo/bar.rst');
$markups->render('foo/baz.md');
```

## Testing

```bash
$> composer install --dev
$> ./vendor/bin/phpspec run
```