# hotwo:
# $ make upload
# or
# $ make upload-all

THEME_DIR=data/themes/template

up:
	docker-compose up -d && open http://localhost:8000/wp-admin/

down:
	docker-compose down -v

dump:
	docker exec example-docker-wordpress_db_1 /usr/bin/mysqldump -u root --password=somewordpress wordpress > db-data/mysql.dump.sql

dev:
	cd $(THEME_DIR) && ./node_modules/.bin/webpack --watch --mode development --config ./webpack/webpack.config.js
