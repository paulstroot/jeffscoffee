# WordPress Starter - without Make

## Prerequisites

- Docker ([Documentation](https://docs.docker.com/get-docker/))
  - run `docker -v` and `docker-compose -v` to make sure it is installed properly

## Download repository

Download this repository to a location of your choosing on your computer and open up a terminal to the root directory.

## Update your env variables (optional)

The .env file contains environment variables for the local docker environment. You can keep all of these default variables. Changing usernames and passwords is low priority because they are only used for local development. If you will be working on multiple sites on your computer, you should change the following values to avoid conflicts:

- COMPOSE_PROJECT_NAME
- WORDPRESS_PORT
- PHPMYADMIN_PORT

> NOTE: several variables will be overridden when the database import is performed. These variables should be noted in the .env file.
> IMPORTANT! If you save this project to a new code repository, add the .env file to .gitignore so that your credentials are not shared on GitHub.

## Copy the wordpress starter theme into the wordpress/wp-content/themes directory

The theme can be found on (github here)[https://github.com/ocupop/wordpress_starter_theme]. Either download from github or clone it into the proper directory. The folder name of the theme should be "starter"

## Build the WordPress environment

Start the Docker container by running `docker-compose up -d --build`

This will install php, mysql, phpmyadmin, WordPress and WP-CLI into a docker container and spin up the site at [localhost:8000](http://localhost:8000/)

## Run Config

Run this in a terminal: `docker-compose -f docker-compose.yml -f wp-auto-config.yml run --rm wp-auto-config`

This will install WordPress and all plug-ins

## Test the site

Navigate to [localhost:8000](http://localhost:8000) to see if the site is displaying correctly

## Log into the wordpress admin

Navigate to [localhost:8000/wp-admin](http://localhost:8000/wp-admin). Username: ocupop, Password: testpass

> You should immediately change the administrator password, or create a new administrator and delete the 'ocupop' user.

## Log into the phpMyAdmin

Navigate to [localhost:3306](http://localhost:3306) to make sure phpMyAdmin is loading properly

## Stopping or pausing development

If you'd like to stop development temporarily you can run `docker-compose stop`, and `docker-compose start` to start them up again.

## What's next?

- [Beging editing your starter theme](editing-starter-theme.md)
- [Saving your in-progress site to GitHub](saving.md)
