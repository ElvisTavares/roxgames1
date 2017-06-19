# Rox Games CakePHP

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

Sistema de uma loja de games utilizando [CakePHP](http://cakephp.org) 3.x.

A estrutura basica do framework pode ser encontrado aqui: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Instalação

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) ou update `composer self-update`.

2. Executar `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

Se o Composer for instalado globalmente, execute:

```bash
composer create-project --prefer-dist cakephp/app nomedoapp
```



## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Editar o arquivo`config/app.php` procurar por `'Datasources'` para configurar o banco de dados

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
