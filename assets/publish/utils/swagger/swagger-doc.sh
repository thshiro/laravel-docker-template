#!/bin/bash

cd ../../

printf "$(date +[%d-%b-%Y\ %H:%M:%S]) \033[0;32m Generating Swagger... \033[0m \n"

# Swagger Documentation for Digital Trade v1 API
php ./vendor/bin/openapi --bootstrap ./utils/swagger/swagger-variables.php --output ./public/ \
./app/Http/Controllers

# Fix branchs URL server in the swagger yaml
printf "$(date +[%d-%b-%Y\ %H:%M:%S]) \033[0;32m Fixing Swagger Server URL... \033[0m \n"
cd ./utils/swagger
chmod 777 ./swagger-fix.php
php swagger-fix.php