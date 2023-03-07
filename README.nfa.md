## Docker

### drupal

Environment variables reach PHP via APACHE, passing is opt-in. See [`docker/apache/environment.conf`](docker/apache/environment.conf) for details

PHP:X.X-apache's standard image entrypoint is overriden, See [`docker/bin/custom-entrypoint`](docker/bin/custom-entrypoint) for details

## Docker compose

There are 3 docker compose files on the project:
* `docker-compose.yaml`: The base file defining services present in all environments
* `docker-compose.override.yaml`: For local overrides, usefull for the development team. See https://docs.docker.com/compose/extends/
* `docker-compose.portainer.yaml`: Used in portainer deployments

## Github Actions
