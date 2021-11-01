restart: .baseimage
	docker compose down
	git pull
	docker compose build
	docker compose up -d

.baseimage: helper/Dockerfile
	docker build -t phpredis:latest helper
	touch .baseimage