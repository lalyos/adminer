## Adminer

Adminer (formerly phpMinAdmin) is a full-featured database management tool written in PHP.
This repo is a modification of the [official adminer image](https://hub.docker.com/_/adminer)

## Features

The following additional functionality is added:

- [x] init.sql: demonstrate how to initialize a demo db with some sql.
- [ ] quick login: tierd of filling the login form over and over: use the [one-click-login](https://github.com/giofreitas/one-click-login) plugin
- [x] custom themes: showcase how to swith to an alternative (included theme/design)
- [x] use non-included themes: not all [themes](https://www.adminer.org/en/#extras) are included in the official image.
- [x] add the [sql-log](https://raw.githubusercontent.com/vrana/adminer/master/plugins/sql-log.php) plugin, -so a manual CREATE table, and INSERTS can be saved to init.sql
- [x] add the [dump-json](https://raw.githubusercontent.com/vrana/adminer/master/plugins/dump-json.php) plugin, for fun and profit (quickly create fake json rest api)

## Usage

```
docker-compose up -d
```