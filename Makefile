include ./.env

THEME_INSTALLED = false
WORDPRESS_INSTALLED = false
THEME_MAKEFILE_EXISTS = false

ifneq ("$(wildcard wordpress/wp-config.php)","")
WORDPRESS_INSTALLED = true
endif

ifneq ("$(wildcard wordpress/wp-content/themes/starter)","")
THEME_INSTALLED = true
endif

ifneq ("$(wildcard wpcli/Makefile.theme)","")
THEME_MAKEFILE_EXISTS = true
endif


first#install: download-theme install

#install:
	docker-compose -f docker-compose.yml -f wp-auto-config.yml run --rm wp-auto-config

start:
	docker-compose up -d --build

stop:
	docker-compose stop

down:
	docker-compose down

healthcheck:
	docker-compose run --rm healthcheck

clean: down
	@echo "💥 Removing related folders/files..."
	@rm -rf  mysql/* wordpress/* schema/* wpcli/Makefile.theme

reset: clean

download-theme:
	@echo "\033[0;32mDOWNLOADING STARTER THEME $(WORDPRESS_THEME_URL).\033[0m"
#	Pull the theme down from github
	git clone ${WORDPRESS_THEME_URL}
# Make sure the theme directory exists in the WordPress folder
	mkdir -p wordpress/wp-content/themes
# Move the .schema data into the local schema folder (this includes our .sql database file)
	mv wordpress_starter_theme/schema/* schema
# Move our theme makefile into the wpcli folder (this has instructions for default plug-ins and themes)
	mv schema/Makefile.theme wpcli
# Move the rest of the theme files into the wordpress/themes/starter folder
	mv ${WORDPRESS_THEME_REPO} wordpress/wp-content/themes/starter
# Remove .git from the theme
	@rm -rf wordpress/wp-content/themes/starter/.git/*

detach:
	@echo "\033[0;32m💥DETACHING FROM GITHUB!💥.\033[0m"
# remove the .git folder so that we are free to create a new git repo.
	@rm -rf .git
# remove the schema folder. We will no longer need it for a fresh install.
	@rm -rf schema
#comment out the 'install' command so it is not run accidentally
	sed -i '' 's/#install:/##install:/g' Makefile



check:
ifeq ($(THEME_INSTALLED), true)
	@echo "\033[0;32mTheme Installed.\033[0m"
else
	@echo "\033[0;32mTheme NOT installed.\033[0m"
endif
ifeq ($(WORDPRESS_INSTALLED), true)
	@echo "\033[0;32mWordpress Installed.\033[0m"
else
	@echo "\033[0;32mWordpress NOT installed.\033[0m"
endif


# docker-compose run --rm wpcli core version