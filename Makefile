.PHONY: helpers
helpers:
	php artisan ide-helper:generate
	php artisan ide-helper:models -F helpers/ModelHelper.php -M
	php artisan ide-helper:meta

pint:
	./vendor/bin/pint

all:
	make helpers
	make pint

install:
	composer install --no-interaction
	rm -rf .env
	cp .env.example .env

	php artisan key:generate
	php artisan storage:link
	chmod -R 777 storage/ bootstrap/

