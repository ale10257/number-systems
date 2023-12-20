restart: down up

up:
	docker-compose up -d --build --remove-orphans

composer:
	docker-compose run --rm php-cli composer install

down:
	docker-compose down --remove-orphans

build:
	docker-compose build --no-cache

cd:
	docker-compose run --rm php-cli bash

start:
	docker-compose run --rm php-cli /app/index

test:
	docker-compose run --rm php-cli /app/vendor/bin/phpunit
