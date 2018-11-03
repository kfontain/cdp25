DOCKER = docker-compose

default: down up-d

all: destroy up-d

# Runs in foreground
up:
	$(DOCKER) up

# Runs in background
up-d:
	$(DOCKER) up -d

stop:
	$(DOCKER) stop
pause: stop

start:
	$(DOCKER) start
resume: start

down:
	$(DOCKER) down
.PHONY: clean
clean: down

destroy:
	$(DOCKER) down -v
