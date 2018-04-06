## 起動

```
$ docker-compose up -d && open http://localhost:8000/wp-admin/
```

id: admin
pw: admin

## 終了

```
$ docker-compose down -v
```

## DB dump

```
$ docker exec exampledockerwordpress_db_1 /usr/bin/mysqldump -u root --password=password wordpress > db-data/mysql.dump.sql
```

## 開発

```
$ yarn install
$ npm run watch
```
