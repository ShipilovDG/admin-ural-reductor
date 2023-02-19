.DEFAULT_GOAL := help

include .env
DIR := ${CURDIR}

.PHONY: install
install: ## генерация окружения
	@sudo apt install rename
	@rm -f resources/views/*
	@cp .env.example .env
	@npm install
	@npm run build
	@mkdir -p public/assets/css/
	@mkdir -p public/js/
	@mkdir -p resources/views/
	@cp dist/assets/css/main.css public/assets/css/
	@cp dist/js/scripts.js public/js/
	@cp dist/*.html resources/views/
	@cd resources/views/ && rename 's/\.html/.blade.php/' *.html
	@composer install
	@php artisan key:generate
	@docker-compose up -d

.PHONY: up
up: ## поднятие контейнеров
	@docker compose up -d

.PHONY: help
help:
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "\033[36m%-18s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

%:
	@:
