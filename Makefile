.PHONY: install
install: ## генерация окружения
	@sudo apt install rename
	@rm resources/views/*
	@cp .env.example .env
	@composer install
	@npm install
	@npm run build
	@mkdir -p public/assets/css/
	@mkdir -p public/js/
	@mkdir -p resources/views/
	@cp dist/assets/css/main.css public/assets/css/
	@cp dist/js/scripts.js public/js/
	@cp dist/*.html resources/views/
	@cd resources/views/ && rename 's/\.html/.blade.php/' *.html
	@php artisan key:generate
	@docker-compose up -d
