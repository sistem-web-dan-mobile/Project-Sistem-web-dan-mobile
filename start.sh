#!/bin/bash
set -e

echo "Clearing Laravel caches..."
php artisan optimize:clear

echo "Caching config..."
php artisan config:cache

echo "Running migrations..."
php artisan migrate --force

echo "Starting Apache..."
apache2-foreground