#!/usr/bin/env bash

docker-compose -f ./docker/docker-compose-dev.yml down

docker-compose -f ./docker/docker-compose-dev.yml up