default: down up

all: destroy up

build:
	docker-compose build

# Runs in background
up: build
	docker-compose up -d

# Runs in foreground
up-front: build
	docker-compose up

down:
	docker-compose down

clean:
	docker-compose down --remove-orphans

destroy:
	docker-compose down -v --remove-orphans
