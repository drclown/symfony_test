#!/usr/bin/env bash
ENV_NAME="symfony-test-dev"

if [[ $1 == "--clean" ]]
then
    echo "Nettoyage de l'instance"
    docker-compose -f docker/docker-compose-dev.yml -p $ENV_NAME down -v
else
    docker-compose -f docker/docker-compose-dev.yml -p $ENV_NAME down
fi
docker-compose -f docker/docker-compose-dev.yml -p $ENV_NAME up