<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Sanity.io Laravel Service Provider

A service provider for [Laravel](https://laravel.com) that can be used to communicate with the [Sanity.io API](https://sanity.io/) using the [PHP library](https://github.com/sanity-io/sanity-php).

---

## Installation

Once you have Laravel installed, add this package to your project in the typical composer way:

```shell
$ composer require eastslopestudio/laravel-sanity
```

Laravel >= 5 uses Package Auto-Discovery.

> If you don't use auto-discovery, add the ServiceProvider to the providers array in `config/app.php`

```php
Eastslopestudio\\LaravelSanity\\ServiceProvider::class,
```
If you want to use the `Sanity` facade, add this to your facades in app.php:

```php
'Sanity' => Eastslopestudio\\LaravelSanity\\Facade::class
```

---

## Configuration

This package references [environment configuration](https://laravel.com/docs/5.6/configuration#environment-configuration) variables with the following key / values:

```
SANITY_PROJECT_ID=projectidhere
SANITY_DATASET=production
SANITY_TOKEN=authToken
```

You may also publish the config file to your own application and define the appropriate config settings:

```shell
$ php artisan vendor:publish --tag=sanity
```

---

## Example Usage

> The following example assumes you are using the registered `Sanity` facade.

```php
// query latest post that isnt a draft
$query = '*[_type == "post" && !(_id in path("drafts.**"))] {
    _id,
    title,
    slug,
    body
}[0]';
// fetch post
$post = Sanity::client()->fetch($query);
// render block content (transforms array block structure to HTML)
$body = Sanity::html($post['body']);
```
