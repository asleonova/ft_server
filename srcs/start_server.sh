#!/bin/bash

service mysql start
mysql < base.sql
service php7.3-fpm start

# switch off background process mode for the server
nginx -g 'daemon off;'
