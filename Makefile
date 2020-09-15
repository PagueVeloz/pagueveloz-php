# /bin/bash

DKC=docker-compose

build:
	$(DKC) down
	$(DKC) build
	$(DKC) up -d --remove-orphans --force-recreate
	$(DKC) ps
		
up:
	$(DKC) up -d --remove-orphans --force-recreate

down:
	$(DKC) down

bash:
	$(DKC) exec app ash
