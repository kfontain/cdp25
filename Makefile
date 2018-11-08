default: down up

build:
	docker-compose build

# Runs in background
up: build
	docker-compose up -d

# Runs in foreground
up-front: build
	docker-compose up


clean: down

down:
	docker-compose down


all: destroy up

destroy:
	docker-compose down -v
