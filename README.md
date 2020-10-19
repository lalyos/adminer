[![Docker Automated build](https://img.shields.io/docker/automated/lalyos/adminer.svg)](https://hub.docker.com/r/lalyos/adminer/)

[![Try in PWD](https://github.com/play-with-docker/stacks/raw/cff22438cb4195ace27f9b15784bbb497047afa7/assets/images/button.png)](http://play-with-docker.com?stack=https://raw.githubusercontent.com/lalyos/adminer/master/stack.yml)

## Adminer

Adminer (formerly phpMinAdmin) is a full-featured database management tool written in PHP.
This repo is a modification of the [official adminer image](https://hub.docker.com/_/adminer)

## Features

The following additional functionality is added:

- [x] init.sql: demonstrate how to initialize a demo db with some sql.
- [x] quick login: tierd of filling the login form over and over: use the [one-click-login](https://github.com/giofreitas/one-click-login) plugin
- [x] custom themes: showcase how to swith to an alternative (included theme/design)
- [x] use non-included themes: not all [themes](https://www.adminer.org/en/#extras) are included in the official image.
- [x] add the [sql-log](https://raw.githubusercontent.com/vrana/adminer/master/plugins/sql-log.php) plugin, -so a manual CREATE table, and INSERTS can be saved to init.sql
- [x] add the [dump-json](https://raw.githubusercontent.com/vrana/adminer/master/plugins/dump-json.php) plugin, for fun and profit (quickly create fake json rest api)

## Usage

```
docker-compose up -d
```

or in Play-with-docker.com:

[![Try in PWD](https://github.com/play-with-docker/stacks/raw/cff22438cb4195ace27f9b15784bbb497047afa7/assets/images/button.png)](http://play-with-docker.com?stack=https://raw.githubusercontent.com/lalyos/adminer/master/stack.yml)

## Quick login config

The oneclick-login is enhamced so it can take the 4 login form values from en vars.
Here are the defaults:
```
ADMINER_LOGIN_HOST=dbx
ADMINER_LOGIN_USER=rootx
ADMINER_LOGIN_PASSWORD=secretx
ADMINER_LOGIN_DATABASE=demox
```