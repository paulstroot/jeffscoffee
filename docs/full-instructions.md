# Wordpress Starter - Full Instructions

## Prerequisites

- Docker ([Documentation](https://docs.docker.com/get-docker/))
  - run `docker -v` and `docker-compose -v` to make sure it is installed properly. This starter was developed with docker 20.10.22 and docker-compose v2.15.1
- Make ([Docs])(https://www.make.com/en)
  - run `make -v` to make sure it's installed properly. This starter was devloped with Make 3.81
- Git
  - run `git -v` to make sure it's installed properly.

## Download repository

Clone this repository to a location of your choosing on your computer and open up a terminal to the root directory.

## Update your env variables (optional)

The .env file contains environment variables for the local docker environment. You can keep all of these default variables. Changing usernames and password for phpmyadmin is low priority because they are only used for local development. It's recommended to change these variables:

- COMPOSE_PROJECT_NAME (to avoid docker naming conflicts)
- WORDPRESS_PORT (to avoid conflicts with other running services)
- PHPMYADMIN_PORT (to avoid conflicts with other running services)

> NOTE: several variables will be overridden when the database import is performed. These variables should be noted in the .env file. Don't bother changing these because they will be overridden on firstinstall.

> IMPORTANT! This enviroment is intended for local development only. If you publish to the web make sure that no sensitive information is exposed through this .env file.

## Build the WordPress environment

Install your website by running `make firstinstall`

This will do the following actions:

- Install php, mysql, phpmyadmin, WordPress and WP-CLI into a docker container and spin up the site at [localhost:8000](http://localhost:8000/).
- Download the Ocupop starter theme from github and place it in the wp-content/themes directory.
  - Along with the theme a .sql file is downloaded and imported into the database.
  - along with the theme a makefile.theme file is downloaded and run for installing default plugins.

## Test the site

Navigate to [localhost:8000](http://localhost:8000) to see if the site is displaying correctly

## Log into the wordpress admin

Navigate to [localhost:8000/wp-admin](http://localhost:8000/wp-admin). Username: ocupop, Password: testpass . Make sure that several required plug-ins have been installed and activated


## Log into the phpMyAdmin

Navigate to [localhost:3306](http://localhost:8080) to make sure phpMyAdmin is loading properly

## Detach the site from the starter repository

Detach this codebase from github to prevent accidental commits. To do this, run `make detach`. If you like, you can then commit to a new code repository for your work-in-progress on the new site. See [Saving your in-progress site to GitHub](saving.md)

## Stopping or pausing development

If you'd like to stop development temporarily you can run `docker-compose stop`, and `docker-compose start` to start them up again.

## Once everything is running properly




*Recommended customizations:*

> You should immediately change the administrator password, or create a new administrator and delete the 'ocupop' user.

>  Change the name of the theme by updating the theme folder from "starter" to something custom, and updating the theme name in starter/theme/style.css. Then, add that theme to the .gitignore file so that it will be checked into the codebase.

## What's next?

- [Beging editing your starter theme](editing-starter-theme.md)
- [Saving your in-progress site to GitHub](saving.md)
