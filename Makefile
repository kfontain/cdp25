PHPUNIT_CONFIG=phpunit.xml
E2E_TEST_DIR=tests/e2e

default: down up
all: destroy up
test: test-unit test-e2e

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
	rm $(E2E_TEST_DIR)/error.log
	docker-compose down --remove-orphans

destroy:
	docker-compose down -v --remove-orphans

test-unit:
	docker pull phpunit/phpunit
	docker run -v "$$(pwd)":/app --rm phpunit/phpunit -c $(PHPUNIT_CONFIG)

test-e2e: up
	pip install --user -r $(E2E_TEST_DIR)/requirements.txt
	$(E2E_TEST_DIR)/run-all.sh
