#!/bin/sh

chmod 755 storage/
git submodule update --init --recursive
cp .env.example .env
php artisan key:generate
composer install

