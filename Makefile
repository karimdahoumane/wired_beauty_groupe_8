DKC = docker compose
EXEC_PHP = $(DKC) exec php
EXEC_CLIENT = $(DKC) exec client
MAKEFLAGS += --no-print-directory
.DEFAULT_GOAL = help

help:
	@grep -E '(^[a-zA-Z0-9_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

## —— Initialisation ———————————————————————————————————————————————————————————
init: ## initialise the development environment
	@if [ ! -f api/.env ]; then \
		(echo "\033[0;33mcannot access 'api/.env': No such file or directory\033[0m"; exit 1) \
	fi
	@if [ ! -f client/.env ]; then \
		(echo "\033[0;33mcannot access 'client/.env': No such file or directory\033[0m"; exit 1) \
	fi

	@$(DKC) up -d --build && \
	$(EXEC_PHP) composer install && \
	$(EXEC_PHP) php artisan migrate && \
	$(EXEC_CLIENT) npm install && \
	make clear

## —— Docker ———————————————————————————————————————————————————————————————————
down: ## stop containers
	@$(DKC) down
exec: ## create a new zsh session in php container
	@$(EXEC_PHP) /bin/zsh
restart: ## recreate containers
	@$(DKC) restart
run: ## start containers in attached mode
	@$(DKC) up
up: ## start containers in the background
	@$(DKC) up -d

## —— Artisan ——————————————————————————————————————————————————————————————————
clear: ## cache invalidation (route, cache, config, view)
	@$(EXEC_PHP) php artisan route:clear && \
	$(EXEC_PHP) php artisan cache:clear && \
	$(EXEC_PHP) php artisan config:clear && \
	$(EXEC_PHP) php artisan view:clear
reset: ## refresh database and seed
	$(EXEC_PHP) php artisan migrate:fresh --seed && \
	make clear
seed: ## seed database
	@$(EXEC_PHP) php artisan db:seed

.PHONY: help init down exec restart run up clear reset seed
