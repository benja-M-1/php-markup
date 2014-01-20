# PHP Markup

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