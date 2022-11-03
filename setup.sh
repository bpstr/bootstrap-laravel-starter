#!/bin/bash

cp -r .env.prod .env
php7.4 artisan cache:clear
php7.4 artisan down || true
rm -r bootstrap/cache/*
php7.4 -d allow_url_fopen=on ../composer.phar install --no-interaction --prefer-dist --optimize-autoloader --no-dev
php7.4 artisan migrate
php7.4 artisan auth:clear-resets
php7.4 artisan view:clear
php7.4 artisan up
#php7.4 artisan config:cache
#php7.4 artisan view:cache
#php7.4 artisan route:cache

