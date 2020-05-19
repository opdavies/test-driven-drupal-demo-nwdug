# Test Driven Drupal Talk Demo

## Starting

    docker-compose up -d
    symfony server:start -d

## Installation

    symfony composer install

## Running tests

    symfony php vendor/bin/phpunit web/modules/custom

## Stopping

    symfony server:stop
    docker-compose down

