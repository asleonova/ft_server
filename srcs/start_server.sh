#!/bin/bash

service mysql start
mysql < base.sql
service php7.3-fpm start

# не в режиме daemon, чтобы контейнер "не потух", пока ты не выключешь ngnix
# цикл делать нельзя!!!
nginx -g 'daemon off;'