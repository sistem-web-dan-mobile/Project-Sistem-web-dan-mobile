#!/bin/bash
set -e

echo "Clearing cache..."
php artisan config:clear
php artisan cache:clear

echo "Running migrations..."
php artisan migrate --force

echo "Starting Apache..."
apache2-foreground