# report-system

## install

```
$ git clone git@github.com:ucan-lab/report-server.git
$ cd report-server
$ docker-compose up -d

$ docker-compose run web composer install
$ cp -a .env.example .env
$ docker-compose run web php artisan key:generate
$ docker-compose run web php artisan migrate:refresh --seed
```

### コンテナログイン

```
$ docker exec -it web bash
$ docker exec -it db bash
```

### MySQLログイン

```
$ docker-compose exec db mysql -u developer -pMySQL5.7 report
```
